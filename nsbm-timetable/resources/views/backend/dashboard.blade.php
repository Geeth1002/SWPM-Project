@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')

<diV class="container">

        <div class="text-center">

            <br><h2><b>Welcome Admin</b></h2><br>
            <div class="row">
                <div class="col">
                            <div class="col-md-12 well">
                                <div class="col-md-12">
                                    <br>

                                    <a href="/timetableview" class="btn btn-success btn-lg btn-block">View Timetable</a>
                                    <a href="/dashboard" class="btn btn-success btn-lg btn-block">View Your Profile</a>
                                    <br><br>
                                </div>
                            </div>
                </div>
            </div>

            <br><h2><b>Create / Add Timetables</b></h2><br><br>
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                    <form id="myForm" method="post" action="/savett">
                    {{csrf_field()}}
                        <input type="text" class="form-control" name="mbatch" placeholder="Batch Name"><br>
                        <input type="text" class="form-control" name="mhall" placeholder="Hall/Lab"><br>
                        <input type="text" class="form-control" name="mmodule" placeholder="Module"><br>
                        <input type="text" class="form-control" name="mlecture" placeholder="Lecturer"><br>
                        <input type="text" class="form-control" name="mdate" placeholder="Date (Y-M-D)"><br>
                        <input type="text" class="form-control" name="mtime" placeholder="Time (HH:MM-HH:MM)"><br>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="button" class="btn btn-warning" value="Clear" onclick="Clear()"  >
                    </form>

                    <diV class="container">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-12">
                                        <br><br><br>
                                        <table>
                                             <th><h2><b>Time Table Data View / Update / Delete</b></h2></th>
                                        </table>
                                         <br>
                                        <table class="table table-dark table-responsive">
                                            <th>ID</th>
                                            <th>Batch Name</th>
                                            <th>Hall/Lab</th>
                                            <th>Module</th>
                                            <th>Lecture</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                            @foreach($timeTable as $data)
                                            <tr>
                                                <td>{{ $data->id}}</td>
                                                <td>{{ $data->batch}}</td>
                                                <td>{{ $data->hall }}</td>
                                                <td>{{ $data->module }}</td>
                                                <td>{{ $data->lecturer }}</td>
                                                <td>{{ $data->date }}</td>
                                                <td>{{ $data->time }}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td>{{ $data->updated_at }}</td>
                                                <td>
                                                    <a href="/updaterecode/{{ $data->id}}" class ="btn btn-success">Update</a>
                                                    <a href="/deleterecode/{{ $data->id}}" class ="btn btn-danger" onclick="return confirm('Do you want to delete record delails?')">Delete</a>
                                                </td>
                                            </tr>
                                             @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
@endsection
