
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <p>03.Crea una página que tenga un select con dos opciones:"Euskera" y "Castellano". 
            La aplicación guardara el valor oindicado en una cookie de nombre "idioma" (tendra 1 minuto de duración)
            y mostrara el último valor almacenado siempre que la coookie contenga algún valor.</p>
        <p>Solución:</p>
        
        <?php
            guardarCookie($idioma);
        ?>
        
        <form action="E3.php" method="get" name="formulario">
            <label for="idioma">Elige el idioma</label>
            <select name="idioma" id="idioma"> 
                <option value="euskera">Euskera</option>
                <option value="castellano">Castellano</option>
            </select>
            <br/>
            <input type="submit" value="Guardar" name="boton">
        </form>
    </body>
</html>
