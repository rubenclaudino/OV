@extends('layouts.page')
@section('content')

        <!-- start: MAIN CONTENT -->
<div class="main-content">

    <!-- start: CONTAINER -->
    <div class="container">

        <!-- start: MAIN PANEL INFORMATION -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

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

            <!-- start: TABLE HEADER -->
            <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

                <div class="toolbar row" style="min-height: 100px;background: #f1f1f1;border: none;opacity:0.8;">

                    <div class="col-sm-6 hidden-xs">

                        <div class="table-header">
                            <h2 style="font-weight: lighter">Users</h2>

                            <p style="font-size: large;">Todos Dentistas Cadastrados</p>
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
                            </ul>
                            <!-- end: TOP NAVIGATION MENU -->
                        </div>

                    </div>

                </div>

            </div>
            <!-- end: TABLE HEADER -->

            <!-- start: PANEL BODY -->
            <div class="panel-body">

                <!-- start: TABLE DISPLAYING DENTISTS -->
                <table class="table datatable table-striped table-condensed" id="mainInfo">

                    <!-- start: TABLE HEAD -->
                    <thead>
                    <tr>
                        <th style="display:none;"></th>
                        <th></th>
                        <th style="width: 30%">Nome</th>
                        <th>Email</th>
                        <th style="width: 100%">Clínica</th>
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
                        <!-- ID -->
                        <td style="display:none;">
                            <small>{{ $data->id }}</small>
                        </td>
                        <!-- PHOTO -->
                        <td>
                            <div class="image_cont" style="opacity: 0.8">
                                @if($data->profile_url != '')
                                    {{ Html::image(url('/').'/'.$data->profile_url) }}
                                @else
                                    {{ Html::image(url('/')."/images/anonymous.jpg") }}
                                @endif
                            </div>
                        </td>
                        <!-- FULLNAME -->
                        <td>
                            @if($data->gender == 1)
                                <small>Dra.</small> {{ $data->first_name }} {{ $data->last_name }}
                            @else
                                <small>Dr.</small> {{ $data->first_name }} {{ $data->last_name }}
                            @endif
                        </td>
                        <!-- EMAIL -->
                        <td style="color: #00a5b3"><strong>{{ $data->email }}</strong></td>
                        <!-- CLINIC -->
                        <td>
                            <span class="label label-default"
                                  style="background: #000000 !important;opacity: 0.7">  {{ $data->clinic->name }} </span>
                        </td>
                        <!-- INTERACTIONS -->
                        <td class="hidden-print">
                            <div class="btn-group">
                                <button type="button" class="btn btn-squared btn-sm dropdown-toggle"
                                        style="background: #dddddd;opacity: 0.9" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Opções &nbsp;<span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                    <li><a href="{{ URL::route('dentists.show', $data->id) }}">
                                            <small><i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;Perfil</small>
                                        </a></li>
                                    <li><a href="{{ URL::route('dentists.edit', $data->id) }}">
                                            <small><i class="fa fa-pencil fa-fw"></i>&nbsp;&nbsp;Editar</small>
                                        </a></li>
                                    <li class="divider"></li>
                                    <li><a class="deleteDentist" href="#" data-id="{{ $data->id }}">
                                            <small><i class="fa fa-trash fa-fw"></i>&nbsp;&nbsp;Excluir</small>
                                        </a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php } } ?>
                    </tbody>
                    <!-- end: TABLE BODY -->

                </table>
                <!-- end: TABLE DISPLAYING DENTISTS -->

            </div>
            <!-- end: PANEL BODY -->

        </div>
        <!-- end: MAIN PANEL INFORMATION -->

    </div>
    <!-- end: CONTAINER -->

</div>
<!-- end: MAIN CONTENT -->

@endsection
