
<html>
    <head>
        <title>Ejercicio 18</title>
    </head>
    <body>
        <?php 
            $dia=$_GET["dia"];
            switch($dia){
                case 1:
                    echo "El dia numero 1 es Lunes";
                    break;
                case 2:
                    echo "El dia numero 2 es Martes";
                    break;
                case 3:
                    echo "El dia numero 3 es Miercoles";
                    break;
                case 4:
                    echo "El dia numero 4 es Jueves";
                    break;
                case 5:
                    echo "El dia numero 5 es Viernes";
                    break;
                case 6:
                    echo "El dia numero 6 es Sabado";
                    break;
                case 7:
                    echo "El dia numero 7 es Domingo";
                    break;
                default:
                    echo "No es ningún dia de la semana";                 
            }

        ?>
    </body>
</html>