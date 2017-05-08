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
                                                @if($patient->patient_profile_image != '')
                                                    <img src="{{ url('/')}}/{{$patient->patient_profile_image }}"
                                                         alt="{{ $patient->first_name }} {{ $patient->last_name }}">
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

                                    <!-- start: PATIENT NAME -->
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <h2 class="light_black"
                                            style="margin-top:10px;margin-bottom:5px;font-weight: lighter;opacity: 0.8;text-align:left;float:left;">
                                            {{ $patient->first_name }} {{ $patient->last_name}}&nbsp;
                                        </h2>
                                        <!-- start: SPECIAL NOTATIONS -->
                                        @if($patient->vip == 1)<label class="label label-warning"
                                                                      style="opacity: 0.7;text-align:left;float:left;margin-top:18px;padding: 5px !important;margin-right: 5px">VIP</label>@endif
                                        @if($patient->wheel_chair == 1)<label class="label label-info"
                                                                              style="opacity: 0.7;text-align:left;float:left;margin-top:18px;padding: 5px !important;"><i
                                                    class="fa fa-wheelchair"></i></label>@endif
                                    <!-- end: SPECIAL NOTATIONS -->
                                    </div>
                                    <!-- end: PATIENT NAME -->

                                    <!-- start: PATIENT OPTIONS BUTTON -->
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                                        <div class="btn-group pull-right" style="margin-top:10px;">
                                            <button class="btn dropdown-toggle btn-primary" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                Opções &nbsp; <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ URL::route('patients.edit', $patient->id) }}"><i
                                                                class="fa fa-pencil fa-fw text-info"
                                                                style="color: #404040"></i>&nbsp;&nbsp;Editar</a></li>
                                                <li class="hide"><a href="#"><i class="fa fa-money fa-fw text-info"
                                                                                style="color: #404040"></i>&nbsp;
                                                        Pagamento</a></li>
                                                <li class="hide"><a href="#"><i class="fa fa-print fa-fw text-info"
                                                                                style="color: #404040"></i>&nbsp;
                                                        Imprimir</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end: PATIENT OPTIONS BUTTON -->

                                    <!-- start: PATIENT DATA -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <hr style="margin:4px 0 10px;">

                                        <!-- start: SPEACIAL TAGS INFO -->
                                        <p>
                                            @if($patient->specialty)
                                                @foreach($patient->specialty as $specialty)
                                                    <label class="label label-warning"
                                                           style="background: #{{ $specialty->color }} !important;opacity: 0.7;letter-spacing: 1px !important;">{{ $specialty->name }}</label>
                                                @endforeach
                                            @endif
                                        </p>
                                        <!-- start: SPEACIAL TAGS INFO -->

                                        <!-- start: AGE -->
                                        <h5>
                                            <i class="fa fa-birthday-cake fa-fw"></i>&nbsp;

                                        </h5>
                                        <!-- end: AGE -->

                                        <!-- start: ADDRESS -->
                                        <h5>
                                            @isset($patient->address)
                                            <i class="fa fa-map-marker fa-fw"></i>
                                            &nbsp;{{ $patient->address }} {{ $patient->street_number }}
                                            , {{ $patient->borough }} , {{ $patient->city }} {{ $patient->state }}
                                            @else
                                                <h5><i class="fa fa-map-marker fa-fw"></i> &nbsp; -</h5>
                                                @endisset
                                        </h5>
                                        <!-- end: ADDRESS -->

                                        <!-- start: PHONE -->
                                        <h5>
                                            @isset ($patient->phone_landline)
                                            <i class="fa fa-phone fa-fw"></i>&nbsp; {{ $patient->phone_landline }}
                                            &nbsp;@endisset
                                            @isset ($patient->phone_1)
                                            <i class="fa fa-mobile fa-fw"></i>&nbsp; {{ $patient->phone_1 }}
                                            @endisset
                                            @isset ($patient->whatsapp_number)
                                            <i class="fa fa-whatsapp fa-fw"></i>&nbsp; {{ $patient->whatsapp_number }}
                                            @endisset
                                        </h5>
                                        <!-- end: PHONE -->

                                    </div>
                                    <!-- end: PATIENT DATA -->

                                </div>
                                <!-- end: QUICK INFO PANEL -->

                            </div>
                            <!-- end: PATIENT MAIN INFO -->

                            <!-- start: QUICK STATS -->
                            <div class="col-lg-3 col-md-3" style="margin-top: 13px;opacity:1">

                     <span class="pull-right">

                          <!-- start: RELIABILITY -->
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white" style="padding:10px; margin-top: 5px; background: whitesmoke">
                              <i class="fa fa-check fa-fw"></i>
                               &nbsp;&nbsp;Confiabilidade
                              <span class="pull-right"
                                    style="padding-right: 10px"><strong>0  %</strong>
                              </span>
                        </div>
                     </div>
                         <!-- end: RELIABILITY -->

                         <!-- start: TOTAL RELIABILITY -->
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white" style="padding:10px; margin-top: 5px; background: whitesmoke">
                              <i class="fa fa-calendar fa-fw"></i>
                               &nbsp;&nbsp;Agendamentos
                              <span class="pull-right"
                                    style="padding-right: 10px"><strong>{{ count($appointments) }}</strong>
                              </span>
                        </div>
                     </div>
                         <!-- end: TOTAL APPOINTMENTS -->

                         <!-- start: TYPE PLAN -->
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white" style="padding:10px; margin-top: 5px; background: whitesmoke">
                               <i class="fa fa-folder-o fa-fw"></i>
                             &nbsp;@if($patient->has_dental_plan == 1)
                                Particular @endif
                            @if($patient->has_dental_plan == 0)Convênio @endif
                        </div>
                     </div>
                         <!-- end: TYPE PLAN -->

                         <!-- start: RANKING BETWEEN TREATMENTS -->
                         <!-- <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin-top: 7px">
                                <span class="pull-left">
                                </span>
                          </button> -->
                         <!-- end: RANKING BETWEEN TREATMENTS -->

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
            <!-- end: HEADER INFORMATION -->

            <!-- start: PATIENT INFORMATION -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <!-- start: ROW -->
                <div class="row">

                    <!-- start: TABS -->
                    <ul class="nav nav-tabs" style="font-size: 1.1em">
                        <li class="active">
                            <a data-toggle="tab" href="#personal_details">
                                <strong>Detalhes</strong>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#appointments">
                                <strong>Agendamentos</strong>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#exam">
                                <strong>Exames</strong>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#health">
                                <strong>Anamnese</strong>
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

                                    <table class="table" style="font-size:1.1em">

                                        <tbody>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px">
                                                Data de Nascimento
                                            </td>
                                            <td>
                                                @isset($patient->date_of_birth)
                                                {{ $patient->date_of_birth }}
                                                @else
                                                    -
                                                    @endisset
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px">
                                                CPF
                                            </td>
                                            <td>
                                                @isset($patient->CPF)
                                                {{ $patient->CPF }}
                                                @else
                                                    -
                                                    @endisset
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px">
                                                RG
                                            </td>
                                            <td>
                                                @isset($patient->RG)
                                                {{ $patient->RG }}
                                                @else
                                                    -
                                                    @endisset
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px">
                                                Profissão
                                            </td>
                                            <td>
                                                @isset($patient->profession)
                                                {{ $patient->profession }}
                                                @else
                                                    -
                                                    @endisset
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px">
                                                Estado Civil
                                            </td>
                                            <td>
                                                @isset($patient->maritial_status)
                                                {{ $patient->maritial_status }}
                                                @else
                                                    -
                                                    @endisset
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px">
                                                Email
                                            </td>
                                            <td>
                                                @isset($patient->email)
                                                {{ $patient->email }}
                                                @else
                                                    -
                                                    @endisset
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px">
                                                Nacionalidade
                                            </td>
                                            <td>
                                                @isset($patient->nationality)
                                                {{ $patient->nationality }}
                                                @else
                                                    -
                                                    @endisset
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>

                                </div>
                                <!-- end: LEFT SIDE INFO -->

                                <!-- start: RIGHT SIDE INFO -->
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                                    <!-- start: DENTAL PLAN INFO -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                        <div class="panel panel-white accepted_plan">

                                            <div class="panel-body" style="">

                                                <table class="table table-condensed" style="font-size:1.1em;">

                                                    <tbody>
                                                    <tr>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Convênio
                                                        </td>
                                                        <td>
                                                            -
                                                        </td>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Data de Exp.
                                                        </td>
                                                        <td>
                                                            @isset($patient->exp_date)
                                                            {{ $patient->exp_date }}
                                                            @else
                                                                -
                                                                @endisset
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Número Cartão
                                                        </td>
                                                        <td>
                                                            @isset($patient->card_number)
                                                            {{ $patient->card_number }}
                                                            @else
                                                                -
                                                                @endisset
                                                        </td>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Titular
                                                        </td>
                                                        <td>
                                                            @isset($patient->card_owner)
                                                            {{ $patient->card_owner }}
                                                            @else
                                                                -
                                                                @endisset
                                                        </td>
                                                    </tr>
                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- end: DENTAL PLAN INFO -->

                                    <!-- start: DEMOGRAPHICS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                        <div class="panel panel-white accepted_plan">

                                            <div class="panel-body">

                                                <table class="table table-condensed" style="font-size:1.1em;">

                                                    <tbody>
                                                    <tr>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Dentista
                                                        </td>
                                                        <td>
                                                            @if(isset($patient->user))
                                                                @if ($patient->user->gender == 0)
                                                                    <small>Dr.</small> @else
                                                                    <small>Dra.
                                                                    </small> @endif {{ $patient->user->first_name }} {{ $patient->user->last_name }}
                                                            @else
                                                                Clínica
                                                            @endif
                                                        </td>
                                                    <tr>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Indicação
                                                        </td>
                                                        <td>
                                                            @if(isset($patient->referral))
                                                                {{ $patient->referral->name }}
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- end: DEMOGRAPHICS -->

                                    <!-- start: CONTACTS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                        <div class="panel panel-white accepted_plan">

                                            <div class="panel-body">

                                                <table class="table table-condensed" style="font-size:1.1em">

                                                    <tbody>
                                                    <tr>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Contato 1
                                                        </td>
                                                        <td style="width: 25%">
                                                            @if(isset($patient->related_name_1))
                                                                {{ $patient->related_name_1 }}
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Telefone
                                                        </td>
                                                        <td style="width: 25%">
                                                            @if(isset($patient->related_phone_1))
                                                                {{ $patient->related_phone_1 }}
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-weight:bold;;width: 25%">
                                                            Contato 2
                                                        </td>
                                                        <td style="width: 25%">
                                                            @if(isset($patient->related_name_2))
                                                                {{ $patient->related_name_2 }}
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td style="font-weight:bold;width: 25%">
                                                            Telefone
                                                        </td>
                                                        <td style="width: 25%">
                                                            @if(isset($patient->related_phone_2))
                                                                {{ $patient->related_phone_2 }}
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
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

                            <table class="table table-striped table-hover" id="sample-table-2" style="font-size:1.1em">

                                <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Horário</th>
                                    <th>Dentista</th>
                                    <th>Especialidade</th>
                                    <th>Tipo</th>
                                    <th>Status</th>
                                    <th>R$</th>
                                    <th class="center"></th>
                                    <th class="center"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{ date('D d/m/y', strtotime($appointment->startdate)) }}</td>
                                        <td>{{ date('H:i', strtotime($appointment->starttime)) }}</td>
                                        <td>
                                            @if ($appointment->user->first()->gender == 0)
                                                <small>Dr.</small> @else
                                                <small>Dra.
                                                </small>
                                            @endif
                                            {{ $appointment->user->first()->first_name }} {{ $appointment->user->first()->last_name }}
                                        </td>
                                        <td style="font-size:0.9em">
                                            <label class="label label-warning"
                                                   style="background: #{{ $appointment->specialty->color }} !important;opacity: 0.7;letter-spacing: 1px !important;">{{ $appointment->specialty->name }}</label>
                                        </td>
                                        <td>
                                            {{ $appointment->type->name }}
                                        </td>
                                        <td>
                                            {{ $appointment->status->name }}
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td class="center">
                                            <i class="fa fa-calendar"></i>
                                        </td>
                                        <td class="center">
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

                        <!-- start: EXAMS -->
                        <div id="exam" class="tab-pane fade">

                            <ul id="Grid" class="list-unstyled">

                                <li style="display: inline-block;"
                                    class="col-md-3 col-sm-6 col-xs-12 mix category_1 gallery-img" data-cat="1">

                                    <div class="portfolio-item">
                                        <a class="thumb-info" href="images/patient_uploads/"
                                           data-lightbox="gallery" data-title="">
                                            <img src="images/patient_uploads/" class="img-responsive" alt="">
                                            <span class="thumb-info-title"></span>
                                        </a>
                                    </div>

                                </li>

                            </ul>

                        </div>
                        <!-- end: EXAMS -->

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
                                            <td>@if($patient->takes_drugs == 1) Sim @else Não @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Anomalias congénitas
                                            </td>
                                            <td>@if($patient->has_birth_defect == 1) Sim @else Não @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Estágio de desenvolvimento ósseo
                                            </td>
                                            <td>@if($patient->bone_dev_stage == 1) - @else - @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Utiliza algum anticoncepcional
                                            </td>
                                            <td>@if($patient->takes_birth_control_pills == 1) Sim @else Não @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Teve alguma operação grave
                                            </td>
                                            <td>@if($patient->had_previous_surgeries == 1) Sim @else Não @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Estado de Saúde
                                            </td>
                                            <td>@if($patient->current_health == 1) - @else - @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Biotipo
                                            </td>
                                            <td>
                                                DELETE ME - BODY TYPE
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Altura
                                            </td>
                                            <td>@if($patient->height){{ $patient->height }} Cm @else - @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Peso
                                            </td>
                                            <td>@if($patient->weight){{ $patient->weight }} Kg @else - @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Cadeirante
                                            </td>
                                            <td>@if($patient->wheel_chair == 1) Sim @else Não @endif</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- start: HEALTH CHECKLIST -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    @if(!empty($patient->diseases))
                                        @foreach($patient->diseases as $da)
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
                                                Duração do Tratamento
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                N&deg; Agendamentos
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                N&deg; Faltas
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                N&deg; de Recolagem do Braquete
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Valor Aparelho
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Manutenção
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Total de Manutenção
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Custo Reparo Negociado
                                            </td>
                                            <td style="font-size:1.1em">-</td>
                                        </tr>
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                                Total do Tratamento
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
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Data Início
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Razão do tratamento
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Nível de motivação
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Já usou aparelho antes
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Tipo Aparelho
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Especialista
                                                    </td>
                                                    <td style="font-size:1.1em">-</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;line-height:30px;font-size:1.1em;width:40%">
                                                        Status do Tratamento
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

                                <!-- start: BUTTON BEFORE AND AFTER -->
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 10px">
                                    <a href="#BnA" data-toggle="modal" class="demo btn btn-block btn-info btn-squared"
                                       style="border-radius:1px;opacity: 0.8">
                                        Antes & Depois
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 10px">
                                    <a href="#planingNotes" data-toggle="modal"
                                       class="btn btn-block btn-info btn-squared"
                                       style="border-radius:1px;opacity: 0.8">
                                        Planejamento
                                    </a>
                                </div>
                                <!-- end: BUTTON BEFORE AND AFTER -->

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

                                <!-- start: BUTTON BEFORE AND AFTER -->
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 10px">
                                    <a href="#BnA" data-toggle="modal" class="demo btn btn-block btn-info btn-squared"
                                       style="border-radius:1px;opacity: 0.8">
                                        Antes & Depois
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 10px">
                                    <a href="#planingNotes" data-toggle="modal"
                                       class="btn btn-block btn-info btn-squared"
                                       style="border-radius:1px;opacity: 0.8">
                                        Planejamento
                                    </a>
                                </div>
                                <!-- end: BUTTON BEFORE AND AFTER -->

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
                                            <td>
                                                {{ $patient->created_at }}
                                            </td>
                                        </tr>
                                        <!-- USER WHO REGISTERED PATIENT -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Cadastrado por
                                            </td>
                                            <td>
                                                -
                                            </td>
                                        </tr>
                                        <!-- APPOINTMENT COUNT -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                N&deg; Agendamentos
                                            </td>
                                            <td>
                                                {{ count($appointments)}}
                                            </td>
                                        </tr>
                                        <!-- APPOINTMENTS MISSED -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                N&deg; Faltas
                                            </td>
                                            <td>
                                                {{ count($appointments->where('appointment_status_id', 4)) }}
                                            </td>
                                        </tr>
                                        <!-- IS OUT PATIENT FOR X MANY DAYS -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                È nosso paciente á
                                            </td>
                                            <td>
                                                {{ $patient->created_at->diffForHumans() }}
                                            </td>
                                        </tr>
                                        <!-- DAYS TILL NEXT TEETH CLEANING PERMITTED -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Dias até próxima limpeza
                                            </td>
                                            <td>
                                                -
                                            </td>
                                        </tr>
                                        <!-- DAYS SINCE LAST APPOINTMENT -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">
                                                Ùltimo agendamento á
                                            </td>
                                            <td>
                                                {{ str_limit($appointments->max()->start,10) }}
                                            </td>
                                        </tr>
                                        <!-- MONEY EARNED FROM PATIENT -->
                                        <tr>
                                            <td style="color: #383838;font-weight:bold;line-height:30px;">Retorno
                                                Gerado
                                            </td>
                                            <td>
                                                -
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <div class="panel panel-white accepted_plan">

                                        <div class="panel-body">

                                            <!-- start: GRAPH 1 -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="convas-container">
                                                    <canvas id="treatment"></canvas>
                                                </div>
                                                <div id="js-legend1" class="chart-legend"></div>
                                                <hr style="color:#fff;">
                                            </div>
                                            <!-- end: GRAPH 1 -->

                                            <!-- start: GRAPH 2 -->
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
