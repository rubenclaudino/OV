@extends('layouts.page')
@section('title', 'Financeiro')
@section('content')

    <!-- start: CONTAINER BOTH-->
    <div class="container hide">

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

                    <table class="table table-hover" style="font-size: 1.1em">

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

                    <table class="table table-hover" style="font-size: 1.1em">

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
    <!-- end: CONTAINER BOTH-->

    <!-- start: CONTAINER IN-->
    <div class="container hide">

        <!-- start: DIV -->
        <div style="margin: 15px 2px">

            <!-- start: PANEL -->
            <div class="panel">

                <!-- start: PANEL HEAD -->
                <div class="panel-head">

                    <div class="col-lg-3 col-md-3">

                        <h2 class="table_title">
                            Entradas<br>
                            <div class="input-group" style="padding: 10px 0px">
                                <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                <input type="text" class="form-control date-range">


                            </div>
                        </h2>

                    </div>

                    <div class="col-lg-9 col-md-9" style="margin-top: 30px">

                        <div class="pull-right">

                            <a class="btn" href="#" data-target="#myModal" data-toggle="modal"
                               style="background: whitesmoke">
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

                <div class="col-md-12" style="padding-left: 22px; margin-bottom: 10px; opacity: 0.8">
                    <h2 class="panel-title" style="color: #00a5b3; font-size: 1.6em">Pacientes <label class="label"
                                                                                                      style="color: forestgreen">
                            R$ 0</label></h2>
                </div>

                <!-- start: PANEL BODY -->
                <div class="panel-body">

                    <style>
                        .table th, .table td {
                            border-top: none !important;
                        }
                    </style>

                    <br>

                    <table class="table table-hover" style="font-size: 1.1em">

                        <thead style="background: whitesmoke">
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th>Data</th>
                            <th class="col-md-3">Paciente</th>
                            <th>Forma Pagamento</th>
                            <th class="col-md-1">Parcela</th>
                            <th class="col-md-1">Valor</th>
                            <th>Data Pago</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td class="hidden-print">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="#">
                                                <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-info fa-fw"></i> &nbsp;Detalhes</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-print fa-fw"></i> &nbsp;Imprimir Recibo</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-check fa-fw"></i> &nbsp;Marcar Pago</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-ban fa-fw"></i> &nbsp;Cancelar Pagamento</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody>

                    </table>

                </div>
                <!-- start: PANEL BODY -->

                <!-- SPLIT -->

                <div class="col-md-12" style="padding-left: 22px; opacity: 0.8">
                    <h2 class="panel-title" style="color: #00a5b3; font-size: 1.6em">Outros Rendimentos<label
                                class="label" style="color: forestgreen"> R$ 0</label></h2>
                </div>

                <!-- start: PANEL BODY -->
                <div class="panel-body">

                    <style>
                        .table th, .table td {
                            border-top: none !important;
                        }
                    </style>

                    <br>

                    <table class="table table-hover" style="font-size: 1.1em">

                        <thead style="background: whitesmoke">
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th>Data</th>
                            <th class="col-md-3">Descrição</th>
                            <th>Forma Pagamento</th>
                            <th class="col-md-1">Parcela</th>
                            <th class="col-md-1">Valor</th>
                            <th>Data Pago</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td class="hidden-print">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="#">
                                                <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-info fa-fw"></i> &nbsp;Detalhes</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-print fa-fw"></i> &nbsp;Imprimir Recibo</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-check fa-fw"></i> &nbsp;Marcar Pago</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-ban fa-fw"></i> &nbsp;Cancelar Pagamento</small>
                                            </a></li>
                                    </ul>
                                </div>
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
    <!-- end: CONTAINER IN-->

    <!-- start: CONTAINER OUT-->
    <div class="container">

        <!-- start: DIV -->
        <div style="margin: 15px 2px">

            <!-- start: PANEL -->
            <div class="panel">

                <!-- start: PANEL HEAD -->
                <div class="panel-head">

                    <div class="col-lg-3 col-md-3">

                        <h2 class="table_title">
                            Saídas<br>
                            <div class="input-group" style="padding: 10px 0px">
                                <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                <input type="text" class="form-control date-range">
                            </div>
                        </h2>

                    </div>

                    <div class="col-lg-9 col-md-9" style="margin-top: 30px">

                        <div class="pull-right">

                            <a class="btn" href="#" data-target="#myModal" data-toggle="modal"
                               style="background: whitesmoke">
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

                <div class="col-md-12" style="padding-left: 22px; margin-bottom: 10px; opacity: 0.8">
                    <h2 class="panel-title" style="color: #00a5b3; font-size: 1.6em">Despesas <label class="label"
                                                                                                     style="color: firebrick">
                            R$ 0</label></h2>
                </div>

                <!-- start: PANEL BODY -->
                <div class="panel-body">

                    <style>
                        .table th, .table td {
                            border-top: none !important;
                        }
                    </style>

                    <br>

                    <table class="table table-hover" style="font-size: 1.1em">

                        <thead style="background: whitesmoke">
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th>Data</th>
                            <th class="col-md-3">Descrição</th>
                            <th>Forma Pagamento</th>
                            <th class="col-md-1">Parcela</th>
                            <th class="col-md-1">Valor</th>
                            <th>Data Pago</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td class="hidden-print">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="#">
                                                <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-info fa-fw"></i> &nbsp;Detalhes</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-print fa-fw"></i> &nbsp;Imprimir Recibo</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-check fa-fw"></i> &nbsp;Marcar Pago</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-ban fa-fw"></i> &nbsp;Cancelar Pagamento</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody>

                    </table>

                </div>
                <!-- start: PANEL BODY -->

                <!-- SPLIT -->

                <div class="col-md-12" style="padding-left: 22px; opacity: 0.8">
                    <h2 class="panel-title" style="color: #00a5b3; font-size: 1.6em">Salários <label class="label"
                                                                                                     style="color: firebrick">
                            R$ 0</label></h2>
                </div>

                <!-- start: PANEL BODY -->
                <div class="panel-body">

                    <style>
                        .table th, .table td {
                            border-top: none !important;
                        }
                    </style>

                    <br>

                    <table class="table table-hover" style="font-size: 1.1em">

                        <thead style="background: whitesmoke">
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th>Data</th>
                            <th class="col-md-3">Descrição</th>
                            <th>Forma Pagamento</th>
                            <th class="col-md-1">Parcela</th>
                            <th class="col-md-1">Valor</th>
                            <th>Data Pago</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td class="hidden-print">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="#">
                                                <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-info fa-fw"></i> &nbsp;Detalhes</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-print fa-fw"></i> &nbsp;Imprimir Recibo</small>
                                            </a></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-check fa-fw"></i> &nbsp;Marcar Pago</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">
                                                <small><i class="fa fa-ban fa-fw"></i> &nbsp;Cancelar Pagamento</small>
                                            </a></li>
                                    </ul>
                                </div>
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
    <!-- end: CONTAINER OUT-->

    @include('modals.payment_consultation')
    @include('modals.payment_feedback')


@endsection
