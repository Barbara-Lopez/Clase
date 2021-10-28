
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
        <h3>Calculadora</h3>
        
        <?php
            require 'E3-2.php';
            $resultado=operacion($numero);
            echo "<p>Último resultado: $resultado</p>";
        ?>
        
        <form action="E3-1.php" method="get" name="formulario">
            <label for="num">Primer numero:</label>
            <input type="number" name="num" id="num"/> <br/>
            
            <input type="submit" value="¡Probar suerte!">
        </form>
    </body>
</html>