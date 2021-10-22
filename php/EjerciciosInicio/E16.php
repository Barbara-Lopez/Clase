
<html>
    <head>
        <title>Ejercicio 16</title>
    </head>
    <body>
        <?php 
          $num1=$_GET["num1"];
          $num2=$_GET["num2"];
          if($num1==$num2){
              echo $num1*$num2;
          }else{
              echo $num1+$num2;
          }
        ?>
    </body>
</html>