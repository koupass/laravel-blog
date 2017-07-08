<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/10/2017
 * Time: 11:30 PM
 */
?>



<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('src/css/categories.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="container">
        <section id="category-admin">
            <form action="" method="post">
                <div class="input-group">
                    <label for="" class="name"></label>
                    <input type="text" name="name" id="name"/>
                    <button type="submit" class="btn">Create Category</button>
                </div>
            </form>
        </section>
        <section class="list">
            <?php foreach($categories as $category): ?>
                <article>
                    <div class="category-info" data-id="<?php echo e($category->id); ?>">
                        <h3 class="data-name"><?php echo e($category->name); ?></h3>
                    </div>
                    <div class="edit">
                        <nav>
                            <ul>
                                <li class="category"><input type="text" /></li>
                                <li><a class="data-edit" href="#">Edit</a></li>
                                <li><a href="#" class="danger">Delete</a></li>
                            </ul>
                        </nav>
                    </div>

                </article>
            <?php endforeach; ?>
        </section>
        <?php if($categories->lastPage()>1): ?>
            <section class="pagination">
                <?php if($categories->currentPage() !==1): ?>
                    <a href="<?php echo e($categories->previousPageUrl()); ?>"><i class="fa fa-caret-left"></i></a>
                <?php endif; ?>
                <?php if($categories->currentPage() !==$categories->lastPage()): ?>
                    <a href="<?php echo e($categories->nextPageUrl()); ?>"><i class="fa fa-caret-right"></i></a>
                <?php endif; ?>
            </section>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        var token = "<?php echo e(Session::token()); ?>"
    </script>
    <script type="text/javascript" src="<?php echo e(URL::to('src/js/categories.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>