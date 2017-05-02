@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

                <style>
                    .image_cont{width:30px;height:30px;overflow:hidden;}
                    .image_cont img{border-radius:100px;width:100%;height:auto;}
                </style>

                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

                    <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;opacity:0.8;">

                        <div class="col-sm-6 hidden-xs">

                            <div class="table-header">
                                <h2 style="font-weight: lighter">{{ $title }}</h2>
                                <p style="font-size: large;">Your plan currently has <strong>7</strong> users available</p>
                            </div>

                        </div>

                        <div class="col-sm-6 col-xs-12">

                            <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right">
                                    <li>
                                        <a href="#" class="print">
                                            <i class="fa fa-users"></i> Change Plan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="new-event MyToolbar">
                                            <i class="fa fa-link"></i> Send Invite
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="print"  data-id="mainInfo">
                                            <i class="fa fa-print"></i> Imprimir
                                        </a>
                                    </li>
                                </ul>
                                <!-- end: TOP NAVIGATION MENU -->
                            </div>

                        </div>

                    </div>

                </div>
                <!-- end: TABLE HEADER -->

                <!-- start: PANEL BODY -->
                <div class="panel-body" >

                    <!-- start: DISPLAYING USERS -->
                    <table class="table datatable table-striped table-hover table-condensed" id="mainInfo">

                        <!-- start: TABLE HEAD -->
                        <thead>
                        <tr>
                            <th class="hide">#</th>
                            <th class="hidden-print"></th>
                            <th>Nome</th>
                            <th class="center">Tipo Usuário</th>
                            <th>Data Cadastrado</th>
                            <th>Email</th>
                            <th class="hidden-print"></th>
                        </tr>
                        </thead>
                        <!-- end: TABLE HEAD -->

                        <!-- start: TABLE BODY -->
                        <tbody>
                        <?php
                        if(!empty($users)){
                        foreach($users as $data){
                        ?>
                        <tr>
                            <td class="hide">{{ $data->id }}</td>
                            <!-- PROFILE PICTURE -->
                            <td class="hidden-print">
                                <div class="image_cont" style="opacity: 0.8">
                                    @if($data->profile_url != '')
                                        {{ Html::image(url('/').'/'.$data->profile_url) }}
                                    @else
                                        {{ Html::image(url('/')."/images/anonymous.jpg") }}
                                    @endif
                                </div>
                            </td>
                            <!-- USERNAME -->
                            <td>{{ $data->username }}</td>
                            <td class="center">
                                @if($data->rolename == 'admin')
                                    <span class="label label-default" style="background: #1b6d85 !important;opacity: 0.8"> Super Admin </span>
                                @elseif($data->rolename == 'local_admin')
                                    <span class="label label-default" style="background: #75ab00 !important;opacity: 0.8"> Clinic Admin </span>
                                @elseif($data->rolename == 'receptionist')
                                    <span class="label label-default" style="background: #ad1457 !important;opacity: 0.8"> Receptionist </span>
                                @elseif($data->rolename == 'dentist')
                                    <span class="label label-default" style="background: #8b1014 !important;opacity: 0.8"> Dentist </span>
                                @endif
                            </td>
                            <td>{{ date('d/m/Y', strtotime($data->created_at)) }}</td>
                            <td style="color: #00a5b3"><strong>{{ $data->email }}</strong></td>
                            <td class="hidden-print">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-white btn-sm btn-squared dropdown-toggle" style="background: white;opacity: 0.9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="{{ URL::route('dentists.show', $data->id) }}"><small><i class="fa fa-user fa-fw"></i>&nbsp; Profile</small></a></li>
                                        <li><a href="#"><small><i class="fa fa-eye fa-fw"></i>&nbsp; Activity</small></a></li>
                                        <li><a href="#"><small><i class="fa fa-info fa-fw"></i>&nbsp; Log</small></a></li>
                                        <li><a href="#"><small><i class="fa fa-check fa-fw"></i>&nbsp; Permissions</small></a></li>
                                        <li><a href="#"><small><i class="fa fa-unlock-alt fa-fw"></i>&nbsp; Make Admin</small></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><small><i class="fa fa-ban fa-fw"></i>&nbsp; Remover</small></a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>
                        <!-- end: TABLE BODY -->

                    </table>
                    <!-- end: DISPLAYING USERS -->

                </div>
                <!-- end: PANEL BODY -->

            </div>
            <!-- end: MAIN PANEL -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
