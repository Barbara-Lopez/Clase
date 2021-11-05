
<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <p>07.Tendras que crear una tienda online. La aplicación debe mostrar un listado de los productos,
             con su ID, nombredescipción y precio. El usuario podrá ir añadiendo productos a la cesta de 
             la compra. La aplicación, aparte de los productos disponibles, tambien mostrará durante la sesión 
             del usuariola cesta de la compra con los productos añadidos (nombre y precio del producto) y 
             el precio total de los productos de la cesta. Cuando la cesta esté vacia se deberá mostrar el mensaje 
             "No hay productos en la cesta. Comience a comprar". Siempre que haya un producto en la cesta, se 
             mostrara un boton de "Realizar Compra" que vacie la cesta.
        </p>
        <p>Solución:</p>
        <a href='ejercicio07.php?accion=comprar' >Comprar</a>
        <h2>Catalogo productos</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    llenarTabla($productos);
                ?>
            </tbody>
        </table>
    </body>
</html>
