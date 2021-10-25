
<?php 
    $usuarios=[
        "user1"=>[
            "nombre"=>"nora",
            "passwd"=>"123",
            "email"=>"nora@php.net"
        ],
        "user2"=>[
            "nombre"=>"marta",
            "passwd"=>"12345",
            "email"=>"marta@php.net"
        ],
        "user3"=>[
            "nombre"=>"ion",
            "passwd"=>"12312",
            "email"=>"ion@php.net"
        ],
        "user4"=>[
            "nombre"=>"aitor",
            "passwd"=>"321",
            "email"=>"aitor@php.net"
        ],
    ];
    $user=$_GET["user"];
    $passwd=$_GET["passwd"];
    function validarUsuario($user,$passwd,$usuarios){
        if(array_key_exists($user,$usuarios)){
            $texto="El usuario existe";
            $texto=$texto." ".validarContraseña($user,$passwd,$usuarios);
            return $texto;
        }
        else
            $texto="El usuario no existe";
            return $texto;
    }
    
    function validarContraseña($user,$passwd,$usuarios){
        if($passwd==$usuarios["$user"]["passwd"]){
            $texto="La contraseña es correcta";
            return $texto;
        }else
            $texto="La contraseña es incorrecta";
            return $texto;
    }
?>
