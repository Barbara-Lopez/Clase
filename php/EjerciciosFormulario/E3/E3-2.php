<?php
    $numero=$_GET["num"];
    function generarArrayNumerosAleatorios($tamaño = 20){
        $numeros = [];
        for($i = 0; $i < $tamaño; $i++) {
            $numeros[$i] = random_int(1,10);
        }
        return $numeros;
    }
    function buscarNumero($numero){

    }


?>