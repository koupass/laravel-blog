<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 12:42 PM
 */
?>
<header class="top-nav">
    <div>
        <ul>
            <li <?php echo e(Request::is('admin') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.index')); ?>">Dashboard</a></li>
            <li <?php echo e(Request::is('admin/blog/post*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.blog.index')); ?>">Posts</a></li>
            <li <?php echo e(Request::is('admin/blog/categories*') || Request::is('admin/blog/category*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.blog.categories')); ?>">Categories</a></li>
            <li <?php echo e(Request::is('admin/contact/*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.contact.index')); ?>">Contact Messages</a></li>
            <li ><a href="<?php echo e(route('admin.logout')); ?>">Logout</a></li>
        </ul>
    </div>
</header>
