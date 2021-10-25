
<html>
    <head>
        <title>Ejercicio 28</title>
    </head>
    <body>
        <?php 
            $marcasCoche=["Audi","Seat","Mercedes","Volkswagen","BMW","Fiat"];
            echo "<ul>";
            foreach($marcasCoche as $x){
                echo "<li>$x</li>";
               }
            echo "</ul>";
        ?>
    </body>
</html>