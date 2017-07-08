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
            <li><a href="{{route('blog.index')}}">Blog</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            @if(Auth::check())
                <li><a href="{{route('admin.logout')}}">Log Out</a></li>
            @else
                <li><a href="{{route('admin.login')}}">Log In</a></li>
            @endif
        </ul>
    </nav>
</header>



