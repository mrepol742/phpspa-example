<?php

require '../vendor/autoload.php';

use phpSPA\App;
use phpSPA\Compression\Compressor;

$app = new App(require './layouts/layout.php');

$app->defaultTargetID('app')
   ->compression(Compressor::LEVEL_AUTO, false)
   ->attach(require './pages/Home.php')
   ->cors()

   ->run();
