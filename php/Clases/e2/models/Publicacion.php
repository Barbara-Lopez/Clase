<?php
namespace models\Publicacion;

class Publicacion{
    private $autores,$ano,$editorial,$titulo,$texto;

    public function __construct($autores,$ano,$editorial,$titulo,$texto){
        $this->autores= $autores;
        $this->ano= $ano;
        $this->editorial= $editorial;
        $this->titulo= $titulo;
        $this->texto=$texto;

    }
    public function leer(){
        return $this->texto;
    }
    public function escribir($string){
        echo $string." ".$this->texto;
    }
}






