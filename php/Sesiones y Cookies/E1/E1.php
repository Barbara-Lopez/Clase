<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    $testo=$_GET["testo"];
    
    if(isset($_COOKIE["usuario"])){
        echo $_COOKIE["usuario"];
    }
        
    
    if(isset($testo)){
        setcookie("usuario",$testo);
        
    }

    require 'E1-view.php';
