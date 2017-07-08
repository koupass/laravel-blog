<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/5/2017
 * Time: 11:10 PM
 */
?>

<?php $__env->startSection('title'); ?>
    Blog index
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php foreach($posts as $post): ?>
        <article class="blog-post">
            <h3><?php echo e($post->title); ?></h3>
            <span calss="subtitle"><?php echo e($post->author); ?> | <?php echo e($post->created_at); ?></span>
            <p><?php echo e($post->body); ?></p>
            <a href="<?php echo e(route('blog.single',['post_id'=>$post->id,'end'=>'frontend'])); ?>">Read more</a>
        </article>
    <?php endforeach; ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>