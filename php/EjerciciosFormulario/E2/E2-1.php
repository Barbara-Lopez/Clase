
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <p>02. Crea una aplicación que simule una
        calculadora. La calculadora estará
        representada por un formulario con dos
        campos numéricos y un desplegable
        para indicar la operación que se desea
        realizar (suma, resta, multiplicación o
        división). La aplicación deberá mostrar el
        resultado de la operación realizada y
        mostrar un mensaje de error cuando se
        intente dividir entre cero.</p>
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