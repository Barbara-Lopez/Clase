
<?php 
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    function sumaResta($num1,$num2){
        if($num1==$num2){
            $multiplicacion=$num1*$num2;
            return $multiplicacion;
        }else{
            $suma=$num1+$num2;
            return $suma;    
        }
    }
?>
