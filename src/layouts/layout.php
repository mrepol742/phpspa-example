<?php

require_once './components/Navbar.php';
require_once './components/Footer.php';

return fn () => <<<HTML
    <html>
        <head>
            <title>PHPSPA Example</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
        </head>
        <body>
            <Navbar />
            <div id="app" class="my-2"></div>
            <Footer />

            <script src="https://unpkg.com/phpspa-js"></script>
            <script src="https://unpkg.com/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
    </html>
HTML;
