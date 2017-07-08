<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/2/2017
 * Time: 9:48 AM
 */
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/form.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/common.css')); ?>">
    <script type="text/javascript" src="<?php echo e(URL::to('src/js/jquery-1.12.4.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="main">
    <?php echo $__env->yieldContent('content'); ?>
</div>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
