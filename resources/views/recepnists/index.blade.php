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
                                <a href="{{ url('/recepnists/create')}}" class="new-event MyToolbar">
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
                            {{ $title }}
                        </li>
                    </ol>
                </div>
            </div>

            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-heading">
                    <h2 class="panel-title"><i class="fa fa-users"></i> Recepnists List</span></h2>
                </div>
                <div class="panel-body">
                    <!-- DISPLAYING USERS -->
                    <table class="table datatable table-striped">
                        <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Clinic(Associated With)</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($users)){
                        foreach($users as $data){
                        ?>
                        <tr>
                            <td class="center">{{ $data->id }}</td>
                            <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                            <td>{{ $data->email }}</td>
                            <td><?php if ($data->gender == '1') {
                                    echo 'Female';
                                } else {
                                    echo 'Male';
                                } ?></td>

                            <td>{{ $data->clinic->name }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ URL::route('recepnists.edit', $data->id) }}"><i
                                                        class="fa fa-pencil"></i> Edit</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" data-id="{{ $data->id }}" class="deleteRecepnist"><i
                                                        class="fa fa-trash "></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                    <!-- DISPLAYING USERS -->

                </div>
            </div>

        </div>
    </div>
@endsection
