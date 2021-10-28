
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <p>01. Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación
        pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado,
        mostrará el resultado de la conversión realizada. El formulario siempre se mostrará,
        de forma que el usuario pueda seguir introduciendo valores.</p>
        <p>Solución:</p>
        <h3>Calculadora</h3>
        
        <?php
            require 'E1-2.php';
            $resultado=calcularGrados($temperatura,$grados);
            echo "<p>Resultado de la conversión ($temperatura $grados): $resultado</p>";
        ?>
        
        <form action="E1-1.php" method="get" name="formulario">
            <label for="temperatura">Introduce la temperatura:</label>
            <input type="number" name="temperatura" id="temperatura"/> <br/>
            <label for="grados">Indica la unidad de la temperatura introducida:</label>
            <select name="grados" id="grados">
                <option value="celsius">Celsius</option>
                <option value="farenheit">Farenheit</option>
            </select><br/>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>