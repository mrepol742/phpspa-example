<?php

require "../vendor/autoload.php";

use phpSPA\App;
use phpSPA\Component;

require "./layouts/Layout.php";
require "./pages/Home.php";
require "./pages/auth/Login.php";
require "./pages/auth/Logout.php";
require "./pages/auth/Register.php";
require "./pages/user/Profile.php";
require "./controllers/auth/AuthController.php";

$app = new App("Layout");
$app->defaultTargetID("app");

$app->attach(new Component("Home")->title("Home")->method("GET")->route("/"));
$app->attach(
    new Component("Login")->title("Login")->method("GET")->route("/login"),
);
$app->attach(
    new Component("Logout")->title("Logout")->method("GET")->route("/logout"),
);
$app->attach(
    new Component("Register")
        ->title("Login")
        ->method("GET")
        ->route("/register"),
);
$app->attach(
    new Component("UserProfile")
        ->title("Profile")
        ->method("GET")
        ->route("/profile"),
);

$app->attach(new Component("LoginHandler")->method("POST")->route("/login"));
$app->attach(
    new Component("RegisterHandler")->method("POST")->route("/register"),
);
$app->attach(new Component("LogoutHandler")->method("POST")->route("/logout"));

$app->run();
