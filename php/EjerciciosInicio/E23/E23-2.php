
<?php 
    $estudiantes=["Ane","Markel","Nora","Daniel","Amaia","Izaro"];
    $lista="";
    for($x=0;$x<count($estudiantes);$x++){
        $lista=$lista."<li>{$estudiantes[$x]}</li>";
    }
    return $lista;
?>
