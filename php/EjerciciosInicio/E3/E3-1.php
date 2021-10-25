
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <p>03. Crea un programa que muestre un nombre de usuario enviado en la URL:
        ejercicio03.php?usuario=admin</p>
       <p> Mostrará el siguiente texto por pantalla:
        Bienvenido, admin</p>
        <p>Solución:</p>
        <?php 
            include 'E3-2.php';
       
            echo "Bienvenido, $nombre";
        ?>
    </body>
</html>