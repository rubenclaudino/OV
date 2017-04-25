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
                                <a href="{{ url('/recepnists')}}" class="new-event MyToolbar">
                                    <i class="fa fa-bullseye"></i> View All
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

            {{ Form::open(array('route' => 'recepnists.store', 'class' => 'form', 'id' => 'addRecepnist', 'enctype' => 'multipart/form-data')) }}
            {{ Form::hidden('clinic_id', Auth::user()->clinic_id) }}
            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-heading">
                    <h2 class="panel-title"><i class="fa fa-medkit"></i> Add New Recepnist</h2>
                </div>
                <div class="panel-body">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input class="form-control" id="first_name" name="first_name" type="text"
                                   placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input class="form-control" id="last_name" name="last_name" type="text"
                                   placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="DOB">DOB</label>
                            <input class="form-control datepicker" id="date_of_birth" name="date_of_birth" type="text"
                                   placeholder="DOB">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                            <label for="fname">Gender</label>

                            <div class="clearfix">
                                {!! Form::select('gender', array('0' => 'Male','1' => 'Female','2' => 'Other'),'',['class' => 'form-control selectpicker','placeholder' => 'Select a Gender']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-heading">
                    <h2 class="panel-title"><i class="fa fa-map-marker"></i> Address Details</h2>
                </div>
                <div class="panel-body">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="patient_road">Road/Avenue</label>
                            {{Form::text('address','',array('placeholder' => 'Street Address','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="form-field-select-3">
                                Borough
                            </label>
                            {!! Form::select('borough',/*$borough*/['city1', 'city2', 'city3'] ,'',['class' => 'select2picker select_borough','placeholder' => 'Select a Borough']) !!}
                        </div>
                    </div>
                    <div class="clearfix">

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="form-field-select-3">
                                State
                            </label>
                            {!! Form::select('state',$states, '',['class' => 'select2picker select_state','placeholder' => 'Select a State']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="patient_city">City</label>
                            {!! Form::select('city',$cities,'',['class' => 'select2picker select_city','placeholder' => 'Select a City']) !!}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="patient_zip">Zip Code</label>
                            {{Form::text('zip_code','',array('placeholder' => 'Zip','class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-heading">
                    <h2 class="panel-title"><i class="fa fa-phone"></i> Contact Details</h2>
                </div>
                <div class="panel-body">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="patient_road">Landline</label>
                            {{Form::text('phone_landline','',array('placeholder' => 'Landline','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label for="patient_road">Mobile</label>
                            {{Form::text('phone_1','',array('placeholder' => 'Mobile','class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-heading">
                    <h2 class="panel-title"><i class="fa fa-lock"></i> Password</h2>
                </div>
                <div class="panel-body">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h4>Password</h4>

                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="fname">Password</label>
                            <input class="form-control" id="password" name="password" type="password"
                                   placeholder="Password" value="{{ old('password') }}">
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="fname">Confirm Password</label>
                            <input class="form-control" id="confirm_password" name="password_confirmation"
                                   type="password" placeholder="Confirm Password" value="{{ old('confirm_password') }}">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Add Recepnist</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
@endsection
