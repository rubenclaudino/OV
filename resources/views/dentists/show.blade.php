@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content" ng-controller="PatientController">

        <!-- start: SUBVIEW -->
        <div class="subviews">
            <div class="subviews-container"></div>
        </div>
        <!-- start: END -->

        <!-- Start: CONTAINER -->
        <div class="container">

            <!-- start: HEADER INFORMATION -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;margin-bottom: 15px">
                <!-- start: 2st ROW -->
                <div class="row">

                    <!-- start: PATIENT INFO RIGHT -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-white">
                        <div class="row">

                            <!-- start: MAIN INFO TAB -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding"
                                 style="border-radius: 3px;background:#fff;">

                                <!-- start: PHOTO AREA -->
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 nopadding">
                                    <div class="center">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="user-image">
                                                <div class="fileupload-new thumbnail"
                                                     style="border: white 1px solid;border-radius: 1px;height: 165px;padding-top:15px">
                                                    @if($dentist->profile_url != '')
                                                        <img src="{{ url('/')}}/{{$dentist->profile_url }}"
                                                             alt="{{ $dentist->first_name }} {{ $dentist->last_name }}">
                                                    @else
                                                        <img src="http://placehold.it/130xx130"
                                                             style="border-radius:100px;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: PHOTO AREA -->

                                <!-- start: PATIENT MAIN INFO -->
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 nopadding">

                                    <!-- start: QUICK INFO PANEL -->
                                    <div class="panel panel-white">

                                        <!-- start: USER NAME -->
                                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

                                            <h2 class="light_black"
                                                style="margin-top:10px;margin-bottom:5px;font-weight: lighter;opacity: 0.8;text-align:left;float:left;">
                                                {{ $dentist->Fullname() }}
                                            </h2>

                                        </div>
                                        <!-- end: USER NAME -->

                                        <!-- start: DENTIST OPTIONS BUTTON -->
                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                                            <div class="btn-group pull-right" style="margin-top:10px;">
                                                <button class="btn dropdown-toggle btn-primary" data-toggle="dropdown"
                                                        aria-expanded="false">
                                                    Opções &nbsp; <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ URL::route('patients.edit', $dentist->id) }}"><i
                                                                    class="fa fa-pencil fa-fw text-info"
                                                                    style="color: #404040"></i>&nbsp;&nbsp;Editar</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-money fa-fw text-info"
                                                                       style="color: #404040"></i>&nbsp; Pagamento</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-print fa-fw text-info"
                                                                       style="color: #404040"></i>&nbsp; Imprimir</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end: DENTIS OPTIONS BUTTON -->

                                        <!-- start: DENTIST DATA -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <hr style="margin:4px 0 10px;">

                                            <!-- start: SPEACIAL TAGS INFO -->
                                            <p>
                                                @if($dentist->specialties)
                                                    @foreach($dentist->specialties as $specialty)
                                                        <label class="label label-warning"
                                                               style="background: #{{ $specialty->color }} !important;opacity: 0.7;letter-spacing: 1px !important;">{{ $specialty->name }}</label>
                                                    @endforeach
                                                @endif
                                            </p>
                                            <!-- start: SPEACIAL TAGS INFO -->

                                            <h5>
                                                <i class="fa fa-folder-o fa-fw"></i> &nbsp;
                                                -
                                            </h5>
                                            <h5>
                                                @if($dentist->phone_landline != null)<i
                                                        class="fa fa-phone fa-fw"></i>&nbsp;&nbsp;
                                                &nbsp;{{ $dentist->phone_landline }}&nbsp;&nbsp; @else  @endif

                                                @if($dentist->phone_1 != null)<i class="fa fa-mobile fa-fw"></i>
                                                &nbsp;&nbsp;&nbsp;{{ $dentist->phone_1 }}&nbsp;&nbsp; @endif

                                                @if($dentist->whatsapp_number != '')<i
                                                        class="fa fa-mobile fa-fw"></i>&nbsp;&nbsp;
                                                &nbsp;{{ $dentist->whatsapp_number }}&nbsp;&nbsp; @endif
                                            </h5>

                                        </div>
                                        <!-- end: DENTIST DATA -->

                                    </div>
                                    <!-- end: QUICK INFO PANEL -->

                                </div>
                                <!-- end: DENTIST MAIN INFO -->

                                <!-- start: QUICK STATS -->
                                <div class="col-lg-3 col-md-3" style="margin-top: 13px;opacity:1">

                     <span class="pull-right">

                     <!-- start: CRO -->
                     <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white" style="padding:10px; background: whitesmoke">
                              <i class="fa fa-user fa-fw"></i>
                               &nbsp;&nbsp;CRO
                              <span class="pull-right" style="padding-right: 10px"><strong>{{ $dentist->cro }}</strong></span>
                        </div>
                     </div>
                         <!-- end: CRO -->

                         <!-- start: BOOKINGS -->
                     <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white" style="padding:10px; margin-top: 5px; background: whitesmoke">
                              <i class="fa fa-calendar-o fa-fw"></i>
                               &nbsp;&nbsp;Agendamentos
                              <span class="pull-right"
                                    style="padding-right: 10px"><strong>{{ count($dentist->appointments)}}</strong></span>
                        </div>
                     </div>
                         <!-- end: BOOKINGS -->

                         <!-- start: CAPTIVE PATIENTS -->
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white" style="padding:10px; margin-top: 5px; background: whitesmoke">
                              <i class="fa fa-users fa-fw"></i>
                               &nbsp;&nbsp;Pacientes
                              <span class="pull-right"
                                    style="padding-right: 10px"><strong>{{ count($dentist->patients)}}</strong></span>
                        </div>
                     </div>
                         <!-- end: CAPTIVE PATIENTS -->

                  </span>

                                </div>
                                <!-- end: QUICK STATS -->

                            </div>
                            <!-- end: MAIN INFO TAB -->

                        </div>
                        <!-- end: PATIENT INFO RIGHT -->

                    </div>
                    <!-- end: 2st ROW -->

                </div>
            </div>
            <!-- end: HEADER INFORMATION -->

            <!-- start: PATIENT INFORMATION -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <!-- start: ROW -->
                <div class="row">

                    <!-- start: TABS -->
                    <ul class="nav nav-tabs" style="font-size: 1.1em">

                        <li class="active">
                            <a data-toggle="tab" href="#personal_details">
                                <strong>Geral</strong>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#appointments">
                                <strong>Agendamentos</strong>
                            </a>
                        </li>
                        <li class="hide">
                            <a data-toggle="tab" href="#financeiro">
                                <strong>Financeiro</strong>
                            </a>
                        </li>
                        <li class="hide">
                            <a data-toggle="tab" href="#orto">
                                <strong>Ortodontia</strong>
                            </a>
                        </li>
                        <li class="hide">
                            <a data-toggle="tab" href="#prosthesis">
                                <strong>Prótese</strong>
                            </a>
                        </li>
                        <li class="hide">
                            <a data-toggle="tab" href="#prosthesis">
                                <strong>Implantologia</strong>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#stats">
                                <strong>Estatísticas</strong>
                            </a>
                        </li>

                    </ul>
                    <!-- end: TABS -->

                    <!-- start: TAB CONTENT -->
                    <div class="tab-content panel" style="border-radius: 1px">

                        <!-- start: PERSONAL DETAILS -->
                        <div id="personal_details" class="tab-pane fade active in">

                            <!-- start: ROW -->
                            <div class="row" style="background:#fff;;padding: 15px">

                                <style>
                                    .table th, .table td {
                                        border-top: none !important;
                                    }
                                </style>

                                <!-- start: LEFT SIDE INFO -->
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Email
                                            </td>
                                            <td style="font-size:1.1em">{{ $dentist->email }}</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Data de Nascimento
                                            </td>
                                            <td style="font-size:1.1em">{{ $dentist->date_of_birth }}</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                CPF
                                            </td>
                                            <td style="font-size:1.1em">{{ $dentist->cpf }}</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                RG
                                            </td>
                                            <td style="font-size:1.1em">{{ $dentist->rg }}</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Nacionalidade
                                            </td>
                                            <td style="font-size:1.1em">{{ $dentist->nationality }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end: LEFT SIDE INFO -->

                                <!-- start: RIGHT SIDE INFO -->
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                                    <!-- start: ADDRESS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                        <div class="panel panel-white accepted_plan">

                                            <div class="panel-body" style="">

                                                <table class="table table-condensed ">

                                                    <tbody>

                                                    <tr>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">Rua /
                                                            Avendia
                                                        </td>
                                                        <td style="font-size:1.1em">@if( $dentist->street_address ) {{ $dentist->street_address }} @else
                                                                - @endif</td>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 15%">Número
                                                        </td>
                                                        <td style="font-size:1.1em">@if( $dentist->number ) {{ $dentist->number }} @else
                                                                - @endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">Bairro
                                                        </td>
                                                        <td style="font-size:1.1em">@if( $dentist->borough ) {{ $dentist->borough }} @else
                                                                - @endif</td>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 15%">CEP</td>
                                                        <td style="font-size:1.1em">@if( $dentist->zip_code ) {{ $dentist->zip_code }} @else
                                                                - @endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">Cidade
                                                        </td>
                                                        <td style="font-size:1.1em">@if( $dentist->city ) {{ $dentist->city }} @else
                                                                - @endif</td>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 15%">Estado
                                                        </td>
                                                        <td style="font-size:1.1em">@if( $dentist->state ) {{ $dentist->state }} @else
                                                                - @endif</td>
                                                    </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- end: ADDRESS -->

                                    <!-- start: CONTACTS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                        <div class="panel panel-white accepted_plan">

                                            <div class="panel-body" style="">

                                                <table class="table table-condensed ">

                                                    <tbody>

                                                    <tr>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">Contato
                                                            1
                                                        </td>
                                                        <td style="font-size:1.1em;width: 15%">@if( $dentist->ref1 ) {{ $dentist->ref1 }} @else
                                                                - @endif</td>
                                                        <td class="hidden-xs"
                                                            style="font-weight:bold;font-size:1.1em;width: 25%">Telefone
                                                        </td>
                                                        <td class="hidden-xs"
                                                            style="font-size:1.1em;width: 15%">@if( $dentist->ref_num1 ) {{ $dentist->ref_num1 }} @else
                                                                - @endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">Contato
                                                            2
                                                        </td>
                                                        <td style="font-size:1.1em;width: 15%">@if( $dentist->ref2 ) {{ $dentist->ref2 }} @else
                                                                - @endif</td>
                                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">
                                                            Telefone
                                                        </td>
                                                        <td class="hidden-xs"
                                                            style="font-size:1.1em;width: 15%">@if( $dentist->ref_num2 ) {{ $dentist->ref_num2 }} @else
                                                                - @endif</td>
                                                    </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- end: CONTACTS -->

                                </div>
                                <!-- end: RIGHT SIDE INFO -->

                            </div>
                            <!-- end: ROW -->

                        </div>
                        <!-- end: PERSONAL DETAILS -->

                        <!-- start: APPOINTMENTS -->
                        <div id="appointments" class="tab-pane fade"
                             style="overflow-x:auto;max-height:292px;padding: 30px;">

                            <table class="table table-striped table-hover" id="sample-table-2">

                                <thead>
                                <tr>
                                    <th style="font-size:1.1em">Data</th>
                                    <th class="hidden-xs" style="font-size:1.1em">Horário</th>
                                    <th class="hidden-xs" style="font-size:1.1em">Paciente</th>
                                    <th style="font-size:1.1em">Plano</th>
                                    <th style="font-size:1.1em">Especialidade</th>
                                    <th class="center" style="font-size:1.1em">Status</th>
                                    <th class="center hidden-xs" style="font-size:1.1em"></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($dentist->appointments as $appointment)
                                    <tr style="font-size:1.1em">
                                        <td>{{ date('D d/m/y', strtotime($appointment->startdate)) }}</td>
                                        <td>{{ date('H:i', strtotime($appointment->start)) }}</td>
                                        <td>{{ $appointment->patient->first_name }}  {{ $appointment->patient->last_name }}</td>
                                        <td>
                                            @if($appointment->dental_plan == 0)
                                                Convênio
                                            @elseif($appointment->dental_plan == 1)
                                                Particular
                                            @else
                                                Não Informado
                                            @endif
                                        </td>
                                        <td>{{ $appointment->specialty->name }}</td>
                                        <td class="center">
                                            @if( $appointment->status->id == 1 )
                                                <span class="label"
                                                      style="background: #5bc0de;opacity: 0.8">{{ $appointment->status->name }}</span>
                                            @elseif( $appointment->status->id == 2 )
                                                <span class="label"
                                                      style="background: #5cb85c;opacity: 0.8">{{ $appointment->status->name }}</span>
                                            @elseif( $appointment->status->id == 3 )
                                                <span class="label"
                                                      style="background: #f0ad4e;opacity: 0.8">{{ $appointment->status->name }}</span>
                                            @elseif( $appointment->status->id == 4 )
                                                <span class="label"
                                                      style="background: #d9534f;opacity: 0.8">{{ $appointment->status->name }}</span>
                                            @elseif( $appointment->status->id == 5 )
                                                <span class="label"
                                                      style="background: #5e5e5e;opacity: 0.8">{{ $appointment->status->name }}</span>
                                            @endif
                                        </td>
                                        <td class="center hidden-xs">
                                            <a>
                                                <i class="fa fa-info" data-text="{{$appointment->observation}}"
                                                   data-toggle="tooltip" data-placement="top"
                                                   title="{{$appointment->observation}}">

                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>

                        </div>
                        <!-- end: APPOINTMENTS -->

                        <!-- start: FINANCEIRO -->
                        <div id="financeiro" class="tab-pane fade">

                            <!-- start: ROW -->
                            <div class="row" style="background:#fff;padding: 18px">

                                <style>
                                    .table th, .table td {
                                        border-top: none !important;
                                    }
                                </style>

                                <!-- start: LEFTSIDE -->
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                                    <!-- start: TABLE -->
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em;width:60%">
                                                Tipo Contrato
                                            </td>
                                            <td style="font-size:1.1em">@if($dentist->resident_in_clinic == 1)
                                                    Alugel @else Porcentagem @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em;width:60%">
                                                Alugel Negociado
                                            </td>
                                            <td style="font-size:1.1em">R$ {{ $dentist->rent_neg }}</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Comissão negociada
                                            </td>
                                            <td style="font-size:1.1em">{{ $dentist->earn_percentage }} %</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Média Salarial
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Valor a Receber
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Particular
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Convênio
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Retorno Total
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- end: TABLE -->

                                </div>
                                <!-- end: LEFTSIDE -->

                                <!-- start: RIGHTSIDE -->
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                                    <!-- start: PANEL -->
                                    <div class="panel panel-white accepted_plan">

                                        <!-- start: PANEL BODY -->
                                        <div class="panel-body" style="">

                                            <style>
                                                .table th, .table td {
                                                    border-top: none !important;
                                                }
                                            </style>

                                            <!-- start: TABLE -->
                                            <table class="table">

                                                <tbody>

                                                <th style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                    Exceções de comissões
                                                </th>
                                                <tr>
                                                    <td style="line-height:30px;font-size:1.1em;max-width:10%">
                                                        -
                                                    </td>
                                                    <td style="font-size:1.1em">
                                                        {{ count($dentist->dentistpercentages)}}
                                                    </td>
                                                </tr>

                                                </tbody>

                                            </table>
                                            <!-- end: TABLE -->

                                        </div>
                                        <!-- end: PANEL BODY -->

                                    </div>
                                    <!-- end: PANEL -->

                                </div>
                                <!-- end: RIGHTSIDE -->

                            </div>
                            <!-- end: ROW -->

                        </div>
                        <!-- end: FINANCEIRO -->

                        <!-- start: HEALTH TAB -->
                        <div id="health" class="tab-pane fade">
                            <div class="row" style="background:#fff;padding: 18px">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <table class="table table-striped" style="font-size:1.1em;">
                                        <tbody>
                                        <tr>
                                            <td style="color: #3d3d3d;font-weight:bold;line-height:30px;">
                                                Está tomando medicamentos
                                            </td>
                                            <td>@if($dentist->take_drugs == 1) Sim @else Não @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Anomalias congénitas
                                            </td>
                                            <td>@if($dentist->has_birth_defect == 1) Sim @else Não @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Estágio de desenvolvimento ósseo
                                            </td>
                                            <td>@if($dentist->bone_dev_stage == 1) - @else - @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Utiliza algum anticoncepcional
                                            </td>
                                            <td>@if($dentist->take_preg_pills == 1) Sim @else Não @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Teve alguma operação grave
                                            </td>
                                            <td>@if($dentist->has_prev_surgeries == 1) Sim @else Não @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Estado de Saúde
                                            </td>
                                            <td>@if($dentist->current_health == 1) - @else - @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Biotipo
                                            </td>
                                            <td>
                                                -
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Altura
                                            </td>
                                            <td>@if($dentist->height){{ $dentist->height }} Cm @else - @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Peso
                                            </td>
                                            <td>@if($dentist->weight){{ $dentist->weight }} Kg @else - @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Cadeirante
                                            </td>
                                            <td>@if($dentist->wheel_chair == 1) Sim @else Não @endif</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- start: HEALTH CHECKLIST -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    @if(!empty($dentist->diseases))
                                        @foreach($dentist->diseases as $da)
                                            <label style="padding:7px 10px;background: whitesmoke;margin: 5px 10px"><strong>{{ $da->title }}</strong></label>
                                        @endforeach
                                    @endif
                                </div>
                                <!-- end: HEALTH CHECKLIST -->

                            </div>
                        </div>
                        <!-- end: HEALTH TAB -->

                        <!-- start: ORTO TAB -->
                        <div id="orto" class="tab-pane fade">

                            <!-- start: ROW -->
                            <div class="row" style="background:#fff;padding: 18px">

                                <style>
                                    .table th, .table td {
                                        border-top: none !important;
                                    }
                                </style>

                                <!-- start: LEFTSIDE -->
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                                    <!-- start: TABLE -->
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em;width:60%">
                                                Numero de Agendamentos
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                N&deg; Pacientes
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                N&deg; Pacientes Ativos
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                % Cotações fechadas
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Comissão Negociada
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Valor Manutenção
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Retorno Total
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- end: TABLE -->

                                </div>
                                <!-- end: LEFTSIDE -->

                                <!-- start: RIGHTSIDE -->
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                                    <!-- start: PANEL -->
                                    <div class="panel panel-white accepted_plan">

                                        <!-- start: PANEL BODY -->
                                        <div class="panel-body" style="">

                                            <style>
                                                .table th, .table td {
                                                    border-top: none !important;
                                                }
                                            </style>

                                            <!-- start: TABLE -->
                                            <table class="table">
                                                <tbody>
                                                <tr style="">
                                                    <td class="col-md-3"
                                                        style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Média de atendimentos por semana
                                                    </td>
                                                    <td class="col-md-3" style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3"
                                                        style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Média de atendimentos por Mês
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Média de tempo por atendimento
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                            <!-- end: TABLE -->

                                        </div>
                                        <!-- end: PANEL BODY -->

                                    </div>
                                    <!-- end: PANEL -->

                                </div>
                                <!-- end: RIGHTSIDE -->

                            </div>
                            <!-- end: ROW -->

                        </div>
                        <!-- end: ORTO TAB -->

                        <!-- start: PROT TAB -->
                        <div id="prosthesis" class="tab-pane fade">

                            <!-- start: ROW -->
                            <div class="row" style="background:#fff;">

                                <style>
                                    .table th, .table td {
                                        border-top: none !important;
                                    }
                                </style>

                                <!-- start: LEFTSIDE -->
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                                    <!-- start: TABLE -->
                                    <table class="table table-condensed">
                                        <tbody>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                Data de fixação
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Tipo de Cimento
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Tipo de Prótese
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Região do Implante
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Material usado
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Total do tratamento
                                            </td>
                                            <td style="font-size:1.1em">
                                                <strong>-</strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- end: TABLE -->

                                </div>
                                <!-- end: LEFTSIDE -->

                                <!-- start: RIGHTSIDE -->
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                                    <!-- start: PANEL -->
                                    <div class="panel panel-white accepted_plan">
                                        <div class="panel-body">

                                            <style>
                                                .table th, .table td {
                                                    border-top: none !important;
                                                }
                                            </style>

                                            <!-- start: TABLE -->
                                            <table class="table table-condensed">
                                                <tbody>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Já usou Prótese antes
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em">
                                                        Razão do tratamento
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em">
                                                        Limitações
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em">
                                                        Especialista
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em">
                                                        Status do Tratamento
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- end: TABLE -->

                                        </div>
                                    </div>
                                    <!-- end: PANEL -->

                                </div>
                                <!-- end: RIGHTSIDE -->

                            </div>
                            <!-- end: ROW -->

                        </div>
                        <!-- end: PROSTH TAB -->

                        <!-- start: STATS -->
                        <div id="stats" class="tab-pane fade">

                            <!-- start: ROW -->
                            <div class="row" style="background:#fff;">

                                <style>
                                    .table th, .table td {
                                        border-top: none !important;
                                    }
                                </style>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 25px;">
                                    <table class="table table-condensed" style="font-size:1.1em">
                                        <tbody>
                                        <!-- DATE REGISTERED -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Data Cadastrado
                                            </td>
                                            <td>{{ date('d/m/y', strtotime($appointment->created_at)) }}</td>
                                        </tr>
                                        <!-- APPOINTMENT COUNT -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                N&deg; Agendamentos
                                            </td>
                                            <td>{{ count($dentist->appointments)}}</td>
                                        </tr>
                                        <!-- NUMBER OF CATIVE PATIENTS -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                N&deg; Pacientes
                                            </td>
                                            <td>{{ count($dentist->patients)}}</td>
                                        </tr>
                                        <!-- % QUOTES CLOSED -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Avaliações Fechadas
                                            </td>
                                            <td>-</td>
                                        </tr>
                                        <!-- AVG DAILY APPS -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Med. Atendimentos / dia
                                            </td>
                                            <td>-</td>
                                        </tr>
                                        <!-- AVG WEEKLY APPS -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Med. Atendimentos / semana
                                            </td>
                                            <td>-</td>
                                        </tr>
                                        <!-- AVG MONTHLY APPS -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Med. Atendimentos / mês
                                            </td>
                                            <td>-</td>
                                        </tr>
                                        <!-- AVG APPOINTMENT DURATION -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Med. Duração de atendimento
                                            </td>
                                            <td>-</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="panel panel-white accepted_plan">
                                        <div class="panel-body">

                                            <!-- start: GRAPH 1 PERCENTAGE SPECIALTYS -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="convas-container">
                                                    <canvas id="treatment"></canvas>
                                                </div>
                                                <div id="js-legend1" class="chart-legend"></div>
                                                <hr style="color:#fff;">
                                            </div>
                                            <!-- end: GRAPH 1 -->

                                            <!-- start: GRAPH 2 PRIVATE TO PUBLIC-->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="convas-container">
                                                    <canvas id="dplan"></canvas>
                                                </div>
                                                <div id="js-legend2" class="chart-legend">

                                                </div>
                                            </div>
                                            <!-- end: GRAPH 2 -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: ROW -->

                        </div>
                        <!-- end: STATS -->

                    </div>
                    <!-- end: TAB CONTENT -->

                </div>
                <!-- end: ROW -->

            </div>
            <!-- end: PATIENT INFORMATION -->

            <!-- start: MODAL -->
            <div id="appointment_modal" style="display:none;">
                <div class="col-md-12">
                    <h3>Appointment Details
                        <button class="btn btn-primary pull-right close_subview"><i class="fa fa-times"></i></button>
                    </h3>
                    <hr>
                    <table class="table">
                        <tr>
                            <td>#</td>
                            <td>{! myData.patient.id !}</td>
                        </tr>
                        <tr>
                            <td>Patient Name</td>
                            <td>{! myData.patient.patient.first_name !} {! myData.patient.patient.last_name !}</td>
                        </tr>
                        <tr>
                            <td>Dentist Name</td>
                            <td>{! myData.patient.dentist[0].first_name !} {! myData.patient.dentist[0].last_name !}
                            </td>
                        </tr>
                        <tr>
                            <td>Appointment Observation</td>
                            <td>{! myData.patient.appointment_observation !}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- end: MODAL -->

        </div>
        <!-- end: MAIN CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
