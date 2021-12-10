<?php
include 'models/Publicacion.php';
use models\Publicacion\Publicacion;

$libro1= new Publicacion("marta",2001,"pepe","las olas","este libro que es el mejor ");
echo $libro1->leer();
$libro1->escribir(" me gusta ");
echo "<br>";
$libro2= new Publicacion("mariana",2015,"opal","meteoritos en el espacio","este libroes que el segundo de la triologia");
echo $libro2->leer();
$libro2->escribir(" me encanta ");

