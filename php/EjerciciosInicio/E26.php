
<html>
    <head>
        <title>Ejercicio 26</title>
    </head>
    <body>
        <?php 
            $marcasCoche=["Audi","Seat","Mercedes","Volkswagen","BMW","Fiat"];
            echo "<ul>";
            $x=0;
            do{
                echo "<li>{$marcasCoche[$x]}</li>";
                $x++;
            }while($x<count($marcasCoche));
            echo "</ul>";
?>
    </body>
</html>