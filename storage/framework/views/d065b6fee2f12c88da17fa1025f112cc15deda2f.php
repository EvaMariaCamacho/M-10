


<?php $__env->startSection('content'); ?>


<div class="container">

    <?php if(Session::has('mensaje')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      
        <?php echo e(Session::get('mensaje')); ?>


    </div>
        <?php endif; ?>
    

<a href="<?php echo e(url('catalog/create')); ?>" class="btn btn-success">Registrar nuevo catalog</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>N.Reg.</th>
            <th>Codigo</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($catalog->id); ?></td>
            <td><?php echo e($catalog->codigo); ?></td>
            <td><?php echo e($catalog->autor); ?></td>
            <td><?php echo e($catalog->titulo); ?></td>
            <td><?php echo e($catalog->descripcion); ?></td>
            <td>          
                <a href="<?php echo e(url('/catalog/'.$catalog->id.'/edit')); ?>" class="btn btn-warning">

                    Editar
                </a>
                <form action="<?php echo e(url('/catalog/'.$catalog->id)); ?>" class="d-inline" method="post">
                   
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                   <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                
                </form>
                
                
                
                </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </tbody>

    
</table>

<?php echo e($catalogs->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\catalog\resources\views/catalog/index.blade.php ENDPATH**/ ?>