<?php
require 'vendor/autoload.php';
use duncan3dc\Laravel\Blade ;
use E4\Models\Zapatilla;

$arrayZapatillas=[];
$z0= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140€");
$z1= new Zapatilla("Nike","Messi X7 Plus","Zapatilla de futbol","200€");
$z2= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140€");
$z3= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","99€");
$z4= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140€");
$z5= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140€");
$z6= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140€");
$z7= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140€");
$z8= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140€");
$z9= new Zapatilla("Adidas","MARQUEE BOOST","Zapatilla de baloncesto","140€");
array_push($arrayZapatillas,$z0);
array_push($arrayZapatillas,$z1);
array_push($arrayZapatillas,$z2);
array_push($arrayZapatillas,$z3);
array_push($arrayZapatillas,$z4);
array_push($arrayZapatillas,$z5);
array_push($arrayZapatillas,$z6);
array_push($arrayZapatillas,$z7);
array_push($arrayZapatillas,$z8);
array_push($arrayZapatillas,$z9);

echo Blade::render("zapatillas",[
    "zapatilla"=>$arrayZapatillas
]);
