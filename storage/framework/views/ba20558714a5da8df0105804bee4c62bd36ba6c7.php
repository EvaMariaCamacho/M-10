

<?php $__env->startSection('content'); ?>
<div class="container">

<h1>Editar Catalog</h1>

<?php if(count($errors)>0): ?>

    <div class="aletrt alert-danger" role="alert">

        <ul>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>  <?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    
    </div>

<?php endif; ?>



<form action="<?php echo e(url('/catalog/'.$catalog->id)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>

<div class="form-group">

        <label for="Codigo">Codigo
        <input type="text" class="form-control" name="codigo" value="<?php echo e($catalog->codigo); ?>">
        </label>

</div>

<div class="form-group">
        
        <label for="Autor">Autor
        <input type="text" class="form-control" name="autor" value="<?php echo e($catalog->autor); ?>">
        </label>

</div>

<div class="form-group">
        
        <label for="Titulo">Titulo
        <input type="text" class="form-control" name="titulo" value="<?php echo e($catalog->titulo); ?>">
        </label>

</div>

<div class="form-group">
        
        <label for="Descripcion">Descripcion
        <input type="text" class="form-control" name="descripcion" value="<?php echo e($catalog->descripcion); ?>" >
        </label>

</div>
        
        <input class="btn btn-success" type="submit" value="Editar datos">

        <a class=" btn btn-primary" href="<?php echo e(url('catalog/')); ?>">Regresar</a>



</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\catalog\resources\views/catalog/edit.blade.php ENDPATH**/ ?>