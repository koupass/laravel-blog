<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/19/2017
 * Time: 1:53 PM
 */
?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/modal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/form.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(count($contact_messages)==0): ?>
            No Messages
        <?php endif; ?>
        <section class="list">
            <?php foreach($contact_messages as $contact_message): ?>
                <article data-message="<?php echo e($contact_message->body); ?>" data-id="<?php echo e($contact_message->id); ?>" class="contact-message">
                    <div class="message-info" >
                        <h3 class="data-name"><?php echo e($contact_message->subject); ?></h3>
                        <span class="info">Sender:<?php echo e($contact_message->sender); ?> | <?php echo e($contact_message->created_at); ?></span>
                    </div>
                    <div class="edit">
                        <nav>
                            <ul>
                                <li><a href="#">Show Message</a></li>
                                <li><a href="#" class="danger">Delete</a></li>
                            </ul>
                        </nav>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
        <?php if($contact_messages->lastPage()>1): ?>
            <section class="pagination">
                <?php if($contact_messages->currentPage() !==1): ?>
                    <a href="<?php echo e($contact_messages->previousPageUrl()); ?>"><i class="fa fa-caret-left"></i></a>
                <?php endif; ?>
                <?php if($contact_messages->currentPage() !==$contact_messages->lastPage()): ?>
                    <a href="<?php echo e($contact_messages->nextPageUrl()); ?>"><i class="fa fa-caret-right"></i></a>
                <?php endif; ?>
            </section>
        <?php endif; ?>
    </div>
    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal-close">Close</button>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    <script type="text/javascript">
        var token = "<?php echo e(Session::token()); ?>";
    </script>
    <script type="text/javascript" src="<?php echo e(URL::to('src/js/modal.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('src/js/contact_messages.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>