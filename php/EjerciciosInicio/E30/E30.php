
<html>
    <head>
        <title>Ejercicio 30</title>
    </head>
    <body>
        <?php 
            $estudiantes=[
                "amaia"=>[5,6],
                "Ane"=>[8,6],
                "Lorena"=>[5,10],
                "urtzi"=>[9,3],
            ];
            
            foreach($estudiantes as $key => $value){
                $media=($value[0]+$value[1])/2;
                echo "<li>La nota media de $key es $media </li>";
            };

        ?>
    </body>
</html>