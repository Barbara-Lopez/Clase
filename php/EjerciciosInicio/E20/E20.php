 
<html>
    <head>
        <title>Ejercicio 20</title>
    </head>
    <body>
        <?php 
           $num=$_GET["num"];
           for($x=0;$x<=$num;$x++){
               if($x%2==0)
                 $suma=$suma+$x;
           }
           echo "La suma de los numeros pares del 0 al $num es: $suma";
        ?>
    </body>
</html>