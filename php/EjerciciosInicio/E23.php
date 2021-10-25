
<html>
    <head>
        <title>Ejercicio 23</title>
    </head>
    <body>
        <?php 
            $estudiantes=["Ane","Markel","Nora","Daniel","Amaia","Izaro"];
            echo "<ul>"; 
            for($x=0;$x<count($estudiantes);$x++){
                echo "<li>{$estudiantes[$x]}</li>";
            };
            echo "</ul>";
        ?>
    </body>
</html>