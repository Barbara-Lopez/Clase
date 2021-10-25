
<html>
    <head>
        <title>Ejercicio 12</title>
    </head>
    <body>
        <?php 
           $ciudades=['Paris','Berlin','Amsterdam','Praga'];
           echo "Me gustaria irme a {$ciudades[1]}.";
            setValor($ciudades);
            function setValor($ciudades){
                $ciudades[1]='Malaga';
                
                echo "Me gustaria irme a {$ciudades[1]}.";
            }
        ?>
    </body>
</html>