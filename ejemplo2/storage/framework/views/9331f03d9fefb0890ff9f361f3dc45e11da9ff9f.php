

<?php $__env->startSection('title', 'Cursos'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la página de crear cursos</h1>
    <form action="<?php echo e(route('cursos.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <label>
            Nombre:<br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion:<br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria:<br>
            <input type="text" name="category">
        </label>
        <br>
        <input type="submit" name="Enviar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Laravel\ejemplo2\resources\views/cursos/create.blade.php ENDPATH**/ ?>