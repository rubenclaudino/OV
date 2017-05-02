@extends('layouts.page')
@section('content')

        <!-- start: MAIN -->
<div class="main-content">

    <!-- start: CONTAINER -->
    <div class="container">

        <!-- start: MAIN INFORMATION PANEL -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

            <!-- start: TABLE HEADER -->
            <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

                <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;opacity:0.8;">

                    <div class="col-sm-6 hidden-xs">

                        <div class="table-header">
                            <h2 style="font-weight: lighter">{{ $title }}</h2>

                            <p style="font-size: large;">Todos convênios aceitos pela sua clinica</p>
                        </div>

                    </div>

                    <div class="col-sm-6 col-xs-12">

                        <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                            <!-- start: TOP NAVIGATION MENU -->
                            <ul class="nav navbar-right">
                                <li>
                                    <a href="#" class="print" data-id="mainInfo">
                                        <i class="fa fa-print"></i> Imprimir
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dentalplans/create') }}" class="new-event MyToolbar">
                                        <i class="fa fa-folder-o"></i> Convênio
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
            <div class="panel-body">

                <!-- start: TABLE -->
                <table class="table table-striped table-hover" id="mainInfo">

                    <!-- start: COLUMN INFO -->
                    <thead>
                    <tr>
                        <th class="hide">#</th>
                        <th class="col-md-3">Convênio</th>
                        <th>Site</th>
                        <th>Telefone</th>
                        <th>Registro ANS</th>
                        <th class="col-md-1 hidden-print"></th>
                    </tr>
                    </thead>
                    <!-- end: COLUMN INFO -->

                    <!-- start: ROW INFO -->
                    <tbody>
                    <?php
                    if(!empty($plans)){
                    $i = 1;
                    foreach($plans as $data){
                    ?>
                    <tr>
                        <td class="hide">{{ $i }}<?php $i++;?></td>
                        <td>{{ $data->title }}</td>
                        <td><a href="{{ $data->url }}" target="_blank">{{ $data->url }}</a></td>
                        <td>{{ $data->phone_1 }}</td>
                        <td>
                            <small>{{ $data->cep }}</small>
                        </td>
                        <td class="hidden-print">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm dropdown-toggle"
                                        style="background: #dddddd;border-radius: 1px;opacity: 0.9"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opções &nbsp;<span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" style="opacity: 0.9">
                                    <li><a href="{{ url('/dentalplans')}}/{{$data->id}}" class="edittreatmentType"
                                           data-id="{{$data->id}}">
                                            <small><i class="fa fa-folder-o fa-fw"></i>&nbsp; Perfil</small>
                                        </a></li>
                                    <li><a href="{{ url('/dentalplans')}}/{{ $data->id}}/edit" class="edittreatmentType"
                                           data-id="{{$data->id}}">
                                            <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                        </a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/dentalplans')}}/{{ $data->id}}" class="edittreatmentType"
                                           data-id="{{$data->id}}">
                                            <small><i class="fa fa-ban fa-fw"></i>&nbsp; Excluír</small>
                                        </a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php } } ?>
                    </tbody>
                    <!-- end: ROW INFO -->

                </table>
                <!-- end: TABLE -->

            </div>
            <!-- start: PANEL BODY -->

        </div>
        <!-- end: MAIN INFORMATION PANEL -->
    </div>
    <!-- end: CONTAINER -->

</div>
<!-- end: MAIN -->

@endsection
