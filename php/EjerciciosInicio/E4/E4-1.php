
<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <p>04. Modifica el ejercicio 02 para que recoja el nombre y la edad desde la URL. Es
        decir, para probar la página la URL será como la siguiente:
        ejercicio03.php?nombre=Markel&edad=22
        </p>
        <p> Mostrará el siguiente texto por pantalla:
        Mi amigo Mikel tiene 22 años.</p>        
        <p>Solución:</p>
        <?php 
            include 'E4-2.php';
       
            echo "Mi amigo $nombre tiene $edad años";
        ?>
    </body>
</html>