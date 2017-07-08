<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/5/2017
 * Time: 6:12 PM
 */

?>


<?php $__env->startSection('content'); ?>
    <?php foreach($authors as $author): ?>
        <li><?php echo e($author->name); ?>(<?php echo e($author->email); ?>)</li>
    <?php endforeach; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>