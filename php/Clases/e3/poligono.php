<?php
class Poligono{
    protected $color,$altura,$anchura;
    public function getColor(){
        return $this->color;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getAnchura(){
        return $this->anchura;
    }
    public function setColor($color){
        $this->color= $color;
    }
    public function setAltura($altura){
        $this->anchura= $altura;
    }
    public function setAnchura($anchura){
        $this->anchura= $anchura;
    }
}



