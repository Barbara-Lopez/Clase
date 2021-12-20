<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio3</title>
    </head>
    <body>
    <table border="1">
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
        </tr>
        
        @foreach($zapatilla as $arrayZapatillas)
        
            <tr>
                <td>{{ $arrayZapatillas->getMarca() }}</td>
                <td>{{ $arrayZapatillas->getModelo() }}</td>
                <td>{{ $arrayZapatillas->getTipo() }}</td>
                <td>{{ $arrayZapatillas->getPrecio() }}</td>
            </tr>
       
           
        @endforeach
        
    </table>
    </body>
</html>
