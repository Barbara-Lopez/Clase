<?php
class Triangulo extends Poligono{
    public function area(){
        echo "El area del triangulo es ".$this->anchura*$this->altura/2;
    }
}