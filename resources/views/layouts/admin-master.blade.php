<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 12:36 PM
 */

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Area</title>
        <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('src/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('src/css/admin.css') }}">
        @yield('styles')

    </head>
    <body>
    @include('includes.admin-header')

        @yield('content')


        <script type="text/javascript" src="{{ URL::to('src/js/jquery-1.12.4.min.js')}}"></script>
        <script type="text/javascript">
            var baseUrl="{{ URL::to('/')}}";
        </script>
        @yield('scripts')
    </body>
</html>
