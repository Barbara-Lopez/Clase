<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio2</title>
    </head>
    <body>
    <table style="border: 1px solid black;">
        <tr>
            <td>Marca</td>
            <td><?php echo e($zapatilla->getMarca()); ?></td>
        </tr>
        <tr>
            <td>Modelo</td>
            <td><?php echo e($zapatilla->getModelo()); ?></td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td><?php echo e($zapatilla->getTipo()); ?></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><?php echo e($zapatilla->getPrecio()); ?></td>
        </tr>
    </table>
    </body>
</html><?php /**PATH /vagrant/Clase/php/Clases/blade/e2/views/zapatillas.blade.php ENDPATH**/ ?>