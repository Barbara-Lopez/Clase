
<?php 
    $contactos=[
        [
            "nombre"=>"Amaia",
            "apellido"=>"Gorbeia",
            "telefono"=>"945111111",
            "email"=>"agorbea@php.net",
        ],
        [
            "nombre"=>"Ane",
            "apellido"=>"Larrain",
            "telefono"=>"945111112",
            "email"=>"larrain@php.net",
        ],
        [
            "nombre"=>"Maite",
            "apellido"=>"Murgiondo",
            "telefono"=>"945111113",
            "email"=>"murgiondo@php.net",
        ],
    ];

    function imprimirTabla($contactos){
        $tabla="";
        for($x=0;$x<count($contactos);$x++){
            $tabla=$tabla."<tr><td>";
            $nombre=$contactos["$x"]["nombre"];
            $tabla=$tabla.$nombre;
            $tabla=$tabla. "</td><td>";
            $apellido=$contactos["$x"]["apellido"];
            $tabla=$tabla.$apellido;
            $tabla=$tabla. "</td><td>";
            $telefono=$contactos["$x"]["telefono"];
            $tabla=$tabla. $telefono;
            $tabla=$tabla. "</td><td>";
            $email=$contactos["$x"]["email"];
            $tabla=$tabla.$email ;
            $tabla=$tabla. "</td></tr>";
        };
        return $tabla;
    }
?>
