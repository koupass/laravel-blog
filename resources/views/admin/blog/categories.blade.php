<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/10/2017
 * Time: 11:30 PM
 */
?>

@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/categories.css') }}">
@endsection



@section('content')
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
            @foreach($categories as $category)
                <article>
                    <div class="category-info" data-id="{{$category->id}}">
                        <h3 class="data-name">{{$category->name}}</h3>
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
            @endforeach
        </section>
        @if($categories->lastPage()>1)
            <section class="pagination">
                @if($categories->currentPage() !==1)
                    <a href="{{$categories->previousPageUrl()}}"><i class="fa fa-caret-left"></i></a>
                @endif
                @if($categories->currentPage() !==$categories->lastPage())
                    <a href="{{$categories->nextPageUrl()}}"><i class="fa fa-caret-right"></i></a>
                @endif
            </section>
        @endif
    </div>
@endsection


@section('scripts')
    <script type="text/javascript">
        var token = "{{Session::token()}}"
    </script>
    <script type="text/javascript" src="{{URL::to('src/js/categories.js')}}"></script>
@endsection


