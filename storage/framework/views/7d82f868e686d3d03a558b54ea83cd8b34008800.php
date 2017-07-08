<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/2/2017
 * Time: 2:43 PM
 */
?>

<header>
    <nav class="main-nav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="<?php echo e(route('blog.index')); ?>">Blog</a></li>
            <li><a href="<?php echo e(route('about')); ?>">About</a></li>
            <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
            <?php if(Auth::check()): ?>
                <li><a href="<?php echo e(route('admin.logout')); ?>">Log Out</a></li>
            <?php else: ?>
                <li><a href="<?php echo e(route('admin.login')); ?>">Log In</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>



