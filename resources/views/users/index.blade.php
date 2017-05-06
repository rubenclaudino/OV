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
                        <!-- <li>
   						<a href="{{ url('/users/create')}}" class="new-event MyToolbar">
   							<i class="fa fa-user"></i> Add New
   						</a>
   					</li> -->
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
                    <h2 class="panel-title"><i class="fa fa-users"></i> Users List</span></h2>
                </div>
                <div class="panel-body">
                    <!-- DISPLAYING USERS -->
                    <table class="table datatable table-striped">
                        <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Clinic</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tipo Usuário</th>
                            <th>Data Cadastrado</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($users)){
                        foreach($users as $user){
                        ?>
                        <tr>
                            <td class="hidden-print">
                                <div class="image_cont" style="opacity: 0.8;">
                                    @if($user->profile_url != '')
                                        {{ Html::image(url('/').'/'.$user->profile_url, '', ['width' => 70, 'height' => 70]) }}
                                    @else
                                        {{ Html::image(url('/')."/images/anonymous.jpg", '', ['width' => 70, 'height' => 70]) }}
                                    @endif
                                </div>
                            </td>
                            <td>{{ $user->clinic->name }}</td>
                            <td>{{ $user->last_name . ' ' . $user->first_name}}</td>
                            <td>{{ $user->email }}</td>
                            <td> @foreach($user->roles as $role)
                                    <span class="label label-default"
                                          style="background: #1b6d85 !important;opacity: 0.8"> {{$role->display_name}} </span>
                                @endforeach
                            </td>
                            <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                            <td class="hidden-print">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-white btn-sm btn-squared dropdown-toggle"
                                            style="background: white;opacity: 0.9" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="{{ URL::route('users.show', $user->id) }}">
                                                <small><i class="fa fa-user fa-fw"></i>&nbsp; Perfil</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-eye fa-fw"></i>&nbsp; Atividades</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-info fa-fw"></i>&nbsp; Log</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-check fa-fw"></i>&nbsp; Permissões</small>
                                            </a></li>
                                        <li><a href="#" class="hidden">
                                                <small><i class="fa fa-unlock-alt fa-fw"></i>&nbsp; Make Admin</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-ban fa-fw"></i>&nbsp; Desativar</small>
                                            </a></li>
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
