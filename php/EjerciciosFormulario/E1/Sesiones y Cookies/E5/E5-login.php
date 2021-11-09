
<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <p>05. Desarroya una pagina de log in con un formulario compuesto por los campos 
            de usuario y contraseña. La aplicación no dejara contnuar hasta que se inicie sesión 
            con un nombre de usuario y contraseña correctos (a comprobar con un array asociativo).
            Una vez el usuario haya decidido correctamente, en lugar de un formulario de acceso la 
            aplicación mostrara un mensaje de bienvenida y un enlace para cerrar sesión. Al hacer 
            click en el enlace para cerrar sesión, la aplicación destruira información de la sesión 
            almacenada.
        </p>
        <p>Solución:</p>
        <ul>
            <?php
               verificarUsuario($usuario,$contrasena,$usuarios);
            ?>
        </ul>
        <form action="E5.php" method="POST" name="formulario">
            <label for="user">Usuario</label>
            <input type="text" name="user" ><br>
            <label for="passwd">Contraseña</label>
            <input type="text" name="passwd" ><br>
            <input type="submit" name="boton" value="Enviar">
            
        </form>
    </body>
</html>