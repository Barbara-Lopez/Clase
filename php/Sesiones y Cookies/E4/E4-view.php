
<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <p>04. Crea una aplicaciónde control de asistencia para un evento. La aplicación tendra que mostrar 
            la lista de personas (el nombre de cada una) que han acudido al evento. Tendra un campo de texto para escribir el 
            nombre de la persona y asi añadir personas a la lista. la lista se almacenara en sesión, y existira un boton que borre la ista completa.
        </p>
        <p>Solución:</p>
        <ul>
            <?php
                añadirLista($boton,$nombre);
            ?>
        </ul>
        <form action="E4.php" method="get" name="formulario">
            <label for="nombre">Añadir asistente</label>
            <input type="text" name="nombre" id="nombre">
            <input type="submit" name="boton" value="Guardar">
        </form>
        <a href="E4.php?boton=vaciar">Vaciar lista</a>
    </body>
</html>
