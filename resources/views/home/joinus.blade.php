@extends('layouts.page')
@section('title', 'Join Us')
@section('content')

    <!-- TOOLBAR -->
    <div class="toolbar row">
        <div class="col-sm-6 hidden-xs">
            <div class="page-header">
                <h1>Join Us
                    <small>Book an Appointment</small>
                </h1>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="toolbar-tools pull-right">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                    <li>
                        <a href="{{ url('/users/create')}}" class="new-event MyToolbar">
                            <i class="fa fa-user"></i> Add New
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
                    Join Us
                </li>
            </ol>
        </div>
    </div>

    <div class="panel panel-white" style="margin-top:8px;">
        <div class="panel-heading">
            <h2 class="panel-title"><i class="fa fa-users"></i> Users List</h2>
        </div>
        <div class="panel-body">
            Join us

        </div>
    </div>

@endsection
