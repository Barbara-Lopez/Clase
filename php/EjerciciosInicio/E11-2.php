
<html>
    <head>
        <title>Ejercicio 11</title>
    </head>
    <body>
        <?php 
            $cadena1=$_GET["cadena1"];
            $cadena2=$_GET["cadena2"];
            $cadenaEntera=concatenar($cadena1,$cadena2);
            function concatenar($cadena1,$cadena2){
                $concatenar=$cadena1." ".$cadena2;
                return $concatenar;
            }
        

        ?>
    </body>
</html>