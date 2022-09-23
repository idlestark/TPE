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
        $impresiones = $this->model->getImpressions();

      //actualizo la vista
      $this->view->showImpressions($impresiones);
    }
    
}

class TypeController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new TypeModel();
        $this->view = new TypesView();
    }

    function ShowTypes(){
    //obtiene los tipos del modelo
    $types = $this->model->getTypes();
    
    //actualizo la vista
    $this->view->ShowTypes($types);
    }
}