<?php

include "../vendor/autoload.php";

use App\Controllers\AuthController;

$uri = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

$controller = new AuthController;

// Basic Routing
if($uri == '/login' && $method == 'GET') {
     $controller->showLogin();
} elseif ($uri == '/login' && $method == 'POST') {
     $controller->login();
} elseif ($uri == '/register' && $method == 'GET') {
     $controller->showRegister();
} elseif ($uri == '/register' && $method == 'POST') {
     $controller->register();
} elseif ($uri == '/dashboard' && $method == 'GET') {
     $controller->dashboard();
} elseif ($uri == '/logout' && $method == 'GET') {
     $controller->logout();
}