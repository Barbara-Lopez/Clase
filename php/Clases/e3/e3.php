<?php
require_once 'poligono.php';
require_once 'cuadrado.php';
require_once 'triangulo.php';

$cuadrado=new Cuadrado();
$cuadrado->setAltura(5);
echo $cuadrado->area();