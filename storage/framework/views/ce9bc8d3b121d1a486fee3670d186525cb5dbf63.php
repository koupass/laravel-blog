<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 12:36 PM
 */

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Area</title>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/css/admin.css')); ?>">
        <?php echo $__env->yieldContent('styles'); ?>

    </head>
    <body>
    <?php echo $__env->make('includes.admin-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>


        <script type="text/javascript" src="<?php echo e(URL::to('src/js/jquery-1.12.4.min.js')); ?>"></script>
        <script type="text/javascript">
            var baseUrl="<?php echo e(URL::to('/')); ?>";
        </script>
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
