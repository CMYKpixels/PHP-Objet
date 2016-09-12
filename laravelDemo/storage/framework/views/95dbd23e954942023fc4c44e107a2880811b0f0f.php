<?php $__env->startSection('title'); ?>
    Ceci est mon titre
    <?php $__env->stopSection(); ?>


<?php $__env->startSection('sidebar'); ?>
    @parent
    Menu Droite
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>