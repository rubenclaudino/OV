@extends('layouts.page')
@section('content')
    <div class="main-content">
        <div class="container">

            <!-- start: MAIN INFORMATION PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

                    <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;opacity:0.8;">

                        <div class="col-sm-6 hidden-xs">

                            <div class="table-header">
                                <h2 style="font-weight: lighter">{{ $title }}</h2>

                                <p style="font-size: large;">Resumo de todos clientes</p>
                            </div>

                        </div>

                        <div class="col-sm-6 col-xs-12">

                            <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right">
                                    <li>
                                        <a href="#" class="new-event MyToolbar">
                                            <i class="fa fa-link"></i> Send Invite
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="print" data-id="mainInfo">
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

                <!-- start: BODY -->
                <div class="panel-body">

                    <!-- start: CLINICS REGISTERED -->
                    <table class="table table-striped table-hover datatable" id="mainInfo">
                        <!-- start: COLUMN INFORMATION -->
                        <thead>
                        <tr>
                            <!-- COL 0: CLINIC ID -->
                            <th class="hide"></th>
                            <!-- COL 1: LOGO -->
                            <th></th>
                            <!-- COL 2: CLINIC NAME -->
                            <th>Clinica</th>
                            <!-- COL 3: CLINIC ADMIN EMAIL -->
                            <th>Admin Email</th>
                            <!-- COL 4: CLINIC PHONE NUMBER -->
                            <th>Phone</th>
                            <!-- COL 5: CLINIC ADDRESS -->
                            <th class="hide">Clinic Address</th>
                            <!-- COL 6: CLINIC REGISTERATION DATE -->
                            <th>Registration Date</th>
                            <!-- COL 7: NUMBERO OF USERS -->
                            <th>No. Of Users</th>
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
                            <!-- COL 5: CLINIC ADDRESS -->
                            <td class="hide">
                                @if(isset($data->address))
                                    {{ $data->address }}
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
                                    <button type="button" class="btn btn-sm btn-squared dropdown-toggle"
                                            style="background: #dddddd;opacity: 0.9" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        Options &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="#">
                                                <small><i class="fa fa-user fa-fw"></i>&nbsp; Profile</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-eye fa-fw"></i>&nbsp; Activity</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-info fa-fw"></i>&nbsp; Log</small>
                                            </a></li>
                                        <!-- <li><a href="#"><small><i class="fa fa-users fa-fw"></i>&nbsp; Users Permitted</small></a></li> -->
                                        <!-- <li><a href="#"><small><i class="fa fa-lock fa-fw"></i>&nbsp; Block Access</small></a></li> -->
                                        <li class="divider"></li>
                                        <li><a href="#" class="deleteClinic" data-id="{{$data->id}}">
                                                <small><i class="fa fa-ban fa-fw"></i>&nbsp Remover</small>
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
                <!-- end: BODY -->

            </div>
            <!-- end: MAIN INFORMATION PANEL -->

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

        </div>
    </div>
@endsection
