@extends('layouts.page')
@section('title')
    Clinic: {{$clinic->name}}
@endsection
@section('content')

    <!-- start: HEADER INFORMATION NEW-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;margin-bottom: 15px">

        <!-- start: 1st ROW -->
        <div class="row">

            <!-- start: CLINIC INFO RIGHT -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-white">

                <!-- start: MAIN INFO TAB -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding"
                     style="border-radius: 3px;background:#fff;">

                    <!-- start: CLINIC MAIN INFO -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">

                        <!-- start: QUICK INFO PANEL -->
                        <div class="panel panel-white">

                            <!-- start: CLINIC NAME -->
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

                                <h2 class="light_black"
                                    style="margin-top:10px;margin-bottom:5px;font-weight: lighter;opacity: 0.8;text-align:left;float:left;">
                                    {{ $clinic->name }}&nbsp;
                                    <small>({{ $clinic->owner_name }})</small>
                                </h2>

                            </div>
                            <!-- end: CLINIC NAME -->

                            <!-- start: CLINIC BUTTON -->
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

                                <a style="margin-top: 10px;" class="btn btn-primary"
                                   href="{{ URL::route('clinic.edit', $clinic->id) }}">
                                    Editar
                                </a>

                            </div>
                            <!-- end: CLINIC BUTTON -->

                            <!-- start: CLINIC DATA -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <hr style="margin:4px 0 10px;">

                                <!-- start: ADDRESS -->
                                <h5>
                                    @isset($clinic->address)
                                    <i class="fa fa-map-marker fa-fw"></i>
                                    &nbsp;{{ $clinic->address }} {{ $clinic->street_number }}
                                    , {{ $clinic->borough }}
                                    , {{ $clinic[$clinic->city_id] }} {{ $clinic[$clinic->state_id] }}
                                    @else
                                        <h5><i class="fa fa-map-marker fa-fw"></i> &nbsp; -</h5>
                                        @endisset
                                </h5>
                                <!-- end: ADDRESS -->

                                <!-- start: PHONE -->
                                <h5>
                                    @isset ($clinic->phone_landline)
                                    <i class="fa fa-phone fa-fw"></i>&nbsp; {{ $clinic->phone_landline }}
                                    &nbsp;@endisset
                                    @isset ($clinic->phone_1)
                                    <i class="fa fa-mobile fa-fw"></i>&nbsp; {{ $clinic->phone_1 }}
                                    @else
                                        <i class="fa fa-mobile fa-fw"></i> &nbsp; -
                                        @endisset
                                        @isset ($clinic->whatsapp_number)
                                        <i class="fa fa-whatsapp fa-fw"></i>
                                        &nbsp; {{ $clinic->whatsapp_number }}
                                        @endisset
                                </h5>
                                <!-- end: PHONE -->

                                <!-- start: ADDRESS -->
                                <h5>

                                </h5>
                                <!-- end: ADDRESS -->

                            </div>
                            <!-- end: CLINIC DATA -->

                        </div>
                        <!-- end: QUICK INFO PANEL -->

                    </div>
                    <!-- end: PATIENT MAIN INFO -->

                    <!-- start: QUICK STATS -->
                    <div class="col-lg-3 col-md-3" style="margin-top: 13px;opacity:1">

                        <!-- start: PATIENTS WHO HAVE THIS CLINIC -->
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white"
                                 style="padding:10px; margin-top: 0px; background: whitesmoke">
                                <i class="fa fa-users fa-fw"></i>
                                &nbsp;&nbsp;Pacientes
                                <span class="pull-right"
                                      style="padding-right: 10px"><strong>{{ count($clinic->patients) }}</strong>
                              </span>
                            </div>
                        </div>
                        <!-- end: PATIENTS WHO HAVE THIS CLINIC -->

                        <!-- start: TOTAL APPOINTMENTS FOR THIS CLINIC -->
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white"
                                 style="padding:10px; margin-top: 5px; background: whitesmoke">
                                <i class="fa fa-calendar-o fa-fw"></i>
                                &nbsp;&nbsp;Agendamentos
                                <span class="pull-right"
                                      style="padding-right: 10px"><strong>{{ count($clinic->appointments) }}</strong>
                              </span>
                            </div>
                        </div>
                        <!-- end: TOTAL APPOINTMENTS FOR THIS CLINIC -->

                        <!-- start: RANKING COMPARED TO OTHER CLINICS -->
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white"
                                 style="padding:10px; margin-top: 5px; background: whitesmoke">
                                <i class="fa fa-line-chart fa-fw"></i>
                                &nbsp;Ranking
                                <span class="pull-right"
                                      style="padding-right: 10px"><strong>  0  </strong>  de  <strong> 0 </strong></span>
                            </div>
                        </div>
                        <!-- end: RANKING COMPARED TO OTHER CLINICS -->

                    </div>

                </div>
                <!-- end: MAIN INFO TAB -->

            </div>
            <!-- end: CLINIC INFO RIGHT -->

        </div>
        <!-- end: 1st ROW -->

    </div>
    <!-- end: HEADER INFORMATION -->

    <!-- start: INFORMATION BELOW DIV -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <!-- start: ROW -->
        <div class="row">

            <!-- start: TAB TITLES -->
            <ul class="nav nav-tabs" style="font-size: 1.1em">
                <li class="active">
                    <a data-toggle="tab" href="#details">
                        <strong>Detalhes</strong>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#appointments">
                        <strong>Agendamentos</strong>
                    </a>
                </li>
                <li class="hide">
                    <a data-toggle="tab" href="#finances">
                        <strong>Financeiro</strong>
                    </a>
                </li>
            </ul>
            <!-- end: TAB TITLES -->

            <!-- start: TAB CONTENT -->
            <div class="tab-content panel">

                <!-- start: GENERAL INFO -->
                <div id="details" class="tab-pane fade active in">

                    <div class="row" style="background:#fff;padding: 15px">

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <table class="table table-condensed" style="font-size:1.1em">

                                <style>
                                    .table th, .table td {
                                        border-top: none !important;
                                    }
                                </style>

                                <tbody>

                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Data Registrado
                                    </td>
                                    <td>{{ $clinic->created_at }}</td>
                                </tr>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Média de agendamentos diário
                                    </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Média de agendamentos semanal
                                    </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Média de agendamentos mensal
                                    </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Porcentagem da Renda Total
                                    </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Porcentagem de todos agendamentos
                                    </td>
                                    <td>-</td>
                                </tr>

                                </tbody>

                            </table>

                        </div>

                        <!-- start: DENTISTS APPOINTMENTS COUNT -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <table class="table table-condensed table-hover" style="font-size: 1.1em">

                                <thead style="background: whitesmoke">
                                <tr>
                                    <th>
                                        Dentista
                                    </th>
                                    <th>
                                        Agendamentos
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>

                        </div>
                        <!-- end: DENTISTS APPOINTMENTS COUNT -->

                    </div>

                </div>
                <!-- start: GENERAL INFO -->

                <!-- start: APPOINTMENTS INFO -->
                <div id="appointments" class="tab-pane fade">

                    <table class="table table-hover" style="font-size: 1.1em">

                        <thead style="background: whitesmoke">
                        <tr>
                            <th class="col-md-1">Data</th>
                            <th class="col-md-1">Horário</th>
                            <th class="col-md-2">Dentista</th>
                            <th class="col-md-3">Paciente</th>
                            <th class="col-md-3">Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($clinic->appointments as $appointment)
                            <tr>
                                <td>{{ date('d/m/y', strtotime($appointment->startdate)) }}</td>
                                <td>{{ date('H:i', $appointment->starttimestamp) }}</td>
                                <td> {{ $appointment->user->getFullNameAttribute() }}</td>
                                <td>{{ $appointment->patient->first_name }}  {{ $appointment->patient->last_name }}</td>
                                <td>
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
                                    @elseif( $appointment->status->id == 6 )
                                        <span class="label"
                                              style="background: #20124d;opacity: 0.8">{{ $appointment->status->name }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
                <!-- end: APPOINTMENTS INFO -->

                <!-- start: FINANCAL INFO -->
                <div id="finances hide" class="tab-pane fade">

                    <div class="row" style="background:#fff;">

                        <style>
                            .table th, .table td {
                                border-top: none !important;
                            }
                        </style>

                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding: 25px">

                            <table class="table table-condensed" style="font-size:1.1em">

                                <tbody>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Média diária
                                    </td>
                                    <td>R$ 0</td>
                                </tr>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Média semanal
                                    </td>
                                    <td>R$ 0</td>
                                </tr>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px">
                                        Média mensal
                                    </td>
                                    <td>R$ 0</td>
                                </tr>
                                <tr>
                                    <td style="color: #383838;font-weight:bold;line-height:30px;">
                                        Retorno Total
                                    </td>
                                    <td>-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                            <div class="panel panel-white accepted_plan">
                                <div class="panel-body">
                                    <div class="convas-container">
                                        <canvas id="treatment"></canvas>
                                    </div>
                                    <div id="js-legend1" class="chart-legend"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                            <div class="panel panel-white accepted_plan">
                                <div class="panel-body">
                                    <div class="convas-container">
                                        <canvas id="treatment"></canvas>
                                    </div>
                                    <div id="js-legend1" class="chart-legend"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end: FINANCAL INFO -->
            </div>
            <!-- end: TAB CONTENT -->
        </div>
        <!-- start: ROW -->
    </div>
    <!-- end: INFORMATION BELOW DIV -->

@endsection
