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
                                    <i class="fa fa-bullseye"></i> View All Dentists
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
                    <!-- <form id="registerDentist" method="POST" action="{{ url('/dentists') }}" autocomplete="off" enctype="multipart/form-data"> -->
                    {{ Form::model($dentist, ['route' => ['dentists.update', $dentist->id], 'method' => 'put','id' => 'updateDentist']) }}

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
                    <input type="hidden" name="id" value="{{ $dentist->id }}">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label>Role</label>
                            {!! Form::select('role', array('dentistadmin' => 'Dentist Admin','dentist' => 'Dentist'),$dentist->role,['class' => 'form-control selectpicker']) !!}
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label for="fname">First Name</label>
                            {{ Form::text('first_name',$dentist->first_name,array('placeholder' => 'First Name','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label for="fname">Last Name</label>
                            {{ Form::text('last_name',$dentist->last_name,array('placeholder' => 'Last Name','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="fname">Dentist Email</label>
                            {{ Form::text('email',$dentist->email,array('placeholder' => 'Email','class' => 'form-control','disabled' => 'true')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                            <label for="fname">Gender</label>

                            <div class="clearfix">
                                <label>{{ Form::radio('gender', '0') }} Male </label> &nbsp;
                                <label>{{ Form::radio('gender', '1') }} Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
                            <label for="fname">DOB</label>
                            {{ Form::text('date_of_birth',$dentist->date_of_birth,array('placeholder' => 'DOB','class' => 'form-control datepicker')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('cpf') ? 'has-error' : '' }}">
                            <label for="fname">CPF</label>
                            {{ Form::text('cpf',$dentist->cpf,array('placeholder' => 'CPF','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('rg') ? 'has-error' : '' }}">
                            <label for="fname">RG</label>
                            {{ Form::text('rg',$dentist->rg,array('placeholder' => 'RG','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('observation') ? 'has-error' : '' }}">
                            <label for="fname">Observation</label>
                            {{ Form::text('observation',$dentist->observation,array('placeholder' => 'Observation','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('cro') ? 'has-error' : '' }}">
                            <label for="fname">CRO</label>
                            {{ Form::text('cro',$dentist->cro,array('placeholder' => 'CRO','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('honors') ? 'has-error' : '' }}">
                            <label for="fname">Honors</label>
                            {{ Form::text('honors',$dentist->honors,array('placeholder' => 'Honors','class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h4 class="panel_inner_title">Other Details</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                        <div class="form-group {{ $errors->has('resident_in_clinic') ? 'has-error' : '' }}">

                            <label>{{ Form::checkbox('resident_in_clinic',1) }} Resident in Clinic</label>
                        </div>
                        <div class="form-group {{ $errors->has('use_whatapp') ? 'has-error' : '' }}">
                            <label>{{ Form::checkbox('use_whatsapp',1) }} Use Whats App</label>
                        </div>
                        <div class="form-group {{ $errors->has('accept_calls') ? 'has-error' : '' }}">
                            <label>{{ Form::checkbox('accept_calls',1) }} Accept Calls</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <hr>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h4 class="panel_inner_title">Address</h4>

                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="fname">Address</label>
                            {{ Form::text('address',$dentist->address,array('placeholder' => 'Address','class' => 'form-control')) }}
                        </div>
                        <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                            <label for="fname">City</label>
                            {{ Form::text('city',$dentist->city,array('placeholder' => 'City','class' => 'form-control')) }}
                        </div>
                        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                            <label for="fname">State</label>
                            {{ Form::text('state',$dentist->state,array('placeholder' => 'State','class' => 'form-control')) }}
                        </div>
                        {{--<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                            <label for="fname">Country</label>
                            {{ Form::text('country',$dentist->country,array('placeholder' => 'Country','class' => 'form-control')) }}
                        </div>--}}
                        <div class="form-group {{ $errors->has('zip_code') ? 'has-error' : '' }}">
                            <label for="fname">Zip</label>
                            {{ Form::text('zip_code',$dentist->zip_code,array('placeholder' => 'Zip','class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h4 class="panel_inner_title">Password</h4>

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
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="form-group">
                            <button class="btn btn-success btn-submit" data-loading-text="Saving..." type="submit">
                                Update Dentist
                            </button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
