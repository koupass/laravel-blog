<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/2/2017
 * Time: 9:44 AM
 */
?>


<?php $__env->startSection('content'); ?>

    <div class="centered">
        <?php foreach($actions as $action): ?>

            <a href="<?php echo e(route('niceaction',['action'=> $action->name])); ?>"><?php echo e($action->name); ?></a>

        <?php endforeach; ?>
        <br>
        <br>
        <br>
        <?php if(count($errors)>0): ?>
            <div>
                <ul class="alert alert-danger">
                    <?php foreach($errors->all() as $error): ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php /*<form action="<?php echo e(route('benice')); ?>" method="post">*/ ?>
        <?php /*<lable for="select-action">I want to...</lable>*/ ?>
        <?php /*<select name="action" id="select-action">*/ ?>
        <?php /*<option value="greet">Greet</option>*/ ?>
        <?php /*<option value="hug">Hug</option>*/ ?>
        <?php /*<option value="kiss">Kiss</option>*/ ?>
        <?php /*</select>*/ ?>
        <?php /*<input type="text" name="name"/>*/ ?>
        <?php /*<button type="submit">Do a nice action!</button>*/ ?>
        <?php /*<input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">*/ ?>
        <?php /*</form>*/ ?>

        <form action="<?php echo e(route('add_action')); ?>" method="post">
            <lable for="name">Name of Action</lable>
            <input type="text" name="name"/>
            <lable for="name">Niceness</lable>
            <input type="text" name="niceness"/>
            <button type="submit">Do a nice action!</button>
            <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">
        </form>

        <br><br><br>
        <ul>
            <?php foreach($logged_actions as $logged_action): ?>
                <li>
                    <?php echo e($logged_action->nice_action->name); ?>

                    <?php foreach($logged_action->nice_action->categories as $category): ?>
                        <?php echo e($category->name); ?>

                    <?php endforeach; ?>
                </li>
            <?php endforeach; ?>
        </ul>
            <?php if($logged_actions->LastPage()>1): ?>
                <?php for($i=1;$i<=$logged_actions->lastPage();$i++): ?>
                    <a href="<?php echo e($logged_actions->url($i)); ?>"><?php echo e($i); ?></a>
                    <?php endfor; ?>
                <?php endif; ?>
        <?php echo $logged_actions->links(); ?>


            <script type="text/javascript">
                $('form').submit(function(event){
                    event.preventDefault();
                    $.ajax({
                        type:'POST',
                        url:"<?php echo e(route('add_action')); ?>",
                        data:{name:$('#name').val(),niceness:$('#niceness').val(),_token:<?php echo e(Session::token()); ?>"}

                    });
                });

            </script>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>