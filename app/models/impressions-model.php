<?php

class ImpressionsModel{

    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    function getImpressions(){
        $db = $this->connectDB();
        
        $sentencia = $db->prepare( "select * from objeto");
        
        $sentencia->execute();
        
        $impresiones = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $impresiones;
        
        } 
}

