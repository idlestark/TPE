<?php

class CRUDCategory{

        function connectDB(){
            $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
            return $db;
        }
        
     function addCategory($namecats, $descriptioncats){
        $db = $this->connectDB();    
        $query = $db->prepare("INSERT INTO tipo(nombre_tipo, descripcion) VALUES (?,?)");
        $query->execute([$namecats, $descriptioncats]);
    
    }

    function removeCategoryById($id){
        $db = $this->connectDB();
        $query = $db->prepare('DELETE FROM tipo WHERE id = ?');
        $query->execute([$id]);
    }
    
}

class TypeModel{
    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    function getTypesbyId($id){
        $db = $this->connectDB();
        
        $query = $db->prepare( "SELECT * FROM tipo WHERE id = '$id'");
        
        $query->execute();
        
        $types = $query->fetchAll(PDO::FETCH_OBJ);
        
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
        $query = $db->prepare( "select * from tipo");
       
        $query->execute();
        
        $typeslist = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $typeslist;
    }
}