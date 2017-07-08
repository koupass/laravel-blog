<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/10/2017
 * Time: 7:58 PM
 */
?>



<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/modal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/form.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section class="post-admin">
            <a href="<?php echo e(route('admin.blog.create_post')); ?>">New Post</a>
        </section>
        <section class="list">
                <?php if(count($posts)==0): ?>

                    No Posts
                <?php else: ?>
                    <?php foreach($posts as $post): ?>
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
                                            <li><a href="<?php echo e(route('admin.blog.post',['post_id'=>$post->id,'end'=>'admin'])); ?>">View Post</a></li>
                                            <li><a href="<?php echo e(route('admin.blog.post.edit',['post_id'=>$post->id])); ?>">Edit</a></li>
                                            <li><a class="danger" href="<?php echo e(route('admin.blog.post.delete',['post_id'=>$post->id])); ?>">Delete</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </article>
                    <?php endforeach; ?>
                <?php endif; ?>
        </section>

        <?php if($posts->lastPage()>1): ?>
            <section class="pagination">
                <?php if($posts->currentPage() !==1): ?>
                    <a href="<?php echo e($posts->previousPageUrl()); ?>"><i class="fa fa-caret-left"></i></a>
                <?php endif; ?>
                <?php if($posts->currentPage() !==$posts->lastPage()): ?>
                    <a href="<?php echo e($posts->nextPageUrl()); ?>"><i class="fa fa-caret-right"></i></a>
                <?php endif; ?>
            </section>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>