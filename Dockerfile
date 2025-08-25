FROM php:8.4-apache

WORKDIR /var/www/html

# Install system dependencies and PHP extensions
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends git unzip curl; \
    docker-php-ext-install pdo pdo_mysql; \
    a2enmod rewrite headers; \
    rm -rf /var/lib/apt/lists/*

# PHP production tweaks
RUN { \
      echo "display_errors=Off"; \
      echo "short_open_tag=On"; \
      echo "log_errors=On"; \
      echo "error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT"; \
      echo "memory_limit=256M"; \
      echo "opcache.enable=1"; \
      echo "opcache.enable_cli=1"; \
      echo "opcache.validate_timestamps=0"; \
      echo "opcache.max_accelerated_files=20000"; \
    } > /usr/local/etc/php/conf.d/custom.ini

# Set Apache DocumentRoot to /var/www/html
ENV APACHE_DOCUMENT_ROOT=/var/www/html

RUN set -eux; \
    sed -ri "s#DocumentRoot /var/www/html#DocumentRoot ${APACHE_DOCUMENT_ROOT}#g" /etc/apache2/sites-available/000-default.conf; \
    { \
      echo "<Directory ${APACHE_DOCUMENT_ROOT}>"; \
      echo "    AllowOverride All"; \
      echo "    Require all granted"; \
      echo "</Directory>"; \
      echo 'ServerSignature Off'; \
      echo 'ServerTokens Prod'; \
    } >> /etc/apache2/conf-available/z-app.conf; \
    a2enconf z-app

# Copy full project
COPY . /var/www/html

# Optional Composer install (if present at repo root)
RUN if [ -f composer.json ]; then \
      echo "Installing Composer dependencies..."; \
      php -r "copy('https://getcomposer.org/installer','composer-setup.php');"; \
      php composer-setup.php --install-dir=/usr/local/bin --filename=composer; \
      rm composer-setup.php; \
      composer install --no-dev --prefer-dist --no-progress --optimize-autoloader; \
    fi

# Permissions
RUN chown -R www-data:www-data /var/www/html

ENV APP_ENV=production

HEALTHCHECK --interval=30s --timeout=5s --start-period=10s --retries=3 \
  CMD curl -fsS http://localhost/ || exit 1

EXPOSE 80