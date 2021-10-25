
<?php 
    $dia=$_GET["dia"];
    switch($dia){
        case 1:
            $diaSemana= "El dia numero 1 es Lunes";
            break;
        case 2:
            $diaSemana= "El dia numero 2 es Martes";
            break;
        case 3:
            $diaSemana= "El dia numero 3 es Miercoles";
            break;
        case 4:
            $diaSemana= "El dia numero 4 es Jueves";
            break;
        case 5:
            $diaSemana= "El dia numero 5 es Viernes";
            break;
        case 6:
            $diaSemana= "El dia numero 6 es Sabado";
            break;
        case 7:
            $diaSemana= "El dia numero 7 es Domingo";
            break;
        default:
            $diaSemana= "No es ningún dia de la semana";                 
    }
        return $diaSemana;
?>
