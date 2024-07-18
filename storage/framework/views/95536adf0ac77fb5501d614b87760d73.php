



<?php $__env->startSection('content'); ?>
<h1>Especies en Extinción</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Cantidad de Árboles</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $especies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $especie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($especie->id); ?></td>
            <td><?php echo e($especie->nombre); ?></td>
            <td><?php echo e($especie->descripcion); ?></td>
            <td><?php echo e($especie->arboles_count); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cala\resources\views/especies/en_extincion.blade.php ENDPATH**/ ?>