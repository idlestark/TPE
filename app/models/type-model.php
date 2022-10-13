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

    function updateCategory($id, $name, $description){
        $db = $this->connectDB(); 
        $query = $db->prepare("UPDATE tipo SET nombre_tipo=?, descripcion=? WHERE id= ?");


        $query->execute([$name, $description, $id]);
    }

    function getTypesForm($id){
        $db = $this->connectDB();
        $query = $db->prepare("SELECT * FROM tipo WHERE id = ?"); 
        $query->execute([$id]);
        $types = $query->fetch(PDO::FETCH_OBJ);
        return $types;
    
    }


    function getTypesbyId($id){
        $db = $this->connectDB();
        
        $query = $db->prepare( "SELECT objeto.*, tipo.nombre_tipo as types FROM objeto INNER JOIN tipo ON objeto.tipo_id_fk = tipo.id WHERE tipo_id_fk ='$id'");
       
        $query->execute();
        
        $types = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $types;
                
        }
        
    function getTypeList(){
        $db = $this->connectDB();
        
        $query = $db->prepare( "select * from tipo");
        
        $query->execute();   
        
        $typeslist = $query->fetchAll(PDO::FETCH_OBJ);           
        
        return $typeslist;

        }        

        
}

