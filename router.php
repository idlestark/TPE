<?php
include_once './app/controllers/app-controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$CRUDCatsController = new CRUDCatsController();
$CRUDImpressionsController = new CRUDImpressionsController();
$Typecontroller = new TypeController();
$ImpressionsController = new ImpressionsController();

$params = explode('/', $action); 

switch ($params[0]) {
    case 'addCategory':       
        $CRUDCatsController->addCategory();
        break;
    case 'addImpression':
        $CRUDImpressionsController->addImpression();
        break;
    case 'removeImpression':
        $id = $params[1];       
        $CRUDImpressionsController->removeImpression($id);
        break;    
    case 'removeCategory':
        $id = $params[1];       
        $CRUDCatsController->removeCategory($id);
        break;    
    case 'impresiones':
        $id =$params[1];
        $ImpressionsController->showImpressionDetails($id);
        break;
    case 'home':
        $ImpressionsController->showImpressions();
        break;
    case 'about':
        $controller = new AboutController();
        $controller->ShowAbout();
        break;
    case 'cats':
        if (empty($params[1])) {
            
            $Typecontroller->ShowListType();
        } 
        else{
            $id = $params[1];
            $Typecontroller->ShowTypes($id);
            break;  
        }
          
}