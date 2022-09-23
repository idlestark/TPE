<?php

class TypeModel{
    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    function getTypesbyId($id){
        $db = $this->connectDB();
        
        $sentence = $db->prepare( "SELECT * FROM tipo WHERE id = '$id'");
        
        $sentence->execute();
        
        $types = $sentence->fetchAll(PDO::FETCH_OBJ);
        
        return $types;
                
        }
}

class TypeListModel{
    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    function getTypeList(){
        $db = $this->connectDB();
        $sentence = $db->prepare( "select * from tipo");
       
        $sentence->execute();
        
        $typeslist = $sentence->fetchAll(PDO::FETCH_OBJ);
        
        return $typeslist;
    }
}