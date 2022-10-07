<?php
include_once 'app/models/impressions-model.php';
include_once 'app/views/app-view.php';
include_once 'app/models/type-model.php';

class ImpressionsController{

    private $model;
    private $view;
    
    function __construct(){
        $this->model = new ImpressionsModel();
        $this->view = new ImpressionsView();
    }

    function showImpressions(){
    $impressions = $this->model->getImpressions();
    $typesModel = new TypeModel();
    $types = $typesModel->getTypeList();
    $this->view->showImpressions($impressions, $types); 
    
    }
    
    function showImpressionDetails($id){
        $ImpressionDetails = $this->model->ImpressionDetails($id);
        $this->view->impressionDetails($ImpressionDetails);
       }

}

class TypeController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new TypeModel();
        $this->view = new TypesView();
    }

    function ShowTypes($id){
    //obtiene los tipos del modelo
    $types = $this->model->getTypesbyId($id);
    //actualizo la vista
     $this->view->ShowTypes($types);
    }

    function ShowListType(){
        $ListTypes = $this->model->getTypeList();
        $this->view->ListTypes($ListTypes);
          }
      
}



class AboutController{
    
    private $view;

    function __construct(){
        $this->view = new AboutView();
    }

    function ShowAbout(){
       
     $this->view->ShowAbout(); 

    }
}


class CRUDCatsController{
    private $model;

    function __construct(){
        $this->model = new CRUDCategory();
        
    }

    function addCategory(){
        $namecats = $_POST['namecats'];
        $descriptioncats = $_POST['descriptioncats'];

        $id = $this->model->addCategory($namecats, $descriptioncats,);
        header("Location: " . BASE_URL . "cats");
    }

    function removeCategory($id) {
        $this->model->removeCategoryById($id);
        header("Location: " . BASE_URL . "cats");
    }

}

class CRUDImpressionsController{
    private $model;

    function __construct(){
        $this->model = new CRUDImpression();
        
    }

    function addImpression(){
        $name =$_POST['name'];
        $description = $_POST['description'];
        $selectImp = (int)$_POST['selectImp'];
        $dimensions = $_POST['dimensions'];
        $price = $_POST['price'];

        $id = $this->model->addImpression($name, $description, $selectImp, $dimensions, $price);

        header("Location: " . BASE_URL);
        
    }

    function removeImpression($id) {
        $this->model->removeImpressionbyID($id);
        header("Location: " . BASE_URL . "home");
    }
}