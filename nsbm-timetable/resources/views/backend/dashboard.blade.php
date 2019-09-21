@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<diV class="container">

        <div class="text-center">

            <br><h2>Welcome Admin</h2><br>
            <br><h4>Create / Update Timetables</h4><br><br>


            <div class="row">

                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                    <form method="post" action="/savett">
                    {{csrf_field()}}


                        <input type="text" class="form-control" name="mbatch" placeholder="Batch Name"><br>
                        <input type="text" class="form-control" name="mhall" placeholder="Hall/Lab"><br>
                        <input type="text" class="form-control" name="mmodule" placeholder="Module"><br>
                        <input type="text" class="form-control" name="mlecture" placeholder="Lecture"><br>
                        <input type="text" class="form-control" name="mdate" placeholder="Date"><br>
                        <input type="text" class="form-control" name="mtime" placeholder="Time"><br>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="button" class="btn btn-warning" value="Clear">
                    </form>
@endsection
