
<html>
    <head>
        <title>Ejercicio 16</title>
    </head>
    <body>
        <p>16. Crea una función que reciba 2 números obtenidos mediante GET. La aplicación
        deberá realizar la siguiente operación:
        ● Si los números son distintos, mostrará el resultado de su suma.
        ● Si los números son iguales, mostrará el resultado de su multiplicación.</p>
        <p>Solución:</p>
        <?php 
            include 'E16-2.php';
            $respuesta=sumaResta($num1,$num2);
            echo "$respuesta";
        ?>
    </body>
</html>