<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/5/2017
 * Time: 11:09 PM
 */
?>
@extends('layouts.master')

@section('title')
    {{$post->title}}
@endsection


@section('content')
    <article>
        <h3>{{$post->title}}</h3>
        <span calss="subtitle">{{$post->author}} | {{$post->created_at}}</span>
        <p>{{$post->body}}</p>
    </article>
@endsection