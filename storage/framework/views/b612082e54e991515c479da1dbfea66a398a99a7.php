<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 6:27 AM
 */
?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::to('src/screen/')); ?>" type="text/css">

<?php $__env->stopSection(); ?>
<?php if(Session::has('fail')): ?>
    <section class="info-box fail">

        <?php echo e(Session::get('fail')); ?>

    </section>

    <?php endif; ?>

<?php if(count($errors)>0): ?>
    <section class="info-box fail">
        <ul>
            <?php foreach($errors as $error): ?>
            <li><?php echo e(Session::get('fail')); ?></li>
                <?php endforeach; ?>
        </ul>

    </section>

<?php endif; ?>


