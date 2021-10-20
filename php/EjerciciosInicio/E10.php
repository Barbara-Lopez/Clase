
<html>
    <head>
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php 
           $cadena1=$_GET["cadena1"];
           $cadena2=$_GET["cadena2"];
           concatenar($cadena1,$cadena2);
           function concatenar($cadena1,$cadena2,$cadena=" cadena 2 por defecto"){
               $concatenar=$cadena1.$cadena2.$cadena;
               print $concatenar;
           }
           
        ?>
    </body>
</html>