<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    $idioma=$_GET["idioma"];
   
    function guardarCookie($idioma){
        if(isset($idioma)){
                setcookie("idioma",$idioma,time()+60);
                
            }
        visualizarCookie();

    }
   
    function  visualizarCookie(){
        if(isset($_COOKIE["idioma"])){
        echo $_COOKIE["idioma"];
        } 
    }
     
    
  
    require 'E3-view.php';
