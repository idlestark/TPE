<?php

class TypeModel{
    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    function getTypes(){
        $db = $this->connectDB();
        
        $sentence = $db->prepare( "select * from tipo");
        
        $sentence->execute();
        
        $types = $sentence->fetchAll(PDO::FETCH_OBJ);
        
        return $types;
                
        }
}