
<?php 
    $a=$_GET["a"];
    $b=$_GET["b"];
    
    function esMayor($a,$b){
        $mayor=$a>$b;
        return var_export($mayor);
    }

?>
