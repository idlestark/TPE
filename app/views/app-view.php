<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ImpressionsView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
   }

    function showImpressions($impressions, $types){
     $this->smarty->assign('impressions', $impressions);
     $this->smarty->assign('types', $types);
     $this->smarty->display('impressionsList.tpl');
    }

    function ImpressionDetails($ImpressionDetails){
        $this->smarty->assign('types', $ImpressionDetails);
        $this->smarty->display('impressionsDetails.tpl');
        
    }
}

class TypesView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
   }
    function showTypes($types){
        $this->smarty->assign('types', $types);
        $this->smarty->display('typesView.tpl');
    }

    function ListTypes($ListTypes){
        $this->smarty->assign('ListTypes', $ListTypes);
        $this->smarty->display('typesListView.tpl');
         
     }

}


class AboutView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
   }
    
    function ShowAbout(){
        $this->smarty->display('aboutUs.tpl');
       
    }
}
