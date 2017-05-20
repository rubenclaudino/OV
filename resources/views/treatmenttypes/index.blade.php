@extends('layouts.page')
@section('title', 'Procedimentos')
@section('content')

    <!-- start: MAIN INFORMATION PANEL -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

        <!-- start: TABLE HEADER -->
        <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

            <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;">

                <div class="col-sm-6 hidden-xs">

                    <div class="table-header">
                        <h2 style="font-weight: lighter">Procedimentos</h2>
                        <p style="font-size: large">Visualização de todos procedimentos</p>
                    </div>

                </div>

                <div class="col-sm-6 col-xs-12">

                    <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
                            <?php $user = Auth::user();if($user->isAdmin()){ ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-briefcase"></i> Procedimento
                                </a>

                            </li>
                            <?php } ?>
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

            <!-- start: TABLE DISPLAYING TREATMENTS -->
            <table class="table table-striped table-responsive table-hover datatable" id="mainInfo">

                <!-- start: COLUMN INFO -->
                <thead>
                <tr>
                    <th class="hide">#</th>
                    <th>Procedimento</th>
                    <th>Especialidade</th>
                    <th>Valor</th>
                    <th class="hide">% Pago</th>
                    <th>N° Executado</th>
                    <th>Código TISS</th>
                    <th></th>
                </tr>
                </thead>
                <!-- end: COLUMN INFO -->

                <!-- start: ROW INFO -->
                <tbody>
                <?php
                if(!empty($treatments)){
                $i = 1;
                foreach($treatments as $data){
                ?>
                <tr>
                    <!-- ID -->
                    <td class="hide">{{ $i }}<?php $i++;?></td>
                    <!-- TITLE -->
                    <td>{{ $data->name }}</td>
                    <!-- SPECIALTY -->
                    <td>
                                    <span class="label label-default"
                                          style="@if($data->color != '')background:#{{$data->color}} !important @endif;opacity: 0.8">{{$data->name }}</span>
                    </td>
                    <!-- PRICE -->
                    <td>R$ {{ $data->price }}</td>
                    <!-- PERCENTAGE -->
                    <td class="hide">{{ $data->default_percentage }}&nbsp;%</td>
                    <!-- TIMES PRATICISED -->
                    <td>0</td>
                    <!-- TISS -->
                    <td>
                        <small>{{ $data->tuss_code }}</small>
                    </td>
                    <!-- INTERACTIONS -->
                    <td>
                        <div class="btn-group hidden-print">
                            <button type="button" class="btn btn-white btn-squared btn-sm dropdown-toggle"
                                    style="background: white;opacity: 0.9" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                Opções &nbsp;<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                <li><a href="{{ url('/treatmenttypes')}}/{{$data->id}}" data-id="{{$data->id}}">
                                        <small><i class="fa fa-folder-o fa-fw"></i> &nbsp;Perfil</small>
                                    </a></li>
                                <li><a href="{{ url('/treatmenttypes')}}/{{ $data->id}}/edit"
                                       data-id="{{$data->id}}">
                                        <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                    </a></li>

                                <?php if($user->isAdmin()){ ?>
                                <li class="divider"></li>
                                <li><a href="#" data-id="{{ $data->id }}">
                                        <small><i class="fa fa-trash fa-fw"></i> &nbsp;Excluir</small>
                                    </a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php } } ?>
                </tbody>
                <!-- end: ROW INFO -->

            </table>
            <!-- end: TABLE-->

        </div>
        <!-- end: PANEL BODY -->

    </div>
    <!-- end: MAIN INFORMATION PANEL -->


@endsection
