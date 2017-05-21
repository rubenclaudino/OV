@extends('layouts.page')
@section('title', 'Clinics')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-6 col-md-6">

                    <h2 class="table_title">Clientes<br>
                        <small style="color: #dddddd">Lista de clientes</small>
                    </h2>

                </div>

                <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                    <div class="pull-right">

                        <a class="btn"
                           style="background: whitesmoke">
                            <i class="fa fa-user"></i> Send Invite
                        </a>

                        <a class="btn" href="#" class="print" data-id="mainInfo" style="background: whitesmoke">
                            <i class="fa fa-print"></i> Imprimir
                        </a>

                    </div>

                </div>

            </div>
            <!-- end: PANEL HEAD -->

            <br>
            <br>
            <br>
            <br>
            <br>

            <style>
                .image_cont {
                    width: 30px;
                    height: 30px;
                    overflow: hidden;
                }

                .image_cont img {
                    border-radius: 100px;
                    width: 100%;
                    height: auto;
                }
            </style>

            <!-- start: PANEL BODY -->
            <div class="panel-body">

                <!-- start: CLINICS REGISTERED -->
                <table class="table table-responsive table-hover" id="mainInfo">

                    <!-- start: COLUMN INFORMATION -->
                    <thead style="background: whitesmoke">
                    <tr>
                        <!-- COL 0: CLINIC ID -->
                        <th class="hide"></th>
                        <!-- COL 1: LOGO -->
                        <th></th>
                        <!-- COL 2: CLINIC NAME -->
                        <th>Clínica</th>
                        <!-- COL 3: CLINIC ADMIN EMAIL -->
                        <th>Email Admin</th>
                        <!-- COL 4: CLINIC PHONE NUMBER -->
                        <th>Fone</th>
                        <!-- COL 6: CLINIC REGISTERATION DATE -->
                        <th>Data Cadastrado</th>
                        <!-- COL 7: NUMBERO OF USERS -->
                        <th># Users</th>
                        <!-- COL 8: OPTIONS  -->
                        <th></th>
                    </tr>
                    </thead>
                    <!-- end: COLUMN INFORMATION -->

                    <!-- start: ROW INFORMATION -->
                    <tbody>
                    <?php
                    if(!empty($clinics)){
                    $i = 0;
                    foreach($clinics as $data){
                    ?>
                    <tr>
                        <!-- COL 0: CLINIC ID -->
                        <td class="hide">{{ $i }}<?php $i++;?></td>
                        <!-- COL 1: CLINIC LOGO -->
                        <td>
                            <div class="image_cont" style="opacity: 0.8">
                                @if($data->logo != '')
                                    {{ Html::image(url('/').'/'.$data->logo) }}
                                @else
                                    {{ Html::image(url('/')."/images/anonymous.jpg") }}
                                @endif
                            </div>
                        </td>
                        <!-- COL 2: CLINIC NAME -->
                        <td>{{ $data->name }}</td>
                        <!-- COL 3: CLINIC ADMIN EMAIL -->
                        <td style="color: #00a5b3"><strong>{{ $data->email }}</strong></td>
                        <!-- COL 4: CLINIC PHONE NUMBER -->
                        <td>
                            @if(isset($data->phone_1))
                                {{ $data->phone_1}}
                            @else
                                -
                            @endif
                        </td>
                        <!-- COL 6: DATE CREATED -->
                        <td>{{ date('d/m/Y', strtotime($data->created_at)) }}</td>
                        <!-- COL 7: USER COUNT -->
                        <td>
                                <span class="label label-default"
                                      style="background: #0a91ff !important;opacity: 0.8">  {{ count($data->users) }} </span>
                        </td>
                        <!-- COL 8: OPTIONS  -->
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                        style="background: #dddddd;opacity: 0.9" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Options &nbsp;<span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                    <li><a href="{{route('clinic.show', $data->id)}}">
                                            <small><i class="fa fa-user fa-fw"></i>&nbsp; Perfil</small>
                                        </a></li>
                                    <li><a href="#">
                                            <small><i class="fa fa-eye fa-fw"></i>&nbsp; Atividades</small>
                                        </a></li>
                                    <li><a href="#">
                                            <small><i class="fa fa-info fa-fw"></i>&nbsp; Log</small>
                                        </a></li>
                                    <!-- <li><a href="#"><small><i class="fa fa-users fa-fw"></i>&nbsp; Users Permitted</small></a></li> -->
                                    <!-- <li><a href="#"><small><i class="fa fa-lock fa-fw"></i>&nbsp; Block Access</small></a></li> -->
                                    <li class="divider"></li>
                                    <li><a href="#" class="deleteClinic" data-id="{{$data->id}}">
                                            <small><i class="fa fa-ban fa-fw"></i>&nbsp Desativar</small>
                                        </a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php } } ?>
                    </tbody>
                    <!-- end: ROW INFORMATION -->
                </table>
                <!-- end: CLINICS REGISTERED -->
            </div>
            <!-- end: PANEL BODY -->
        </div>
        <!-- end: PANEL -->
    </div>
    <!-- end: DIV -->

@endsection
