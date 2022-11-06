<?php
include_once 'app/helpers/auth-helper.php';
include_once 'app/views/app-view.php';
include_once 'app/models/type-model.php';

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