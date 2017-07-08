<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/19/2017
 * Time: 4:52 PM
 */
?>
@extends('layouts.admin-master')
@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection
@section('content')
    <div class="container">
        @include('includes.info-box')
        <form method="post" action="{{route('admin.login')}}">
            <div class="inpout-group">
                <label for="email">E-Maril</label>
                <input type="text" name="email" id="email"
                       {{$errors->has('email')? 'class=has-error' : ''}} value="{{Request::old('email')}}"/>
            </div>
            <div class="inpout-group">
                <label for="pasword">Password</label>
                <input type="password" name="password"
                       id="password" {{$errors->has('password')? 'class=has-error' : ''}} />
            </div>
            <button type="submit" name="Login" id="Login" class="btn">Login</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </div>
@endsection