

<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Crear Catalog</h1>
 
<?php if(count($errors)>0): ?>

    <div class="aletrt alert-danger" role="alert">

        <ul>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>  <?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    
    </div>

<?php endif; ?>


<form action="<?php echo e(url('/catalog')); ?>" method="post">
<?php echo csrf_field(); ?>

<div class="form-group">

    <label for="Codigo">Codigo
    <input type="text" class="form-control" name="codigo" value="<?php echo e(old('codigo')); ?>">
    </label>

</div>

<div class="form-group">

    <label for="Autor">Autor
    <input type="text" class="form-control" name="autor" value="<?php echo e(old('autor')); ?>">
    </label>

</div>

<div class="form-group">

    <label for="Titulo">Titulo
    <input type="text" class="form-control" name="titulo" value="<?php echo e(old('titulo')); ?>">
    </label>

</div>

<div class="form-group">

    <label for="Descripcion">Descripcion
    <input type="text" class="form-control" name="descripcion" value="<?php echo e(old('descripcion')); ?>">
    </label>

</div>

    <input class="btn btn-success" type="submit" value="Crear datos">

    <a class=" btn btn-primary" href="<?php echo e(url('catalog/')); ?>">Regresar</a>

</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\catalog\resources\views/catalog/create.blade.php ENDPATH**/ ?>