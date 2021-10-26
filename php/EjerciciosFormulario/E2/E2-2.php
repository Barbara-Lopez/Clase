<?php

    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $accion=$_GET["acciones"];

    function operacion($num1,$num2,$accion){
        switch ($accion) {
            case 'suma':
                $operacion=$num1+$num2;
                break;
            
            case 'resta':
                $operacion=$num1-$num2;
                break;
            case 'multiplicacion':
                $operacion=$num1*$num2;
                break;
            
            case 'division':
                $operacion=$num1/$num2;
                break;
        }
        return $operacion;
    }

    
?>