<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 6:01 AM
 */
?>

<?php $__env->startSection('title'); ?>
    Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <form action="<?php echo e(route('contact.send')); ?>" method="post" id="contact-form">
        <div class="input-group">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" value="<?php echo e(Request::old('name')); ?>"/>
        </div>
        <div class="input-group">
            <label for="email">Your E-Mail</label>
            <input type="email" id="email" name="email" placeholder="Your E-Mail" value="<?php echo e(Request::old('email')); ?>"/>
        </div>
        <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" value="<?php echo e(Request::old('subject')); ?>"/>
        </div>
        <div class="input-group">
            <label for="name">Your Message</label>
            <textarea type="text" id="message" name="message" placeholder="Your message"> <?php echo e(Request::old('message')); ?></textarea>
        </div>
        <button type="submit" class="btn"> Submit Message</button>
        <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token"/>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>