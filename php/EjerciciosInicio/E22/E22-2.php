

<?php 
    $paises=["Brasil","Portugal","Islandia","Mexico","Filipinas","Marruecos"];
    
    $pais=$_GET("pais");
    $x=0;
    for($x=0;$x<count($paises);$x++){
        if($pais==$paises[$x]){
            echo "El pais $pais se encuentra en la posición $x";
            break;
        };
    };
    if($x==-1){
        echo "El pais $pais se encuentra en la posición $x";
    }
?>
