<?php 

function connect(){
    try {
        # MySQL
        $dbh= new PDO("mysql:host=127.0.0.1:8889;dbname=lista", "root", "root");
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

$dbh=connect();

/*$data=['nombre'=>'pepe'];

$stmt= $dbh->prepare("
INSERT INTO prueba1(nombre)
values (:nombre)" );
$stmt->execute($data);*/