@extends('layouts.page')
@section('content')
    <div class="main-content">
        <div class="container">

            <!-- TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>{{ $title }}
                            <small>{{ $subtitle }}</small>
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
                            <li>
                                <a href="{{ url('/users')}}" class="new-event MyToolbar">
                                    <i class="fa fa-bullseye"></i> View All Users
                                </a>
                            </li>
                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- TOOLBAR -->

            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="active">
                            {{ $title }}
                        </li>
                    </ol>
                </div>
            </div>

            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-heading">
                    <h2 class="panel-title"><i class="fa fa-user"></i> {{ $title }}</h2>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ url('/users') }}" autocomplete="off" enctype="multipart/form-data">

                        @if(count($errors))
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <br>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('clinic_id') ? 'has-error' : '' }}">
                                <label for="fname">Select Clinic</label>

                                <div class="clearfix"></div>
                                {!! Form::select('clinic_id', $clinics, 'Select A Clinic',['class' => 'form-control','placeholder' => 'Select a Clinic']) !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <hr>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="fname">Name</label>
                                <input class="form-control" id="first_name" name="name" type="text" placeholder="Name"
                                       value="{{ old('first_name') }}">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="fname">Dentist Admin Email</label>
                                <input class="form-control" id="email" name="email" type="text"
                                       placeholder="Clinic Email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="fname">Password</label>
                                <input class="form-control" id="password" name="password" type="password"
                                       placeholder="Password" value="{{ old('password') }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="fname">Confirm Password</label>
                                <input class="form-control" id="confirm_password" name="password_confirmation"
                                       type="password" placeholder="Confirm Password"
                                       value="{{ old('confirm_password') }}">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Create Dentist Admin</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
