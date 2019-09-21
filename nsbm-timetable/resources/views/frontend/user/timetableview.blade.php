@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
@can('view backend')
<body background="/img/nsbmback.jpg">
        <diV class="container">

                <div class="text-center">

                    <div class="row">

                        <div class="col-md-12">

                                <br>
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
                                @foreach($timeTable as $data)
                                <tr>
                                    <td>{{ $data->batch}}</td>
                                                <td>{{ $data->hall }}</td>
                                                <td>{{ $data->module }}</td>
                                                <td>{{ $data->lecturer }}</td>
                                                <td>{{ $data->time }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>


</body>
@endcan
@endsection
