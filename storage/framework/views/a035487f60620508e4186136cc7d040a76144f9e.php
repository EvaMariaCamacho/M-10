Formulario que tendra los datos en común con create y edit

<label for="Codigo">Codigo
    <input type="text" name="codigo">
    </label>
    <br>
    
    <label for="Autor">Autor
    <input type="text" name="autor">
    </label>
    <br>
    
    <label for="Titulo">Titulo
    <input type="text" name="titulo">
    </label>
    <br>
    
    <label for="Descripcion">Descripcion
    <input type="text" name="descripcion" value="<?php echo e($catalog->Descripcion); ?>" >
    </label>
    <br>
    
    <input type="submit" value="Guardar datos">
    <br><?php /**PATH C:\xampp\htdocs\catalog\resources\views/catalog/form.blade.php ENDPATH**/ ?>