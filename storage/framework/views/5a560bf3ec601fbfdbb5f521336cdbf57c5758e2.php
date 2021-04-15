

<?php $__env->startSection('code', '404'); ?>
<?php $__env->startSection('title', __('Página no encontrada')); ?>

<?php $__env->startSection('image'); ?>
<style>
    #apartado-derecho{
        text-align:center;
    }
    ul{
        text-decoration: none !important;
        list-style: none;
        color: black;
        font-weight: bold;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('message', __('No hemos encontrado la página que buscas.')); ?>
<?php echo $__env->make('errors::illustrated-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\catalog\resources\views/errors/404.blade.php ENDPATH**/ ?>