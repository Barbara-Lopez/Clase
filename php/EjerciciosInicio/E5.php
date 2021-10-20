
<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php 
            $a=$_GET["a"];
            $b=$_GET["b"];
            $resta=$a-$b;
            $division=$a/$b;
            $mayor=$a>$b;
            $menor=$a<=$b;  
        
            echo "La resta de $a y $b es $resta <br>"; 
            echo "La división entre $a y $b es $division <br>";
            echo "Resultado de $a mayor que $b  es ";var_export($mayor);
            echo "<br>";
            echo "Resultado de $a menor o igual que $b es ";var_export($menor);
        ?>
    </body>
</html>