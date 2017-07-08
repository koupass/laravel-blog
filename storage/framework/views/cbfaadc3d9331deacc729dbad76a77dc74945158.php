<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/19/2017
 * Time: 4:52 PM
 */
?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/form.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form method="post" action="<?php echo e(route('admin.login')); ?>">
            <div class="inpout-group">
                <label for="email">E-Maril</label>
                <input type="text" name="email" id="email"
                       <?php echo e($errors->has('email')? 'class=has-error' : ''); ?> value="<?php echo e(Request::old('email')); ?>"/>
            </div>
            <div class="inpout-group">
                <label for="pasword">Password</label>
                <input type="password" name="password"
                       id="password" <?php echo e($errors->has('password')? 'class=has-error' : ''); ?> />
            </div>
            <button type="submit" name="Login" id="Login" class="btn">Login</button>
            <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>