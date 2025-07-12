<?php

require_once './components/navbar.php';
require_once './components/footer.php';

function layout()
{
   return <<<HTML
    <html>
        <head>
            <title>PHPSPA Example</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
        </head>
        <body>

            <Navbar />

            <div id="app" class="my-2">__CONTENT__</div>

            <Footer />

            <script src="https://cdn.jsdelivr.net/npm/phpspa-js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        </body>
    </html>
    HTML;
}
