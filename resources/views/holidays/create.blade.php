@extends('layouts.page')
@section('title', 'Holidays')
@section('content')
    <div class="main-content">
        <div class="container">

            <!-- TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>Add New Holiday Slot
                            <small>Add New Slot</small>
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
                            <li>
                                <a href="{{ url('/holidays')}}" class="new-event MyToolbar">
                                    <i class="fa fa-bullseye"></i> View All Slots
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
                            Add New Holiday Slot
                        </li>
                    </ol>
                </div>
            </div>

            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-heading">
                    <h2 class="panel-title"><i class="fa fa-user"></i> Add New Holiday Slot</h2>
                </div>
                <div class="panel-body">
                    <form id="addHoliday" method="POST" action="{{ url('/holidays') }}" autocomplete="off"
                          enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="fname">Title</label>
                                <input class="form-control" id="title" name="title" type="text" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="fname">Slot Date</label>
                                <input class="form-control" id="start_time" name="startimestamp" type="text"
                                       placeholder="Start Date">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Create Slot</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
