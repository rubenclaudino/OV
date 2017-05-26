@extends('layouts.page')
@section('title', 'Procedimentos')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-6 col-md-6">

                    <h2 class="table_title">Procedimentos<br>
                        <small style="color: #bbbbbb">Lista de procedimentos</small>
                    </h2>

                </div>

                <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                    <div class="pull-right">

                        <a class="btn" href="{{ URL::route('procedures.create') }}"
                           style="background: whitesmoke">
                            <i class="fa fa-user fa-fw"></i> Novo Procedimento
                        </a>

                        <a class="btn" href="#" class="print" data-id="mainInfo" style="background: whitesmoke">
                            <i class="fa fa-print fa-fw"></i> Imprimir
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

            <!-- start: PANEL BODY -->
            <div class="panel-body" id="mainInfo">

                <!-- start: PROCEDURE TABLE DATA -->
                <table class="table table-hover table-responsive">

                    <thead style="background: whitesmoke">
                    <tr>
                        <th class="hide">#</th>
                        <th>Procedimento</th>
                        <th>Especialidade</th>
                        @role('admin' == false)
                        <th>Valor</th>
                        <th class="hide">% Pago</th>
                        <th>N° Executado</th>
                        <th>Código TISS</th>
                        @endrole
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($procedures as $procedure)
                        <tbody>
                        <tr>
                            <!-- PROCEDURE CODE -->
                            <td>{{ $procedure->procedure_code }}</td>
                            <!-- TITLE -->
                            <td>{{ $procedure->name }}</td>
                            <!-- SPECIALTY -->
                            <td>
                                    <span class="label label-default"
                                          style="@if($procedure->specialties != '')background:{{ $procedure->specialties }} !important @endif;opacity: 0.8">{{ $procedure->specialties->name }}</span>
                            </td>
                        @role('admin' == false)
                            <!-- PRICE -->
                            <td>R$ {{ $procedure->price }}</td>
                            <!-- PERCENTAGE -->
                            <td class="hide">{{ $procedure->default_percentage }}&nbsp;%</td>
                            <!-- TIMES PRATICISED -->
                            <td>0</td>
                            <!-- TISS -->
                            <td>
                                <small>{{ $procedure->tuss_code }}</small>
                            </td>
                        @endrole
                            <!-- INTERACTIONS -->
                            <td>
                                <div class="btn-group hidden-print">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                            style="opacity: 0.9" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="{{ URL::route('procedures.show', $procedure->id) }}">
                                                <small><i class="fa fa-info fa-fw"></i>&nbsp; Editar</small>
                                            </a></li>
                                        <li><a href="{{ URL::route('procedures.edit', $procedure->id) }}">
                                                <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" class="deleteProcedure" data-id="{{$procedure->id}}">
                                                <small><i class="fa fa-ban fa-fw"></i>&nbsp Excluir</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <!-- start: PROCEDURE TABLE DATA -->

            </div>
            <!-- end: PANEL BODY -->

        </div>
        <!-- end: PANEL -->

    </div>
    <!-- end: DIV -->

@endsection
