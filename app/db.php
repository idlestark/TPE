<?php

function conectarDB(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    return $db;
}

        