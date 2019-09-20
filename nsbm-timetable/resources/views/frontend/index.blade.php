@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="row mb-4">

    <div class="col" >
            <br><br>
            <div class="text-center">
                <h2>Welcome to</h2>
                <h1><b>NSBM Green University Town</b></h1><br><br><br>
            <img src="{{ URL:: to ('/') }}/img/nsbm.jpg" style="height:200px; width:450px;"/>
                <br><br><br><br>
                <h3>Smart Time Table Management System</h3><br>
            </div>
    </div><!--col-->
</div><!--row-->

@endsection
