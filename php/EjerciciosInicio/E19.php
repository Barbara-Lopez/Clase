
<html>
    <head>
        <title>Ejercicio 19</title>
    </head>
    <body>
        <?php 
          $num=$_GET["num"];
          for($x=0;$x<=$num;$x++){
              $suma=$suma+$x;
          }
          echo "La suma de los numeros del 0 al $num es: $suma";
        ?>
    </body>
</html>