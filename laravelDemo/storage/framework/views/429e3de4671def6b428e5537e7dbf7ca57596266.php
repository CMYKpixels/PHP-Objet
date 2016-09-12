<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport"
                   content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<?php /*Equivalent à <?php echo $__env->yieldContent; ?> mais permet d'ecrire
entre les 'balise'*/ ?>
    <?php $__env->startSection('sidebar'); ?>
        Menu Gauche
        <?php echo $__env->yieldSection(); ?>

    <div class="text">
        <?php echo $__env->yieldContent('article'); ?>
    </div>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>