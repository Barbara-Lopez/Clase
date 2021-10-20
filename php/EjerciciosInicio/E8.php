
<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <?php 
            $a=$_GET["a"];
            $b=$_GET["b"];
            esMayor($a,$b);
            function esMayor($a,$b){
               $mayor=$a>$b;
                echo var_export($mayor);
            }

        ?>
    </body>
</html>