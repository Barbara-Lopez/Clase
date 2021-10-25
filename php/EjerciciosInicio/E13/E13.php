
<html>
    <head>
        <title>Ejercicio 13</title>
    </head>
    <body>
        <?php 
            $colores=['Amarillo','Verde','Azul','Purpura'];
            $animales=['Leon','Leopardo','Conejo','Gato'];
            echo "En el array de colores hay " . count($colores) . " elementos y  en el array de animales hay ". count($colores) . " elementos";
            añadirAnimales($animales);
            añadirColores($colores);
            $colorAnimal=array_merge($colores,$animales);
            print_r($colorAnimal) ;
            function  añadirAnimales($animales){
                array_push($animales,"Perro"); 
                print_r($animales) ;
            }
            function  añadirColores($colores){
                array_unshift($colores,"Rojo");
                print_r($colores) ;
            }
        ?>
    </body>
</html>