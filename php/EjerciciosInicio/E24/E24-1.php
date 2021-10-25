
<html>
    <head>
        <title>Ejercicio 24</title>
    </head>
    <body>
        <p>24. Crea un array multidimensional que simule una agenda de contactos (contendrá de cada
        persona su nombre, apellidos, teléfono y dirección de correo electrónico). Implementa una
        función que imprima en una tabla los datos de las personas utilizando la sentencia for.
        Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer</p>
        <p>Solución:</p>
        <table style="border: 1px solid black;">
            <?php 
                include 'E24-2.php';
                $columnas=imprimirTabla($contactos);
                echo $columnas;
            ?>
        </table>
    </body>
</html>