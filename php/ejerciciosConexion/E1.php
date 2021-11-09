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

function añadirLista($boton,$nombre,$dbh){
    if($boton=="Guardar"){
        
        guardarNombre($nombre,$dbh);
    }
    elseif($boton=="vaciar"){
        $stmt= $dbh->prepare("DELETE FROM prueba1");
        $stmt->execute();
    }
    elseif($boton=="vaciarUno"){
        eliminarUno($dbh);
        visualizarLista($dbh);
    }
    else{
        visualizarLista($dbh);
    }
}

function guardarNombre($nombre,$dbh){
    if(isset($nombre)){
        $stmt= $dbh->prepare("INSERT INTO prueba1 (nombre) VALUES ('$nombre')");
        $stmt->execute();
        visualizarLista($dbh);
    }
  
}

function visualizarLista($dbh){
    $stmt= $dbh->prepare("SELECT nombre FROM prueba1");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    crearLista($resultado);
}

function crearLista($resultado){
    foreach ($resultado as $row){
        $nombre=$row["nombre"];
        echo "<li>".$nombre." (<a href='E1.php?boton=vaciarUno&id=$nombre'>Eliminar</a>) </li>";
    };
}

function eliminarUno($dbh){
    $id=$_GET["id"];
    $stmt= $dbh->prepare("DELETE  FROM prueba1 where nombre='$id'");
    $stmt->execute();
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

require 'E1-view.php';