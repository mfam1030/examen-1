



<?php $__env->startSection('content'); ?>
<h1>Árboles No Señalizados</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Especie</th>
            <th>Descripción</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Año Plantado</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $arboles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arbol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($arbol->id); ?></td>
            <td><?php echo e($arbol->especie->nombre); ?></td>
            <td><?php echo e($arbol->descripcion); ?></td>
            <td><?php echo e($arbol->latitud); ?></td>
            <td><?php echo e($arbol->longitud); ?></td>
            <td><?php echo e($arbol->año_plantado); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cala\resources\views/arboles/no_señalizados.blade.php ENDPATH**/ ?>