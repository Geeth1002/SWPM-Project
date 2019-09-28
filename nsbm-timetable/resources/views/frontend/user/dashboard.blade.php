@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        <i class="fas fa-tachometer-alt"></i> @lang('navs.frontend.dashboard')
                    </strong>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-4 order-1 order-sm-2  mb-4">
                            <div class="card mb-4 bg-light">
                                <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">
                               
                                <div class="card-body">
                                    <h4 class="card-title">
                                        {{ $logged_in_user->name }}<br/>
                                    </h4>

                                    <p class="card-text">
                                        <small>
                                            <i class="fas fa-envelope"></i> {{ $logged_in_user->email }}<br/>
                                            <i class="fas fa-calendar-check"></i> @lang('strings.frontend.general.joined') {{ timezone()->convertToLocal($logged_in_user->created_at, 'F jS, Y') }}
                                        </small>
                                    </p>

                                    <p class="card-text">

                                        <a href="{{ route('frontend.user.account')}}" class="btn btn-info btn-sm mb-1">
                                            <i class="fas fa-user-circle"></i> @lang('navs.frontend.user.account')
                                        </a>

                                        @can('view backend')
                                            &nbsp;<a href="{{ route('admin.dashboard')}}" class="btn btn-danger btn-sm mb-1">
                                                <i class="fas fa-user-secret"></i> @lang('navs.frontend.user.administration')
                                            </a>
                                        @endcan
                                    </p>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">Copyright © 2019</div>
                                    <div class="card-body">
                                        NSBM Green University Town
                                    </div>
                                 </div>
                            </div>

                        <div class="col-md-8 order-2 order-sm-1">
                            <div class="row">
                                <div class="col">
                                            <div class="col-md-12 well">
                                                <div class="col-md-12">
                                                    <br>

                                                  <a href="/timetableview" class="btn btn-success btn-lg btn-block">View Timetable</a>

                                                  <br><br>
                                                </div>
                                            </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            About US
                                        </div>

                                        <div class="card-body">
                                            The National School of Business Management is a state degree awarding institute in Sri Lanka, established under Companies Act No. 07 of 2007 and having company number PB 4833 and also it is the first ever green university in South Asia specialising in Computer sciences, Business, Engineering and Technology
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            Programme Office
                                        </div>

                                        <div class="card-body">
                                            Tel : +94 11 544 5000<br>
                                            Email : inquiries@nsbm.lk
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            School of Business
                                        </div>

                                        <div class="card-body">
                                            Tel : +94 11 544 5100<br>
                                            Email : sob@nsbm.lk
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100"></div>

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            School of Computing
                                        </div>

                                        <div class="card-body">
                                            Tel : +94 11 544 6000<br>
                                            Email : soc@nsbm.lk
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            School of Engineering
                                        </div>

                                        <div class="card-body">
                                            Tel : +94 11 544 6100<br>
                                            Email : infoeng@nsbm.lk
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
