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
        
        $query = $db->prepare( "SELECT objeto.*, tipo.nombre_tipo as types FROM objeto INNER JOIN tipo ON objeto.tipo_id_fk = tipo.id WHERE tipo_id_fk ='$id'");
        //"SELECT libros.*, autores.nombre as autor  FROM libros INNER JOIN autores ON libros.id_autores_fk = autores.id_autores WHERE id_autores_fk='$id'" 
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
