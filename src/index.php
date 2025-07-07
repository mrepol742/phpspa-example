<?php
require '../vendor/autoload.php';
require './layouts/layout.php';

require './pages/Home.php';

use phpSPA\App;
use phpSPA\Component;

$app = new App('layout');
$app->defaultTargetID('app');

$app->attach(new Component('Home')
    ->title('Home Page')
    ->method('GET')
    ->route('/'));

$app->run();
