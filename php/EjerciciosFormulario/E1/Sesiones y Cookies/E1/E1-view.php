
<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <p>01.Crea una pagina que tenga un formulario con un campo de texto en el que 
            poder almacenar un nombre de usuario. La aplicación guardará el texto introducido en una cookie 
            (sin especificar la duración) de nombre "usuario" y mostrará el último valor almacenado 
            siempre que la cookie contenga algún valor.</p>
        <p>Solución:</p>
        
        
        <form action="E1.php" method="get" name="formulario">
            <label for="testo">Introduce el texto que deseas almacenar:</label>
            <input type="text" name="testo" id="testo"/> <br/>
            <input type="submit" value="Guardar">
        </form>
    </body>
</html>