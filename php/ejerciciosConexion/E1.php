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

$nombre=cogerNombre();
$boton=cogerBoton();

function añadirLista($boton,$nombre){
    if($boton=="Guardar")
        guardarSesion($nombre);
    elseif($boton=="vaciar"){
        session_unset();
    }
    else
        visualizarLista();
}
function cogerNombre(){
    if(isset($_GET["nombre"])){
        $nombre=$_GET["nombre"];
        return $nombre;
    }
    else
        return "";
}  
function cogerBoton(){
    if(isset($_GET["boton"])){
        $boton=$_GET["boton"];
        return $boton;
    }
    else
        return "";
}
/*$data=['nombre'=>'pepe'];

$stmt= $dbh->prepare("
INSERT INTO prueba1(nombre)
values (:nombre)" );
$stmt->execute($data);*/