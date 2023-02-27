    

    <?php $__env->startSection('title', 'Curso ' . $curso->name); ?>
        
    <?php $__env->startSection('content'); ?>
        <h1>Bienvenido al curso de <?php echo e($curso->name); ?></h1>
        <a href="<?php echo e(route('cursos.index')); ?>">Volver a cursos</a><br>
        <a href="<?php echo e(route('cursos.edit', $curso)); ?>">Editar Cursos</a>
        <p><strong>Categoría: </strong><?php echo e($curso->category); ?></p>
        <p><?php echo e($curso->description); ?></p>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Laravel\ejemplo2\resources\views/cursos/show.blade.php ENDPATH**/ ?>