<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/3/2017
 * Time: 2:21 PM
 */
?>


<?php $__env->startSection('title'); ?>
    Trending quotes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(!empty(Request::segment(1))): ?>
        <section class="filter-bar">
            A filter has been set!
            <a href="<?php echo e(route('index')); ?>">Show all quotes</a>
        </section>
    <?php endif; ?>
    <?php if(count($errors)>0): ?>
        <section class="info-box fail">
            <ul>
                <?php foreach($errors->all() as $error): ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; ?>

            </ul>
        </section>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
        <section class="info-box success">
            <?php echo e(Session::get('success')); ?>

        </section>
    <?php endif; ?>
    <section class="quotes">
        <h1>Latest quotes</h1>

        <?php for($i=0;$i<count($quotes);$i++): ?>

            <article class="quote<?php echo e($i % 3 === 0 ? ' first-in-line' :(($i+1) % 3 === 0 ? ' last-in-line' : '')); ?>">
                <div class="delete"><a href="<?php echo e(route('delete',['quote_id'=>$quotes[$i]->id])); ?>">x</a></div>
                <?php /*<?php echo e($quotes[$i]['quote']); ?>*/ ?>
                <?php echo e($quotes[$i]->quote); ?>

                <div class="info">Created by <a
                            href="<?php echo e(route('index',['author'=>$quotes[$i]->author->name])); ?>"><?php echo e($quotes[$i]->author->name); ?></a>
                    on <?php echo e($quotes[$i]->created_at); ?></div>
            </article>
        <?php endfor; ?>

    </section>

    <div class="pagination">
        <?php if($quotes->currentPage()!== 1): ?>
            <a href="<?php echo e($quotes->previousPageUrl()); ?>">
                <span class="fa fa-caret-left"></span>
            </a>
        <?php endif; ?>
        <?php if($quotes->currentPage()!==$quotes->lastPage()&& $quotes->hasPages()): ?>
            <a href="<?php echo e($quotes->nextPageUrl()); ?>">
                <span class="fa fa-caret-right"></span>
            </a>
        <?php endif; ?>
    </div>
    <section class="edit-quote">
        <h1>Add a Quote</h1>
        <form action="<?php echo e(route('create')); ?>" method="post">
            <div class="input-group">
                <lable for="author">Your Name</lable>
                <input type="text" name="author" id="author" placeholder="Your Name"/>
            </div>
            <div class="input-group">
                <lable for="author">Your E-Mail</lable>
                <input type="email" name="email" id="email" placeholder="Your E-Mail"/>
            </div>
            <div class="input-group">
                <lable for="quot">Your Name</lable>
                <textarea type="text" name="quote" id="quote" placeholder="Quote" rows="5"></textarea>
            </div>
            <button class="btn" type="submit" value="submit">Submit Quote</button>
            <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
        </form>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>