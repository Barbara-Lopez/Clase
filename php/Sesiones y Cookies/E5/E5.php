<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);


    session_start();
    $usuarios=[
        "user1"=>1234,
        "user2"=>67890,
        "user3"=>123456,
        "user4"=>1234567890,
    ];
    $usuario=cogerNombre();
    $contrasena=cogerContraseña();
    function verificarUsuario($usuario,$contrasena,$usuarios){
        
        if(isset($usuario)){
            if(!confirmarUsuario($usuario,$usuarios)){
                echo "<p>Usuario incorrecto</p>";
            }else{
                if(isset($contrasena)){
                    if(!confirmarContrasena($usuario,$contrasena,$usuarios)) {
                        echo "<p>Contraseña incorrecta</p>";
                    }else{
                        crearSesion($usuario,$contrasena);
                        echo $_SESSION[$usuario];
                    }   
                }
            }
        }
        
    }
    function confirmarUsuario($usuario,$usuarios){
        if(array_key_exists($usuario,$usuarios)){
            return true;
        } 
        else
            return false;   
    }
    function confirmarContrasena($usuario,$contrasena,$usuarios){
        if($usuarios[$usuario]==$contrasena)
            return true;
        else
            return false;
    }
    function crearSesion($usuario,$contrasena){
        $_SESSION[$usuario]=$contrasena;
        
    }
    function cogerNombre(){
        if(isset($_POST["user"])){
            $nombre=$_POST["user"];
            return $nombre;
        }
        else
            return "";
    }  
    function cogerContraseña(){
        if(isset($_POST["passwd"])){
            $passwd=$_POST["passwd"];
            return $passwd;
        }
        else
            return "";
    }  
    require 'E5-login.php';  
