<?php
require '../vendor/autoload.php';

use phpSPA\App;

$app = new App(require './layouts/layout.php');
$app->defaultTargetID('app');

$app->attach(require './pages/Home.php');

$app->run();
