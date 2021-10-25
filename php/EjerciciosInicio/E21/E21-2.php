

<?php 
    $num=$_GET["num"];
    for($x=0;$x<=$num;$x++){
        if($x%2==0){
            $mayor=$suma+$x;
            if($mayor>=100) 
                break;
            else
                $suma=$suma+$x;
        }   
    }
    $sumaNumerosPares= "La suma de los numeros pares del 0 al $num es: $suma";
?>
