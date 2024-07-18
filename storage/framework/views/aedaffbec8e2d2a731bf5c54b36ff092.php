
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Árbol</title>
</head>
<body>
    

    <?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Crear Árbol</h1>

        <form action="<?php echo e(route('arboles.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="id_especie" class="form-label">Especie:</label>
                <select name="id_especie" id="id_especie" class="form-select">
                    <?php $__currentLoopData = $especies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $especie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($especie->id); ?>"><?php echo e($especie->nombre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div>

            <div class="mb-3">
                <label for="latitud" class="form-label">Latitud:</label>
                <input type="text" name="latitud" id="latitud" class="form-control">
            </div>

            <div class="mb-3">
                <label for="longitud" class="form-label">Longitud:</label>
                <input type="text" name="longitud" id="longitud" class="form-control">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="señalizado" id="señalizado" value="1" class="form-check-input">
                <label for="señalizado" class="form-check-label">Señalizado</label>
            </div>

            <div class="mb-3">
                <label for="año_plantado" class="form-label">Año Plantado:</label>
                <input type="text" name="año_plantado" id="año_plantado" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cala\resources\views/arboles/create.blade.php ENDPATH**/ ?>