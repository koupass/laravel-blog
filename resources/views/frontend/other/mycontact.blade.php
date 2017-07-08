<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 6:01 AM
 */
?>
@extends('layouts.master')
@section('title')
    Contact
@endsection

@section('style')

@endsection

@section('content')
    @include('includes.info-box')
    <form action="{{route('contact.send')}}" method="post" id="contact-form">
        <div class="input-group">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" value="{{Request::old('name')}}"/>
        </div>
        <div class="input-group">
            <label for="email">Your E-Mail</label>
            <input type="email" id="email" name="email" placeholder="Your E-Mail" value="{{Request::old('email')}}"/>
        </div>
        <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" value="{{Request::old('subject')}}"/>
        </div>
        <div class="input-group">
            <label for="name">Your Message</label>
            <textarea type="text" id="message" name="message" placeholder="Your message"> {{Request::old('message')}}</textarea>
        </div>
        <button type="submit" class="btn"> Submit Message</button>
        <input type="hidden" value="{{Session::token()}}" name="_token"/>
    </form>

@endsection