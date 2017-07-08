<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 12:45 PM
 */
?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/modal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/form.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="<?php echo e(route('admin.blog.create_post')); ?>" class="btn">New Post</a></li>
                        <li><a href="<?php echo e(route('admin.blog.index')); ?>" class="btn">Show All Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section class="list">
                <ul>
                    <?php if(count($posts)==0): ?>

                        <li>No Posts</li>
                    <?php else: ?>
                        <?php foreach($posts as $post): ?>
                            <li>
                                <article data-message="Body" data-id="ID">
                                    <div class="message-info">
                                        <h3><?php echo e($post->title); ?></h3>
                                        <span class="info">
                                        <?php echo e($post->author); ?> | <?php echo e($post->created_at); ?>

                                    </span>
                                    </div>
                                    <div class="edit">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo e(route('admin.blog.post',['post_id'=>$post->id,'end'=>'admin'])); ?>">View
                                                        Post</a></li>
                                                <li><a href="<?php echo e(route('admin.blog.post.edit',['post_id'=>$post->id])); ?>">Edit</a>
                                                </li>
                                                <li><a class="danger"
                                                       href="<?php echo e(route('admin.blog.post.delete',['post_id'=>$post->id])); ?>">Delete</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </article>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </section>

        </div>
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="<?php echo e(route('admin.blog.create_post')); ?>" class="btn">New Post</a></li>
                        <li><a href="<?php echo e(route('admin.blog.index')); ?>" class="btn">Show All Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section class="list">
                <ul>
                    <?php if(count($contact_messages)==0): ?>
                        <li>No Message</li>
                    <?php endif; ?>
                    <?php foreach($contact_messages as $contact_message): ?>
                        <li>
                            <article data-message="<?php echo e($contact_message->body); ?>" data-id="<?php echo e($contact_message->id); ?>"
                                     class="contact-message">
                                <div class="message-info">
                                    <h3 class="data-name"><?php echo e($contact_message->subject); ?></h3>
                                    <span class="info">Sender:<?php echo e($contact_message->sender); ?>

                                        | <?php echo e($contact_message->created_at); ?></span>
                                </div>
                                <div class="edit">
                                    <nav>
                                        <ul>
                                            <li><a href="#">View</a></li>
                                            <li><a class="danger" href="#">Delete</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
    </div>
    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal-close">Close</button>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        var token = "<?php echo e(Session::token()); ?>"
    </script>
    <script type="text/javascript" src="<?php echo e(URL::to('src/js/modal.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('src/js/contact_messages.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>