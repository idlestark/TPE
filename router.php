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
    case 'impresiones':
        $id =$params[1];
        $controller = new ImpressionDetailsController();
        $controller->showImpressionDetails($id);
        break;
    case 'home':
        $controller = new ImpressionsController();
        $controller->showImpressions();
        break;
    case 'about':
        $controller = new AboutController();
        $controller->ShowAbout();
        break;
    case 'cats':
        if (empty($params[1])) {
            $controller = new TypeListController();
            $controller->ShowListType();
        } 
        $id =$params[1];
        $controller = new TypeController();
        $controller->ShowTypes($id);
        break;    
}
