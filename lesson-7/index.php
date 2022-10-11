<?php
ini_set('session.cookie_lifetime', 84688);
session_start();

//$uri = $_SERVER['REQUEST_URI'];

$controller = $_GET['controller'] ?? 'home';
//if ($controller === 'home') {
//    require_once 'controllers/HomePageController.php';
//}

$routes = require 'rout/routes.php';

var_dump($routes[$_SERVER['REQUEST_URI']]);

require_once $routes[$_SERVER['REQUEST_URI']];