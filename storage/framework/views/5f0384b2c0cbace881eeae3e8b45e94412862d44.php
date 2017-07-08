<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/8/2017
 * Time: 8:50 AM
 */
?>



<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(route('admin.blog.post.create')); ?>" method="post">
            <div class="input-group">
                <label for=title">Title</label>
                <input type="text" name="title" id="title" <?php echo e($errors->has('title')?'class=has-error':''); ?> value="<?php echo e(Request::old('title')); ?>"/>
            </div>
            <div class="input-group">
                <label for=author">Author</label>
                <input type="text" name="author" id="author" <?php echo e($errors->has('title')?'class=has-error':''); ?> value="<?php echo e(Request::old('author')); ?>"/>
            </div>
            <div class="input-group">
                <label for="category_select">Add Categories</label>
                <select type="text" name="category_select" id="category_select" >
                    <?php foreach($categories as $category): ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="button" class="btn">Add Category</button>
                <div class="added-categories">
                    <ul></ul>
                </div>
                <input type="hidden" name="categories" id="categories">
            </div>

            <div class="input-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" rows="12" <?php echo e($errors->has('title')?'class=has-error':''); ?> value="<?php echo e(Request::old('body')); ?>"></textarea>
            </div>
            <button type="submit" class="btn">Create Post</button>
            <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"/>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript" src="<?php echo e(URL::to('src/js/posts.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>