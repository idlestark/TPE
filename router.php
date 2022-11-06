<?php
include_once './app/controllers/impressions-controller.php';
include_once './app/controllers/cats-controller.php';
include_once './app/controllers/auth-controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$CRUDCatsController = new CRUDCatsController();
$CRUDImpressionsController = new CRUDImpressionsController();


$params = explode('/', $action); 

switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
            
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
    case 'showFormEditImpressions':
        $id = $params[1];       
        $CRUDImpressionsController->showFormEditImpressions($id);
       break;
        case 'editImpression':
       $id = $params[1];  
       $CRUDImpressionsController->updateImpression($id);
        break;        
    case 'showFormEditCat':
        $id = $params[1];       
       $CRUDCatsController->showFormEditCat($id);
       break;
    case 'editCategory':
        $id = $params[1];  
        $CRUDCatsController->updateCategory($id);
        break;    
    case 'impresiones':
        $id =$params[1];
        $CRUDImpressionsController->showImpressionDetails($id);
        break;
    case 'home':
        $CRUDImpressionsController->showImpressions();
        break;
    case 'about':
        $controller = new AboutController();
        $controller->ShowAbout();
        break;
    case 'cats':
        if (empty($params[1])) {
            
            $CRUDCatsController->ShowListType();
        } 
        else{
            $id = $params[1];
            $CRUDCatsController->ShowTypes($id);
            break;  
        }
          
}