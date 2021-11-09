<?php
$productos = [
    "1" => [
        "nombre" => "Logitech K120",
        "descripción" => "Teclado multimedia USB plug&play, trackPoint Caps (10pk, Soft Dome)",
        "precio" => 25.99
    ],
    "2" => [
        "nombre" => "Lenovo LI5",
        "descripción" => "El mouse Lenovo 300 compacto inalámbrico es el accesorio perfecto para cualquier persona que desee un mayor control y libertad",
        "precio" => 12.99
    ],
    "3" => [
        "nombre" => "Monitor LG X10",
        "descripción" => "LCD con retroiluminación LED ThinkVision T1714p Square de 17 pulgadas",
        "precio" => 179.99
    ],
    "4" => [
        "nombre" => "Monitor Lenovo Q24i",
        "descripción" => "Pantalla de 60,45 cm (23,8\") Funciones como AMD FreeSync",
        "precio" => 172.00
    ],
    "5" => [
        "nombre" => "ThinkPad X1 Extreme",
        "descripción" => "ThinkPad X1 Extreme de 2.ª generación gestiona exigentes tareas informáticas sin problemas. Con pantalla táctil 4K OLED",
        "precio" => 1200
    ]
];

function llenarTabla($productos){
    $texto="";
    foreach ($productos as $id => $producto) {
       $texto= $texto."<tr><td>".$producto['nombre']."</td><td>".$producto['descripción']."</td><td>".$producto['precio']."</td><td><a href='E7.php?accion=insertar&idProducto=$id'>Comprar</a></td></tr>";
    }
     echo $texto;
}
function insertarProducto(){

}
function enviarCompra(){

}
$accion=$_GET["accion"];
$producto=$_GET["idProducto"];
if(isset($accion)){
    if($accion=="insertar"){
        insertarProducto($producto,);
    }else{
        enviarCompra();
    }
}

require 'E7-view.php';