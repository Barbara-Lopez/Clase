
<html>
    <head>
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php 
           $cadena1=$_GET["cadena1"];
           $cadena2=$_GET["cadena2"];
           function concatenar($cadena1,$cadena2 = 'cadena'){
               $concatenar=$cadena1." ".$cadena2;
               return $concatenar;
           }
           
        ?>
    </body>
</html>