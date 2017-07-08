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
            <li {{Request::is('admin') ? 'class=active' : ''}}><a href="{{route('admin.index')}}">Dashboard</a></li>
            <li {{Request::is('admin/blog/post*') ? 'class=active' : ''}}><a href="{{route('admin.blog.index')}}">Posts</a></li>
            <li {{Request::is('admin/blog/categories*') || Request::is('admin/blog/category*') ? 'class=active' : ''}}><a href="{{route('admin.blog.categories')}}">Categories</a></li>
            <li {{Request::is('admin/contact/*') ? 'class=active' : ''}}><a href="{{route('admin.contact.index')}}">Contact Messages</a></li>
            <li ><a href="{{route('admin.logout')}}">Logout</a></li>
        </ul>
    </div>
</header>
