@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

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


</body>
@endsection
