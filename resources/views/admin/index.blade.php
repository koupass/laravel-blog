<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 12:45 PM
 */
?>
@extends('layouts.admin-master')
@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/modal.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection
@section('content')
    <div class="container">
        @include('includes.info-box')

        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="{{route('admin.blog.create_post')}}" class="btn">New Post</a></li>
                        <li><a href="{{route('admin.blog.index')}}" class="btn">Show All Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section class="list">
                <ul>
                    @if(count($posts)==0)

                        <li>No Posts</li>
                    @else
                        @foreach($posts as $post)
                            <li>
                                <article data-message="Body" data-id="ID">
                                    <div class="message-info">
                                        <h3>{{$post->title}}</h3>
                                        <span class="info">
                                        {{$post->author}} | {{$post->created_at}}
                                    </span>
                                    </div>
                                    <div class="edit">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="{{route('admin.blog.post',['post_id'=>$post->id,'end'=>'admin'])}}">View
                                                        Post</a></li>
                                                <li><a href="{{route('admin.blog.post.edit',['post_id'=>$post->id])}}">Edit</a>
                                                </li>
                                                <li><a class="danger"
                                                       href="{{route('admin.blog.post.delete',['post_id'=>$post->id])}}">Delete</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </section>

        </div>
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="{{route('admin.blog.create_post')}}" class="btn">New Post</a></li>
                        <li><a href="{{route('admin.blog.index')}}" class="btn">Show All Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section class="list">
                <ul>
                    @if(count($contact_messages)==0)
                        <li>No Message</li>
                    @endif
                    @foreach($contact_messages as $contact_message)
                        <li>
                            <article data-message="{{$contact_message->body}}" data-id="{{$contact_message->id}}"
                                     class="contact-message">
                                <div class="message-info">
                                    <h3 class="data-name">{{$contact_message->subject}}</h3>
                                    <span class="info">Sender:{{$contact_message->sender}}
                                        | {{$contact_message->created_at}}</span>
                                </div>
                                <div class="edit">
                                    <nav>
                                        <ul>
                                            <li><a href="#">View</a></li>
                                            <li><a class="danger" href="#">Delete</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </div>
    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal-close">Close</button>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        var token = "{{Session::token()}}"
    </script>
    <script type="text/javascript" src="{{URL::to('src/js/modal.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('src/js/contact_messages.js')}}"></script>
@endsection