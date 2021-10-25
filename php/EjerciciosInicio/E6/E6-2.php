
<?php 
    function multiplicar(){ 
        $a=$_GET["a"];
        $b=$_GET["b"];
        $multiplicar=$a*$b;
        return "<p>La multiplicación de $a y $b es $multiplicar</p>";
    }
?>