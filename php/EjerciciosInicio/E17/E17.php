
<html>
    <head>
        <title>Ejercicio 17</title>
    </head>
    <body>
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
            if(array_key_exists($user,$usuarios)){
                echo "El usuario existe";
                validarContraseña($user,$passwd,$usuarios);
            }
            else
                echo "El usuario no existe";
            
            function validarContraseña($user,$passwd,$usuarios){
                if($passwd==$usuarios["$user"]["passwd"]){
                    echo "La contraseña es correcta";
                }else
                    echo "La contraseña es incorrecta";

            }
        ?>
    </body>
</html>