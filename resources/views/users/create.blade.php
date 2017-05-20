@extends('layouts.page')
@section('title', 'Usuário')
@section('content')

    <div class="main-content">

        <div class="container">

            <!-- TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>Usuário
                            <small>Cadastrar um novo usuário</small>
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
                            Usuário
                        </li>
                    </ol>
                </div>
            </div>

            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-heading">
                    <h2 class="panel-title"><i class="fa fa-user"></i> Usuário</h2>
                </div>
                <div class="panel-body">
                    @include('errors.list')

                    {{ Form::open(['route' => 'users.store', 'method' => 'POST']) }}
                    @include('users.partials.form')
                    {{ Form::close() }}

                </div>

            </div>

        </div>
    </div>
@endsection
