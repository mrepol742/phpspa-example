<?php

require __DIR__ . "/vendor/autoload.php";

use phpSPA\App;
use phpSPA\Component;

require __DIR__ . "/pages/layouts/Layout.php";
require __DIR__ . "/pages/Home.php";
require __DIR__ . "/pages/auth/Login.php";
require __DIR__ . "/pages/auth/Logout.php";
require __DIR__ . "/pages/auth/Register.php";
require __DIR__ . "/pages/user/Profile.php";
require __DIR__ . "/controllers/auth/AuthController.php";


$app = new App("Layout");
$app->defaultTargetID("app");

$app->attach(new Component("Home")->title("Home")->method("GET")->route("/"));
$app->attach(
    new Component("Login")->title("Login")->method("GET")->route("/login")
);
$app->attach(
    new Component("Logout")->title("Logout")->method("GET")->route("/logout")
);
$app->attach(
    new Component("Register")
        ->title("Login")
        ->method("GET")
        ->route("/register")
);
$app->attach(
    new Component("UserProfile")
        ->title("Profile")
        ->method("GET")
        ->route("/profile")
);

$app->attach(new Component("LoginHandler")->method("POST")->route("/login"));
$app->attach(
    new Component("RegisterHandler")->method("POST")->route("/register")
);
$app->attach(new Component("LogoutHandler")->method("POST")->route("/logout"));

$app->run();
