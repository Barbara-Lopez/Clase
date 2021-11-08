
<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <p>
        </p>
        <p>Solución:</p>
        <h3>Lista de asistencia:</h3>
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
        <a href="E1.php?boton=vaciar">Vaciar lista</a>
    </body>
</html>