
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <p>03. Crea un array con 20 números aleatorios entre el 1 y el 10 utilizando la función
        random_int(). El usuario introducirá en el formulario un número y al darle a “Enviar”
        la aplicación comprobará cuántas veces aparece el número introducido en el array.
        Pista: Las funciones implote() y explode() pueden ser de gran utilidad.</p>
        <p>Solución:</p>
        
        <?php
            require 'E3-2.php';
            $resultado=buscarNumero($numero);
            echo "<p>El numero aparece $resultado veces en el array</p>";
        ?>
        
        <form action="E3-1.php" method="get" name="formulario">
            <label for="numero">Primer numero:</label>
            <input type="number" name="numero" id="numero"/> <br/>
            
            <input type="submit" value="¡Probar suerte!">
        </form>
    </body>
</html>