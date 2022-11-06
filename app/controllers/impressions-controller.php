<?php
include_once 'app/helpers/auth-helper.php';
include_once 'app/models/impressions-model.php';
include_once 'app/views/app-view.php';





class AboutController{
    
    private $view;

    function __construct(){
        $this->view = new AboutView();
    }

    function ShowAbout(){
    session_start();  
     $this->view->ShowAbout(); 

    }
}




class CRUDImpressionsController{
    private $model;

    function __construct(){
        $this->model = new CRUDImpression();
        $this->view = new ImpressionsView();
    }

    

    function showImpressions(){
        session_start();    
        $impressions = $this->model->getImpressions();
        $typesModel = new CRUDCategory();
        $types = $typesModel->getTypeList();
        $this->view->showImpressions($impressions, $types); 
        }

    function showImpressionDetails($id){
        session_start();
        $ImpressionDetails = $this->model->ImpressionDetails($id);
        $this->view->impressionDetails($ImpressionDetails);
       }

    function addImpression(){
        $AuthHelper = new AuthHelper();
        $AuthHelper->checkLoggedIn();
        $name =$_POST['name'];
        $description = $_POST['description'];
        $selectImp = (int)$_POST['selectImp'];
        $dimensions = $_POST['dimensions'];
        $price = $_POST['price'];

        $id = $this->model->addImpression($name, $description, $selectImp, $dimensions, $price);

        header("Location: " . BASE_URL);
        
    }

    function showFormEditImpressions($id){
        $AuthHelper = new AuthHelper();
        $AuthHelper->checkLoggedIn();   
        $impressions = $this->model->getImpressionsForm($id);
        $CatsModel = new CRUDCategory();
        $CatsId = $CatsModel->getTypeList();
        $this->view->EditImpressionsForm($impressions, $CatsId);
        
    }


    function updateImpression($id){
        if (isset($_POST['inputCat']) && $_POST ['inputCat'] == 'vacio') {
            header("Location: " . BASE_URL . "showFormEditImpressions/$id");
        } else {
        $AuthHelper = new AuthHelper();
        $AuthHelper->checkLoggedIn();
        $name = $_POST['name'];
        $description = $_POST['description'];
        $dimensions = $_POST['dimensions'];
        $price = $_POST['price'];
        $inputCat = $_POST['inputCat'];
        $this->model->updateImpression($name, $description, $inputCat, $dimensions, $price, $id);
        header("Location: " . BASE_URL);
        }
    }


    function removeImpression($id) {
        $AuthHelper = new AuthHelper();
        $AuthHelper->checkLoggedIn();
        $this->model->removeImpressionbyID($id);
        header("Location: " . BASE_URL . "home");
    }
}