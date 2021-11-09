
<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <p> 01. Lista de la compra: crea una aplicación que muestre una
            lista de la compra almacenada en base de datos. La tabla de
            base de datos únicamente tendrá dos columnas, una con el
            ID y otra un VARCHAR con el texto (será el nombre del
            elemento a comprar).
        </p>
        <p>Solución:</p>
        <h3>Lista de asistencia:</h3>
        <ul>
            <?php
                añadirLista($boton,$nombre,$dbh);
            ?>
        </ul>
        <form action="E1.php" method="get" name="formulario">
            <label for="nombre">Añadir asistente</label>
            <input type="text" name="nombre" id="nombre">
            <input type="submit" name="boton" value="Guardar">
        </form>
        <a href="E1.php?boton=vaciar">Vaciar lista</a>
    </body>
</html>