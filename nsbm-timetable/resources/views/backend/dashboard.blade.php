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
                    <form id="myForm" method="post" action="/savett">
                    {{csrf_field()}}


                        <input type="text" class="form-control" name="mbatch" placeholder="Batch Name"><br>
                        <input type="text" class="form-control" name="mhall" placeholder="Hall/Lab"><br>
                        <input type="text" class="form-control" name="mmodule" placeholder="Module"><br>
                        <input type="text" class="form-control" name="mlecture" placeholder="Lecture"><br>
                        <input type="text" class="form-control" name="mdate" placeholder="Date"><br>
                        <input type="text" class="form-control" name="mtime" placeholder="Time"><br>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="button" class="btn btn-warning" value="Clear" onclick="Clear()"  >
                    </form>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>batch</th>
                                <th>hall</th>
                                <th>module</th>
                                <th>lecturer</th>
                                {{-- <th>@lang('labels.backend.access.users.table.other_permissions')</th>
                                <th>@lang('labels.backend.access.users.table.social')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($timeTable as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->batch }}</td>
                                    <td>{{ $data->hall }}</td>
                                    <td>{{ $data->module }}</td>
                                    <td>{{ $data->lecturer }}</td>
                                    {{-- <td>{{ $user->permissions_label }}</td>
                                    <td>@include('backend.auth.user.includes.social-buttons', ['user' => $user])</td>
                                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                                    <td>@include('backend.auth.user.includes.actions', ['user' => $user])</td> --}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <diV class="container">

                            <div class="text-center">

                                <div class="row">

                                    <div class="col-md-12">

                                            <br><br><br>
                                            <table>
                                                    <th><h1>Time Table &emsp13;-&emsp13;</h1></th>
                                                    <th><h1>2019-09-11</h1></th>
                                            </table>
                                                    <br>

                                        <table class="table table-light">
                                            <th>Batch Name</th>
                                            <th>Hall/Lab</th>
                                            <th>Module</th>
                                            <th>Lecture</th>
                                            <th>Time</th>

                                            <tr>
                                                <td>17.1 UGC</td>
                                                <td>L-102</td>
                                                <td>SWPM</td>
                                                <td>Mr. Chamen</td>
                                                <td>9.00</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
