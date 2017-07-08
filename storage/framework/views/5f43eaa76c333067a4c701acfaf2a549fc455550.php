<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/2/2017
 * Time: 3:00 PM
 */
?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('home')); ?>">Back</a>
    <h1>I kiss you</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>