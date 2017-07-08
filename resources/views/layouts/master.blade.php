<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/2/2017
 * Time: 9:48 AM
 */
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/common.css') }}">
    <script type="text/javascript" src="{{ URL::to('src/js/jquery-1.12.4.min.js')}}"></script>
    @yield('styles')
</head>
<body>
@include('includes.header')
<div class="main">
    @yield('content')
</div>


@include('includes.footer')
</body>
</html>
