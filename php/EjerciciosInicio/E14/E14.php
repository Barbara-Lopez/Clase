
<html>
    <head>
        <title>Ejercicio 14</title>
    </head>
    <body>
        <?php 
            $palabras = [
                "hola" => "hello",
                "casa" => "house",
                "portatil" => "laptop",
                "boli" => "pen",
                "lapiz" => "pencil",
            ];
            
            if (array_key_exists("hola", $palabras)) {
               echo "la traducción de hola es " . $palabras["hola"]; 
               echo "<br>";
            } else{
                echo "Hola no encontrado";
                echo "<br>";
            }
            if (array_key_exists("casa", $palabras)) {
                echo "la traducción de hola es " . $palabras["casa"]; 
                echo "<br>";
            } else{
                 echo "Casa no encontrado";
                 echo "<br>";
            }
            if (array_key_exists("portatil", $palabras)) {
                echo "la traducción de hola es " . $palabras["portatil"]; 
                echo "<br>";
            } else{
                 echo "portatil no encontrado";
                 echo "<br>";
            }
            if (array_key_exists("boli", $palabras)) {
                echo "la traducción de hola es " . $palabras["boli"]; 
                echo "<br>";
            } else{
                 echo "boli no encontrado";
                 echo "<br>";
            }
            if (array_key_exists("lapiz", $palabras)) {
                echo "la traducción de hola es " . $palabras["lapiz"]; 
                echo "<br>";
            } else{
                 echo "lapiz no encontrado";
                 echo "<br>";
            }

        ?>
    </body>
</html>