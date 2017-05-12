@extends('layouts.page')
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

                            <h2 class="table_title">
                                Financeiro<br>
                                <small style="color: #dddddd">Visual informações de pagamentos</small>
                            </h2>

                        </div>

                        <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                            <div class="pull-right">

                                <a class="btn" href="{{ url('/dentalplans/create') }}" style="background: whitesmoke">
                                    Entradas
                                </a>

                                <a class="btn" href="{{ url('/dentalplans/create') }}" style="background: whitesmoke">
                                    Saídas
                                </a>

                                <a class="btn" href="{{ url('/dentalplans/create') }}" style="background: whitesmoke">
                                    Fluxo
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

                    <div class="col-md-12" style="padding-left: 22px; margin-bottom: 10px">
                        <h2 class="panel-title" style="color: #00a5b3; font-size: 1.6em">Entradas</h2>
                    </div>

                    <!-- start: PANEL BODY -->
                    <div class="panel-body">

                        <style>
                            .table th, .table td {
                                border-top: none !important;
                            }
                        </style>

                        <br>

                        <table class="table table-hover">

                            <thead style="background: whitesmoke">
                            <tr>
                                <th class="col-md-3">Categoria</th>
                                <th class="col-md-3">Recibido</th>
                                <th class="col-md-3">À receber</th>
                                <th class="col-md-3">Total</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="col-md-3">
                                    Pacientes
                                </td>
                                <td class="col-md-3" style="color: forestgreen">
                                    R$ 2860
                                </td>
                                <td class="col-md-3">
                                    R$ 820
                                </td>
                                <td class="col-md-3" style="color: forestgreen">
                                    R$ 2040
                                </td>
                            </tr>
                            <tr>
                            <td>
                                Comissões
                            </td>
                            <td style="color: forestgreen">
                                R$ 1000
                            </td>
                            <td>
                                R$ 0
                            </td>
                            <td style="color: forestgreen">
                                R$ 1000
                            </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right; font-weight: bold; color: #3d3d3d">
                                    Total
                                </td>
                                <td colspan="1" style="text-align: left;">
                                    <span class="label" style="background: forestgreen">R$ 3040</span>
                                </td>
                            </tr>
                            </tbody>

                        </table>

                    </div>
                    <!-- start: PANEL BODY -->

                    <!-- SPLIT -->

                    <div class="col-md-12" style="padding-left: 22px">
                        <h2 class="panel-title" style="color: #00a5b3; font-size: 1.6em">Saídas</h2>
                    </div>

                    <!-- start: PANEL BODY -->
                    <div class="panel-body" style="margin-bottom: 0px; padding-bottom: 0px">

                        <style>
                            .table th, .table td {
                                border-top: none !important;
                            }
                        </style>

                        <br>

                        <table class="table table-hover">

                            <thead style="background: whitesmoke">
                            <tr>
                                <th class="col-md-3">Categoria</th>
                                <th class="col-md-3">Pago</th>
                                <th class="col-md-3">À pagar</th>
                                <th class="col-md-3">Total</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="col-md-3">
                                    Salários
                                </td>
                                <td class="col-md-3" style="color: darkred">
                                    R$ 2860
                                </td>
                                <td class="col-md-3">
                                    R$ 820
                                </td>
                                <td class="col-md-3" style="color: darkred">
                                    R$ 2040
                                </td>
                            </tr>
                            <tr>
                                <td class="col-md-3">
                                    Material
                                </td>
                                <td class="col-md-3" style="color: darkred">
                                    R$ 1000
                                </td>
                                <td class="col-md-3">
                                    R$ 0
                                </td>
                                <td class="col-md-3" style="color: darkred">
                                    R$ 1000
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right; font-weight: bold; color: #3d3d3d">
                                    Total
                                </td>
                                <td colspan="1" style="text-align: left">
                                    <span class="label" style="background: darkred">R$ 1000</span>
                                </td>
                            </tr>
                            </tbody>

                        </table>

                    </div>
                    <!-- start: PANEL BODY -->

                    <!-- start: PANEL BODY -->
                    <div class="panel-body" style="margin-top: 0px; padding-top: 0px">

                        <style>
                            .table th, .table td {
                                border-top: none !important;
                                border-bottom: none !important;
                            }
                        </style>

                        <br>

                        <table class="table table-hover">

                            <thead style="background: whitesmoke">
                            <tr>
                                <th class="col-md-3" rowspan="2"></th>
                                <th class="col-md-3">Entradas</th>
                                <th class="col-md-3">Saídas</th>
                                <th class="col-md-3">Total</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="col-md-3">
                                    <h2 class="panel-title" style="color: #00a5b3; font-size: 1.6em">Saldo Final</h2>
                                </td>
                                <td class="col-md-3" style="color: forestgreen">
                                    R$ 2860
                                </td>
                                <td class="col-md-3" style="color: darkred">
                                    R$ 1000
                                </td>
                                <td class="col-md-3" style="color: darkred">
                                    R$ 820
                                </td>
                            </tr>
                            </tbody>

                        </table>

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
                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalrate">
                            Interaction Button
                        </button>
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

                        <button type="button" class="btn btn-success" data-dismiss="modal"
                                style="padding: 5px; width: 70px">Sim
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"
                                style="padding: 5px; width: 70px">Não
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- end: FEEDBACK MODAL -->

@endsection
