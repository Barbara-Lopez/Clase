<?php
class Persona{
    public static $personasEnElMundo=0;

    public function __construct()
    {
        self::$personasEnElMundo=self::$personasEnElMundo+1;
    }
    public function mostrar(){
        echo "La cantidad de personas es: ".self::$personasEnElMundo;
    }

}