<?php
class Persona{
    public static $personasEnElMundo=0;

    public function __construct()
    {
        self::$personasEnElMundo++;
        /*self::$personasEnElMundo=self::$personasEnElMundo+1;*/
    }
    public function getPersonasEnElMundo(){
        echo "La cantidad de personas es: ".self::$personasEnElMundo;
    }

}