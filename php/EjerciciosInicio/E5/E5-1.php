
<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <p>05. Crea dos variables, a y b que recojan los valores enviados mediante el método
        GET. Almacena el resultado de las siguientes operaciones en una nuevas variables
        y muéstralas por pantalla.
        <ul>
            <li>Resta de a y b</li>           
            <li>División de a entre b</li>
            <li>Resultado de a mayor que b</li>
            <li>Resultado de a menor o igual que b</li>
        </ul>   
        Nota: para imprimir una variable con valor booleano, utiliza la función
        var_export($variable)</p>
       <p>Solución:</p>
        <?php 
            include 'E5-2.php';
       
            echo "La resta de $a y $b es $resta <br>"; 
            echo "La división entre $a y $b es $division <br>";
            echo "Resultado de $a mayor que $b  es ";var_export($mayor);
            echo "<br>";
            echo "Resultado de $a menor o igual que $b es ";var_export($menor);
        ?>
    </body>
</html>