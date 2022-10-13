<?php
include_once 'app/helpers/auth-helper.php';
include_once 'app/models/impressions-model.php';
include_once 'app/views/app-view.php';
include_once 'app/models/type-model.php';





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


class CRUDCatsController{
    private $model;

    function __construct(){
        $this->model = new CRUDCategory();
        $this->view = new ImpressionsView();
    }

    function ShowTypes($id){
        session_start();
        $types = $this->model->getTypesbyId($id);
        $this->view->ShowTypes($types);
    }

    function ShowListType(){
        session_start();
        $ListTypes = $this->model->getTypeList();
        $this->view->ListTypes($ListTypes);
          }
      

    function addCategory(){
        $AuthHelper = new AuthHelper();
        $AuthHelper->checkLoggedIn();
        
        $namecats = $_POST['namecats'];
        $descriptioncats = $_POST['descriptioncats'];

        $id = $this->model->addCategory($namecats, $descriptioncats,);
        header("Location: " . BASE_URL . "cats");
    }

    function removeCategory($id) {
        $AuthHelper = new AuthHelper();
        $AuthHelper->checkLoggedIn();
        $this->model->removeCategoryById($id);
        header("Location: " . BASE_URL . "cats");
    }

 

    function showFormEditCat($id){
        $AuthHelper = new AuthHelper();
        $AuthHelper->checkLoggedIn();   
        $types = $this->model->getTypesForm($id);
        $this->view->EditCatsForm($types);
    }

 


    function updateCategory($id){
        $AuthHelper = new AuthHelper();
        $AuthHelper->checkLoggedIn();
        $name = $_POST['name'];
        $description = $_POST['description'];
        $this->model->updateCategory($id, $name, $description);
        header("Location: " . BASE_URL . "cats");
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