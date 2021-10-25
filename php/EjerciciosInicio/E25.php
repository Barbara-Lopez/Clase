
<html>
    <head>
        <title>Ejercicio 25</title>
    </head>
    <body>
        <?php 
            $estudiantes=["Ane","Markel","Nora","Daniel","Amaia","Izaro"];
            echo "<ul>";
            $x=0;
            while($x<count($estudiantes)){
                echo "<li>{$estudiantes[$x]}</li>";
                $x++;
            };
            echo "</ul>";
        ?>
    </body>
</html>