<?php
    $temperatura=$_GET["temperatura"];
    $grados=$_GET["grados"];
    function calcularGrados($temperatura,$grados){
        if($grados=="Celsius"){
            $farenheit=($temperatura*1.8)+32;
            return $farenheit;
        }else{
            $celsius=($temperatura+32)/1.8;
            return $celsius;
        }


    }

?>