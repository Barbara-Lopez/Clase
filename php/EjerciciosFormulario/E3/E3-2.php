<?php
    $numero=$_GET["num"];
    function generarArrayNumerosAleatorios(){
        $numeros = [];
        for($i = 0; $i < 20; $i++) {
            $numeros[$i] = random_int(1,10);
        }
        return $numeros;
    }
    function buscarNumero($numero){
        $numerosAleatorios=generarArrayNumerosAleatorios();
        $cantidad=0;
        foreach($numerosAleatorios as $x){
            if($numerosAleatorios[$x]==$numero){
                $cantidad=$cantidad+1;
            }
        }
        return $cantidad;
    }


?>