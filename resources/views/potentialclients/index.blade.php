@extends('layouts.page')
@section('title', 'Lista de Potenciais Clientes')
@section('content')

    <!-- start: MAIN TABLE PANEL -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 15px">

        <!-- start: TABLE HEADER -->
        <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

            <div class="toolbar row" style="min-height: 100px;background: #f1f1f1;border: none;opacity:0.8;">

                <div class="col-sm-6 hidden-xs">

                    <div class="table-header">
                        <h2 style="font-weight: lighter;margin-top: 35px">Lista de Potenciais Clientes</h2>
                    </div>

                </div>

                <div class="col-sm-6 col-xs-12">

                    <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right" style="opacity: 1">
                            <li>
                                <a href="{{ URL::route('potentialclients.create') }}">
                                    <i class="fa fa-user"></i> Novo Cliente
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

        <!-- start: TABLE BODY -->
        <div class="panel-body">

            <div class="table-responsive">

                <!-- start: CONTACT TABLE DATA -->
                <table class="table datatable table-striped table-hover" id="mainInfo">
                    <thead>
                    <tr>
                        <th class="hide"></th>
                        <th>Nome</th>
                        <th class="hide">Razão Social</th>
                        <th>Telefone</th>
                        <th>Tipo</th>
                        <th>Usuários</th>
                        <th>Data de Visita</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($clients)){
                    foreach($clients as $data){
                    ?>
                    <tr>
                        <td class="hide">{{ $data->id }}</td>
                        <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                        <td class="hide">{{ $data->estab_name }}</td>
                        <td>{{ $data->contact->celular_1 }}</td>
                        <td>
                            <small>@if($data->estab_type == 1) Clínica @elseif($data->estab_type == 2)
                                    Ponto @else N/d @endif</small>
                        </td>
                        <td>{{ $data->estab_users }}</td>
                        <td>@if($data->estab_visit_date == 0000-00-00)
                                N/d @else {{  $data->estab_visit_date->format('d/m/Y') }} @endif</td>
                        <td style="opacity: 0.7">
                            @if($data->status == 0)
                                <label class="label" style="background: #3d3d3d">Não Informado</label>
                            @elseif($data->status == 1)
                                <label class="label" style="background: orange">Aguardando Contato</label>
                            @elseif($data->status == 2)
                                <label class="label" style="background: dodgerblue">Aguardando
                                    Lançamento</label>
                            @elseif($data->status == 3)
                                <label class="label" style="background: purple">Aguardando Visita</label>
                            @elseif($data->status == 4)
                                <label class="label" style="background: limegreen">Avaliando Proposta</label>
                            @elseif($data->status == 5)
                                <label class="label" style="background: darkred">Avaliando Opçoes</label>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group hidden-print">
                                <button type="button" class="btn btn-sm dropdown-toggle"
                                        style="background: #dddddd;opacity: 0.9" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Opções &nbsp;<span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                    <li><a href="{{ URL::route('potentialclients.edit', $data->id) }}">
                                            <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                        </a></li>
                                    <li><a href="{{ URL::route('potentialclients.show', $data->id) }}">
                                            <small><i class="fa fa-id-badge fa-fw"></i>&nbsp; Resumo</small>
                                        </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" class="deleteClient" data-id="{{$data->id}}">
                                            <small><i class="fa fa-ban fa-fw"></i>&nbsp Excluir</small>
                                        </a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php }} ?>
                    </tbody>
                </table>
                <!-- start: CONTACT TABLE DATA -->

            </div>

        </div>
        <!-- end: TABLE BODY -->

    </div>
    <!-- end: MAIN TABLE PANEL -->

@endsection
