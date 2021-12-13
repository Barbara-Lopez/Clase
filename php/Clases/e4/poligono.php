<?php
class Poligono{
    private $color,$altura,$anchura;
    public function getColor(){
        return $this->color;
    }
    function getAltura(){
        return $this->altura;
    }
    function getAnchura(){
        return $this->anchura;
    }
    function setColor($color){
        $this->color= $color;
    }
    function setAltura($altura){
        $this->anchura= $altura;
    }
    function setAnchura($anchura){
        $this->anchura= $anchura;
    }
    public abstract function area(){

    }
}



