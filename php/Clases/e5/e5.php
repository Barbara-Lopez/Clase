<?php 
require_once 'persona.php';

$maria=new Persona();
$marta=new Persona();
$sonia=new Persona();
$rebeca=new Persona();
echo "La cantidad de personas es: ".Persona::$personasEnElMundo;