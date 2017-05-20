@extends('layouts.page')
@section('title', 'Controle de Estoque')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

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

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

    <!-- start: CONSULTATION -->
    <div class="modal fade" id="myModal" role="dialog">

        <div class="modal-dialog modal-lg ">

            <!-- Modal content-->
            <div class="modal-content" style="border-radius: 1px">

                <div class="modal-header" style="background: whitesmoke">
                    <h3 class="modal-title">Consulta <br>
                        <small>Resumo da sua consulta</small>
                    </h3>
                </div>

                <div class="modal-body">

                    <!-- start: PROCESS STATUS -->
                    <div class="col-md-2" style="background: forestgreen; width: 20%; height: 45px; opacity: 0.50">
                        <h4 class="center" style="color: white">Avaliação <br>
                            <small style="color: whitesmoke">12 horas</small>
                        </h4>
                    </div>

                    <div class="col-md-2" style="background: goldenrod; width: 20%; height: 45px; opacity: 0.50">
                        <h4 class="center" style="color: white">Aprovação <br>
                            <small style="color: whitesmoke">4 horas</small>
                        </h4>
                    </div>

                    <div class="col-md-2" style="background: silver; width: 20%; height: 45px; opacity: 0.50">
                        <h4 class="center" style="color: white">Planejamento <br>
                            <small style="color: grey">0 horas</small>
                        </h4>
                    </div>

                    <div class="col-md-2" style="background: silver; width: 20%; height: 45px; opacity: 0.50">
                        <h4 class="center" style="color: white">Duvidas <br>
                            <small style="color: grey">0 horas</small>
                        </h4>
                    </div>

                    <div class="col-md-2" style="background: silver; width: 20%; height: 45px; opacity: 0.50">
                        <h4 class="center" style="color: white">Concluído <br>
                            <small style="color: grey">0 horas</small>
                        </h4>
                    </div>
                    <!-- end: PROCESS STATUS -->

                    <!-- start: FORM DATA SECTION -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: whitesmoke">

                        <table class="table" style="font-size:1.1em">

                            <style>
                                .table th, .table td {
                                    border-top: none !important;
                                }
                            </style>

                            <tbody>

                            <tr>
                                <td style="font-weight:bold;">
                                    Data início
                                </td>
                                <td>
                                    -
                                </td>
                                <td style="font-weight:bold;">
                                    Data Finalizado
                                </td>
                                <td>
                                    -
                                </td>
                                <td style="font-weight:bold;">
                                    Paciente
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>

                            <tr>
                                <td style="font-weight:bold;">
                                    Professor
                                </td>
                                <td>
                                    -
                                </td>
                                <td style="font-weight:bold;">
                                    Especialização
                                </td>
                                <td>
                                    -
                                </td>
                                <td style="font-weight:bold;">
                                    Idade
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>

                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td style="font-weight:bold;">
                                    Duração
                                </td>
                                <td>
                                    -
                                </td>
                                <td style="font-weight:bold;">
                                    Sexo
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>

                            </tbody>

                        </table>

                    </div>
                    <!-- end: FORM DATA SECTION -->

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 5px">
                        <button class="btn btn-primary">Texto</button>
                        <button class="btn btn-primary">Foto</button>
                        <button class="btn btn-primary">Anexo</button>
                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalrate">Interaction Button</button>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>

        </div>

    </div>
    <!-- end: CONSULTATION -->

    <!-- start: FEEDBACK MODAL -->
    <div class="modal fade" id="myModalrate" role="dialog">

        <div class="modal-dialog modal-xs">

            <!-- Modal content-->
            <div class="modal-content" style="border-radius: 1px">

                <div class="modal-header" style="background: whitesmoke">
                    <h2 class="modal-title center" style="font-weight: lighter">
                        FEEDBACK
                    </h2>
                </div>

                <div class="modal-body">

                    <p class="center" style="font-size: 1.5em">Gostariamos de saber se você gostou da sua resposta ?</p>

                    <br>

                    <div class="center">

                        <button type="button" class="btn btn-success" data-dismiss="modal" style="padding: 5px; width: 70px">Sim</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="padding: 5px; width: 70px">Não</button>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- end: FEEDBACK MODAL -->

@endsection
