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
        //obtiene las impresiones del modelo
        $impressions = $this->model->getImpressions();

      //actualizo la vista
      $this->view->showImpressions($impressions);
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
}

class TypeListController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new TypeListModel();
        $this->view = new TypeListView();
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

class ImpressionDetailsController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new ImpressionDetails();
        $this->view = new ImpressionD();
    }

   function showImpressionDetails($id){
    $ImpressionDetails = $this->model->ImpressionDetails($id);
    $this->view->impressionDetails($ImpressionDetails);
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
        header("Location: " . "http://localhost/WEB2/TPE/cats");
    }

    function removeCategory($id) {
        $this->model->removeCategoryById($id);
        header("Location: " . "http://localhost/WEB2/TPE/cats");
    }

}

class CRUDImpressionsController{
    private $model;

    function __construct(){
        $this->model = new CRUDImpression();
        
    }

    function addImpression(){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $selectCat = $_POST['selectCat'];
        $dimensions = $_POST['dimensions'];
        $price = $_POST['price'];

        $id = $this->model->addImpression($name, $description, $selectCat,$dimensions,$price);

        header("Location: " . BASE_URL);
        
    }
}