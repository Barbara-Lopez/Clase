<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    session_start();
   
    $nombre=cogerNombre();
    $boton=cogerBoton();
    function añadirLista($boton,$nombre){
        if($boton=="Guardar")
        guardarSesion($nombre);
        elseif($boton=="vaciar"){

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
    
    function guardarSesion($nombre){
        
        if(isset($nombre)){

                $_SESSION[$nombre] = $nombre;
           
        }
        visualizarLista();

    }
   
    function  visualizarLista(){
        $texto="";
        foreach($_SESSION as $nombre){
           $texto=$texto. "<li>".$nombre."</li>";
           
        }
        echo $texto;
    }
     

  
    require 'E4-view.php';
