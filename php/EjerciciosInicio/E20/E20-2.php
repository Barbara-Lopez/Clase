
<?php 
    $num=$_GET["num"];
    for($x=0;$x<=$num;$x++){
        if($x%2==0)
            $suma=$suma+$x;
    }
    $sumaNumerosPares= "La suma de los numeros pares del 0 al $num es: $suma";
?>
