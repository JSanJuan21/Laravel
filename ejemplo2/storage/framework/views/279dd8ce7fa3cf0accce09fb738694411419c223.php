

<?php $__env->startSection('title', 'Cursos edit'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la página de editar cursos</h1>
    <form action="<?php echo e(route('cursos.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <label>
            Nombre:<br>
            <input type="text" name="name" value="<?php echo e($curso->name); ?>">
        </label>
        <br>
        <label>
            Descripcion:<br>
            <textarea name="description" rows="5"><?php echo e($curso->description); ?></textarea>
        </label>
        <br>
        <label>
            Categoria:<br>
            <input type="text" name="category" value="<?php echo e($curso->category); ?>">
        </label>
        <br>
        <input type="submit" name="Enviar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Laravel\ejemplo2\resources\views/cursos/edit.blade.php ENDPATH**/ ?>