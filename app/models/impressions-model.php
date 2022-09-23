<?php

class ImpressionsModel{

    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    function getImpressions(){
        $db = $this->connectDB();
        
        $sentence = $db->prepare( "select * from objeto");
        
        $sentence->execute();
        
        $impressions = $sentence->fetchAll(PDO::FETCH_OBJ);
        
        return $impressions;
        
        } 
    
}

class ImpressionDetails {
    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    function ImpressionDetails($id){
        $db = $this->connectDB();

        $sentence = $db->prepare( "SELECT * FROM objeto WHERE id = '$id'");

        $sentence->execute();
        
        $ImpressionDetails = $sentence->fetchAll(PDO::FETCH_OBJ);

        return $ImpressionDetails;


    }
}



