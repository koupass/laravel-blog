<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 6:27 AM
 */
?>
@section('style')
    <link rel="stylesheet" href="{{URL::to('src/screen/')}}" type="text/css">

@endsection
@if(Session::has('fail'))
    <section class="info-box fail">

        {{Session::get('fail')}}
    </section>

    @endif

@if(count($errors)>0)
    <section class="info-box fail">
        <ul>
            @foreach($errors as $error)
            <li>{{Session::get('fail')}}</li>
                @endforeach
        </ul>

    </section>

@endif


