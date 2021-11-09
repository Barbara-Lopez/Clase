<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    $testo=$_GET["testo"];
    if($_GET["boton"]=="Guardar")
        guardarCookie($testo);
    else
        eliminarCookie();
    function guardarCookie($testo){
        if(isset($testo)){
                setcookie("usuario",$testo);
                
            }
        visualizarCookie();

    }
    function eliminarCookie(){
        if(isset($_COOKIE["usuario"])){
            setcookie("usuario",NULL,-1);
        }
        visualizarCookie();
    }
    function  visualizarCookie(){
        if(isset($_COOKIE["usuario"])){
        echo $_COOKIE["usuario"];
        } else 
        echo "No hay cookie"; 
    }
     
    
  
    require 'E2-view.php';
