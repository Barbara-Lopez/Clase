
<html>
    <head>
        <title>Ejercicio 24</title>
    </head>
    <body>
        
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

            imprimirTabla($contactos);
            function imprimirTabla($contactos){
                echo "<table>";
                for($x=0;$x<count($contactos);$x++){
                    echo "<tr>";
                    echo "<td>";
                    echo $contactos["$x"]["nombre"];
                    echo "</td>";
                    echo "<td>";
                    echo $contactos["$x"]["apellido"];
                    echo "</td>";
                    echo "<td>";
                    echo $contactos["$x"]["telefono"];
                    echo "</td>";
                    echo "<td>";
                    echo $contactos["$x"]["email"];
                    echo "</td>";
                    
                    echo "</tr>";
                };
                echo "</table>";
            }
        ?>
    </body>
</html>