@extends('frontend.layouts.app')
@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('content')

    <diV class="container">

        <div class="text-center">

            <br><h2>Edit Table View</h2><br>
        </div>
        <div class="col-md-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                <form action="/updatedetails" method="post" >
                    {{csrf_field()}}
                        <input type="hidden" class="form-control form-rounded" name="uid" value="{{$timetableById->id}}">
                        <input type="text" class="form-control" name="ubatch" value="{{$timetableById->batch}}"><br>
                        <input type="text" class="form-control" name="uhall" value="{{$timetableById->hall}}"><br>
                        <input type="text" class="form-control" name="umodule" value="{{$timetableById->module}}"><br>
                        <input type="text" class="form-control" name="ulecture" value="{{$timetableById->lecturer}}"><br>
                        <input type="text" class="form-control" name="udate" value="{{$timetableById->date}}"><br>
                        <input type="text" class="form-control" name="utime" value="{{$timetableById->time}}"><br>
                        <br>
                         <input type="submit" class="btn btn-success" value="Update">
                        <a href="/admin/dashboard" class="btn btn-danger">Cancel</a>
                </form>
        </div>
    </diV>
@endsection


