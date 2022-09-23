<?php
include_once './app/controllers/app-controller.php';
require_once './app/app.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action); 

switch ($params[0]) {
    case 'home':
        $controller = new ImpressionsController();
        $controller->showImpressions();
        break;
    case 'about':
        showAbout();
        break;
    case 'cats':
        $controller = new TypeController();
        $controller->showTypes();
        break;
}