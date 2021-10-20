
<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php 
            $a=$_GET["a"];
            $b=$_GET["b"];
            multiplicar($a,$b);
            function multiplicar($a,$b){
                $multiplicar=$a*$b;
                echo "<p>La multiplicación de $a y $b es $multiplicar</p>";
            }
            

        ?>
    </body>
</html>