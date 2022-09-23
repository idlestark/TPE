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