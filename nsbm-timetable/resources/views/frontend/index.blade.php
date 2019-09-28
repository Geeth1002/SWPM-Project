@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<body background="/img/nsbmback.jpg">
<div class="row mb-4" >

    <div class="col" >
            <br><br>
            <div class="text-center">
                <h2><b>Welcome to</b></h2>
                <h1><b>NSBM Green University Town</b></h1><br><br><br>
                <img src="{{ URL:: to ('/') }}/img/nsbm.png" style="height:190px; width:430px;"/>
                <br><br><br><br><br>
                <h3><b>Smart Time Table Management System</b></h3><br>
            </div>
    </div>
</div>
</body>
@endsection
