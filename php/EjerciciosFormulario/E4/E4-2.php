<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    $usuarios = array(
        "user1" => array (
            "nombre" => "Ane",
            "apellidos" => "López",
            "password" => "123Abc"
        ),
        "user2" => array (
            "nombre" => "Amaia",
            "apellidos" => "Otsoa",
            "password" => "1234567890"
            )
    );

    
    
    $usuario=$_GET["user"];
    $contraseña=$_GET["passwd"];
    
    function confirmarUsuarioContraseña($usuario,$contraseña,$usuarios){
        if(!verificarUsuario($usuario,$usuarios)){
            return "El usuario no existe";
        }else{
            $testo="Usuario correcto";
            if(!verificarContraseña($usuario,$contraseña,$usuarios)){
                $testo=$testo." y contraseña incorrecta";
            }else{
                $testo=$testo." y contraseña correcta";
            }
            return $testo;
        }

    }
    function verificarUsuario($usuario,$usuarios){
        if(array_key_exists($usuario,$usuarios)){
            return true;
        }else{
            return false;
        }

    }
    function verificarContraseña($usuario,$contraseña,$usuarios){
        if($usuarios[$usuario]["password"]==$contraseña){
            return true;
        }else{
            return false;
        }

    }

    include 'E4-1.php';
?>