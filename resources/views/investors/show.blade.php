@extends('layouts.page')
@section('content')

        <!-- start: MAIN CONTENT -->
<div class="main-content">

    <!-- start: CONTAINER -->
    <div class="container">

        <!-- start: INFORMATION -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-white"
             style="padding: 15px;margin-top: 15px;margin-bottom: 15px !important;">

            <!-- start: INFO -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row">

                    <!-- start: MAIN INFO TAB -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding"
                         style="border-radius: 3px;background:#fff;">

                        <!-- start: MAIN INFO -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                            <!-- start: QUICK INFO PANEL -->
                            <div class="panel panel-white">

                                <!-- start: NAME -->
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <h1 class="light_black"
                                        style="margin-top:10px;margin-bottom:5px;font-weight: lighter;opacity: 0.8;text-align:left;float:left;">
                                        {{ $user->name }}
                                        <small style="font-size: 50%;opacity: 0.4">( Investidor )</small>
                                        <br>
                                        <small style="font-size: 45%">Sociedade</small>
                                        <small style="font-size: 45%;color: #BBBBBB">{{-- $investor->percentage --}}
                                            &nbsp;%
                                        </small>
                                        <br>
                                        <small style="font-size: 45%">Capital Investido</small>
                                        <small style="font-size: 45%;color: #BBBBBB">
                                            R$ {{-- $investor->costs->where('type', 0)->where('investor_id',$investor->investor_id)->sum('value') --}}</small>
                                    </h1>
                                </div>
                                <!-- end: NAME -->

                            </div>
                            <!-- end: QUICK INFO PANEL -->

                        </div>
                        <!-- end: MAIN INFO -->

                    </div>
                    <!-- end: MAIN INFO TAB -->

                </div>
                <!-- end: INVESTOR INFO RIGHT -->

            </div>
            <!-- end: INFO -->

        </div>
        <!-- end: TAB CONTENT -->

        <!-- start: TAB TITLES -->
        <ul class="nav nav-tabs" style="font-size: 1.1em;border: none;margin-top: 100px">

            <!-- start: DETAILS -->
            <li class="active">
                <a data-toggle="tab" href="#details">
                    <strong>Geral</strong>
                </a>
            </li>
            <!-- end: DETAILS -->

            <!-- start: FINANCES -->
            <li>
                <a data-toggle="tab" href="#finances">
                    <strong>Financeiro</strong>
                </a>
            </li>
            <!-- end: FINANCES -->

        </ul>
        <!-- end: TAB TITLES -->

        <!-- start: TAB CONTENT -->
        <div class="tab-content panel" style="border: none;padding-bottom: 15px">
                        <!-- start: DETAILS -->
                        <div id="details" class="tab-pane fade active in">

                            <!-- start: MOD PATIENT -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_patient }}" aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width:{{ $investor->outlook->mod_patient }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_patient }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-user-circle-o fa-2x"></i>
                                    <h5 style="color: white">Módulo de Pacientes</h5>
                                </div>

                            </div>
                            <!-- end: MOD PATIENT -->

                            <!-- start: MOD CONSULTATION -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_consultation }}" aria-valuemin="0"
                                             aria-valuemax="100" style="width: {{ $investor->outlook->mod_consultation }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_consultation }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-building fa-2x"></i>
                                    <h5 style="color: white">Módulo de Consultaria</h5>
                                </div>

                            </div>
                            <!-- end: MOD CONSULTATION -->

                            <!-- start: MOD AGENDA -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_agenda }}" aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width: {{ $investor->outlook->mod_agenda }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_agenda }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-calendar fa-2x"></i>
                                    <h5 style="color: white">Módulo de Agenda</h5>
                                </div>

                            </div>
                            <!-- end: MOD AGENDA -->

                            <!-- start: MOD PROCEDURES -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_procedures }}" aria-valuemin="0"
                                             aria-valuemax="100" style="width: {{ $investor->outlook->mod_procedures }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_procedures }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-folder-o fa-2x"></i>
                                    <h5 style="color: white">Módulo de Procedimentos</h5>
                                </div>

                            </div>
                            <!-- end: MOD PROCEDURES -->

                            <!-- start: MOD CLASS -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_class }}" aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width: {{ $investor->outlook->mod_class }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_class }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-graduation-cap fa-2x"></i>
                                    <h5 style="color: white">Módulo de Escola</h5>
                                </div>

                            </div>
                            <!-- end: MOD CLASS -->

                            <!-- start: MOD DENTAL PLAN -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_dentalplan }}" aria-valuemin="0"
                                             aria-valuemax="100" style="width: {{ $investor->outlook->mod_dentalplan }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_dentalplan }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-id-card-o fa-2x"></i>
                                    <h5 style="color: white">Módulo de Convênios</h5>
                                </div>

                            </div>
                            <!-- end: MOD DENTAL PLAN -->

                            <div class="clearfix">&nbsp;</div>

                            <!-- start: MOD FINANCE -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_finance }}" aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width: {{ $investor->outlook->mod_finance }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_finance }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-money fa-2x"></i>
                                    <h5 style="color: white">Módulo de Finaneiro</h5>
                                </div>

                            </div>
                            <!-- end: MOD FINANCE -->

                            <!-- start: MOD MESSAGE -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_message }}" aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width: {{ $investor->outlook->mod_message }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_message }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-envelope-o fa-2x"></i>
                                    <h5 style="color: white">Módulo de Mensagens</h5>
                                </div>

                            </div>
                            <!-- end: MOD MESSAGE -->

                            <!-- start: MOD STOCK CONTROL -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_stockcontrol }}" aria-valuemin="0"
                                             aria-valuemax="100" style="width: {{ $investor->outlook->mod_stockcontrol }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_stockcontrol }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-archive fa-2x"></i>
                                    <h5 style="color: white">Módulo Controle de Estoque</h5>
                                </div>

                            </div>
                            <!-- end: MOD STOCK CONTROL -->

                            <!-- start: MOD USER -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_user }}" aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width: {{ $investor->outlook->mod_user }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_user }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-users fa-2x"></i>
                                    <h5 style="color: white">Módulo de Usuários</h5>
                                </div>

                            </div>
                            <!-- end: MOD USER -->

                            <!-- start: MOD REPORTS -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_reports }}" aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width: {{ $investor->outlook->mod_reports }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_reports }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-print fa-2x"></i>
                                    <h5 style="color: white">Módulo de Relatórios</h5>
                                </div>

                            </div>
                            <!-- end: MOD REPORTS -->

                            <!-- start: MOD ADMIN -->
                            <div class="col-md-2 col-lg-2">

                                <div class="panel-body panel-azure center" style="opacity: 0.7">
                                    <div class="progress progress-striped active" style="border-radius: 0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="{{ $investor->outlook->mod_admin }}" aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width: {{ $investor->outlook->mod_admin }}%">
                                            <span style="font-size: 10px">{{ $investor->outlook->mod_admin }} %</span>
                                        </div>
                                    </div>
                                    <i class="fa fa-cogs fa-2x"></i>
                                    <h5 style="color: white">Módulo de Administração</h5>
                                </div>

                            </div>
                            <!-- end: MOD ADMIN -->

                        </div>
                        <!-- end: DETAILS -->

                        <!-- start: FINANCES -->
                        <div id="finances" class="tab-pane fade" style="padding: 30px">

                            <div class="col-lg-6 col-md-6">

                                <table class="table table-hover table-striped ">

                                    <style>
                                        .table th, .table td {
                                            border: none !important;
                                        }
                                    </style>

                                    <thead>
                                    <tr style="background: lightskyblue;color: white">
                                        <th>Gastos</th>
                                        <th></th>
                                        <th>Total R$ {{ $investor->costs->where('type', 1)->sum('value')}}</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($investor->costs->sortByDesc('updated_at') as $cost)
                                        @if($cost->type == 1)
                                            <tr>
                                                <td>{{ $cost->description }}</td>
                                                <td>{{ $cost->updated_at->format('d/m/Y') }}</td>
                                                <td>R$ {{ $cost->value }}</td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    </tbody>

                                </table>

                            </div>

                            <div class="col-lg-1 col-md-1">

                            </div>

                            <div class="col-lg-6 col-md-6">

                                <table class="table table-hover table-striped">

                                    <style>
                                        .table th, .table td {
                                            border: none !important;
                                        }
                                    </style>

                                    <thead>
                                    <tr style="background: lightskyblue;color: white">
                                        <th>Pagamentos realizados por voce</th>
                                        <th></th>
                                        <th>Total
                                            R$ {{ $investor->costs->where('type', 0)->where('investor_id', $investor->investor_id)->sum('value')}}</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($investor->costs->where('investor_id', $investor->investor_id)->sortByDesc('updated_at') as $cost)
                                        @if($cost->type == 0)
                                            <tr>
                                                <td>{{ $cost->description }}</td>
                                                <td>{{ $cost->updated_at->format('d/m/Y') }}</td>
                                                <td>R$ {{ $cost->value }}</td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    </tbody>

                                </table>

                            </div>

                        </div>
                        <!-- end: FINANCES -->

                    </div>
                    <!-- end: TAB CONTENT -->

                </div>
                <!-- end: CLIENT INFORMATION -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
