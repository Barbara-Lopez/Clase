
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
            require 'E2-2.php';
            $resultado=operacion($num1,$num2,$accion);
            echo "<p>Último resultado: $resultado</p>";
        ?>
        
        <form action="E2-1.php" method="get" name="formulario">
            <label for="num1">Primer numero:</label>
            <input type="number" name="num1" id="num1"/> <br/>
            <label for="num2">Segundo numero:</label>
            <input type="number" name="num2" id="num2"/><br/>
            <label for="acciones">Seleccione la operación deseada:</label>
            <select name="acciones" id="acciones">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select><br/>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>