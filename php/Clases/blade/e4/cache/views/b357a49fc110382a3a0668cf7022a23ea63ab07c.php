<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio4</title>
    </head>
    <body>
    <table border="1">
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
        </tr>
        
        <?php $__currentLoopData = $zapatilla; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arrayZapatillas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <tr>
                <td><?php echo e($arrayZapatillas->getMarca()); ?></td>
                <td><?php echo e($arrayZapatillas->getModelo()); ?></td>
                <td><?php echo e($arrayZapatillas->getTipo()); ?></td>
                <td><?php echo e($arrayZapatillas->getPrecio()); ?></td>
            </tr>
       
           
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>
    </body>
</html>
<?php /**PATH /vagrant/Clase/php/Clases/blade/e4/views/zapatillas.blade.php ENDPATH**/ ?>