<?php

class CRUDImpression{
    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }
    function addImpression($title, $description, $selectCat,$dimensions,$price){
        $db = $this->connectDB(); 
    $query = $this->db->prepare("INSERT INTO objeto(id, nombre, descripcion, tipo_id_fk, dimensiones, precio) VALUES (?,?,?,?,?)");
    $query->execute([$title, $description,$selectCat,$dimensions,$price]);


}
}


class ImpressionsModel{

    function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    function getImpressions(){
        $db = $this->connectDB();
        
        $query = $db->prepare( "select * from objeto");
        
        $query->execute();
        
        $impressions = $query->fetchAll(PDO::FETCH_OBJ);
        
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

        $query = $db->prepare( "SELECT * FROM objeto WHERE id = '$id'");

        $query->execute();
        
        $ImpressionDetails = $query->fetchAll(PDO::FETCH_OBJ);

        return $ImpressionDetails;


    }
}



