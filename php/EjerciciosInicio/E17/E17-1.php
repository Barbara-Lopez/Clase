
<html>
    <head>
        <title>Ejercicio 17</title>
    </head>
    <body>
        <p>17. Crea una función que reciba un usuario y contraseña mediante GET. La
        aplicación deberá mostrar si el usuario existe, y en caso de existir si la contraseña
        recibida es correcta. La validación se realizará contra un array multidimensional
        como el siguiente:</p>
        <p>Solución:</p>
        <?php 
            include 'E17-2.php';
            
            $resultado=validarUsuario($user,$passwd,$usuarios);
            echo "$resultado";

        ?>
    </body>
</html>