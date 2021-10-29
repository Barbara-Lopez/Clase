
<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <p>04. Crea una pantalla de login con dos campos: usuario  y  contraseña.  
            El  programa  deberá validar los datos de acceso contra un diccionario de  
            datos  como  el  de  la  imagen.  El  programa deberá mostrar un mensaje de 
            bienvenida con su nombre y apellidos en caso de que los datos sean correctos.
            También  indicará  si  el  usuario  introducido  no existe  o  si  la  contraseña  
            introducida  es incorrecta.</p>
        <p>Solución:</p>
        
        <?php
            if(isset($usuario) && isset($contraseña)){
                $resultado=confirmarUsuarioContraseña($usuario,$contraseña,$usuarios);
                echo $resultado;
            }
        ?>
        
        <form action="E4-2.php" method="get" name="formulario">
            <label for="user">Usuario:</label>
            <input type="text" name="user" id="user"/> <br/>
            <label for="passwd">Contraseña:</label>
            <input type="text" name="passwd" id="passwd"/> <br/>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>