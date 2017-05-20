@extends('layouts.page')
@section('title', 'Controle de Estoque')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-6 col-md-6">

                    <h2 class="table_title">Consultas<br>
                        <small style="color: #dddddd">Histórico de Consultas</small>
                    </h2>

                </div>

                <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                    <div class="pull-right">

                        <a class="btn" href="{{ url('/dentalplans/create') }}" style="background: whitesmoke">
                            <i class="fa fa-comments"></i> Consultar
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

            <!-- start: PANEL BODY -->
            <div class="panel-body">

                <!-- start: TABLE -->
                <table class="table table-hover table-responsive" id="mainInfo">

                    <!-- start: COLUMN INFO -->
                    <thead style="background: whitesmoke">
                    <tr>
                        <th>Prot.</th>
                        <th>Data início</th>
                        <th>Data Finalizado</th>
                        <th>Duração</th>
                        <th>Paciente</th>
                        <th>Especialidade</th>
                        <th>Professor</th>
                        <th></th>
                        <th>Status</th>
                        <th class="col-md-1 hidden-print"></th>
                    </tr>
                    </thead>
                    <!-- end: COLUMN INFO -->

                    <!-- start: ROW INFO -->
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>17/01/2017</td>
                        <td>18/01/2017</td>
                        <td>1 dia</td>
                        <td>Joao Pessoa</td>
                        <td>Ortodontia</td>
                        <td>Prof. Ed</td>
                        <td><a href="#" data-toggle="modal" data-target="#myModal"><i
                                        class="fa fa-search fa-lg"></i></a></td>
                        <td>
                            @if(1 == 1 || 2 == 2 || 3 == 3 || 4 == 4)
                                <span class="label label-default"
                                      style="background:orange !important;opacity: 0.7">Avaliação</span>
                            @elseif(2 == 2)
                                <span class="label label-default"
                                      style="background:orange !important;opacity: 0.7">Aprovação</span>
                            @elseif(3 == 3)
                                <span class="label label-default"
                                      style="background:orange !important;opacity: 0.7">Planejamento</span>
                            @elseif(4 == 4)
                                <span class="label label-default"
                                      style="background:orange !important;opacity: 0.7">Duvidas</span>
                            @elseif(5 == 5)
                                <span class="label label-default"
                                      style="background:green !important;opacity: 0.7">Concluído</span>
                            @elseif(6 == 6)
                                <span class="label label-default"
                                      style="background:red !important;opacity: 0.7">Concluído</span>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                    <!-- end: ROW INFO -->
                </table>
                <!-- end: TABLE -->
            </div>
            <!-- start: PANEL BODY -->
        </div>
        <!-- end: PANEL -->
    </div>
    <!-- end: DIV -->

    @include('modals.consultation')
    @include('modals.feedback')

@endsection
