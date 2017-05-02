@extends('layouts.page')
@section('content')

    <style>
        .image_cont {
            width: 30px;
            height: 30px;
            overflow: hidden;
        }

        .image_cont img {
            border-radius: 100px;
            width: 100%;
            height: auto;
        }
    </style>

    <div class="main-content">
        <div class="container" style="min-height: 580px">

            <!-- start: MAIN INFO PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">
                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">
                    <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;opacity:0.8;">
                        <div class="col-sm-6 hidden-xs">
                            <div class="table-header">
                                <h2 style="font-weight: lighter">{{ $title }}</h2>
                                <p style="font-size: large;">Busca de pacientes</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right" style="opacity: 1">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-filter"></i> Filtros
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

                <!-- start: PANEL BODY -->
                <div class="panel-body">

                    <!-- start: PATIENT TABLE -->
                    <table class="table  table-striped table-condensed datatable" id="mainInfo">

                        <!-- start: COLUMN INFORMATION -->
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th></th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Profissional</th>
                            <th>Especialidade</th>
                            <th>Tipo Plano</th>
                            <th></th>
                            <th class="hidden-print"></th>
                        </tr>
                        </thead>
                        <!-- end: COLUMN INFORMATION -->

                        <!-- start: ROW INFORMATION -->
                        <tbody>
                        <?php
                        if(!empty($patients)){
                        foreach($patients as $patient){
                        ?>
                        <tr>
                            <!-- ID -->
                            <td>{{ $patient->id }}</td>
                            <!-- PROFILE PICTURE -->
                            <td>
                                <div class="image_cont hidden-print" style="opacity: 0.8">
                                    @if($patient->patient_profile_image != '')
                                        {{ Html::image(url('/').'/'.$patient->patient_profile_image) }}
                                    @else
                                        @if($patient->gender == '1')
                                            {{ Html::image(url('/')."/images/user/female.png") }}
                                        @else
                                            {{ Html::image(url('/')."/images/user/male.png") }}
                                        @endif
                                    @endif
                                </div>
                            </td>
                            <!-- FULL NAME -->
                            <td>
                                {{ $patient->first_name }} {{ $patient->last_name }}
                            </td>
                            <!-- PHONE NUMBER -->
                            <td>{{ $patient->phone_1 }}</td>
                            <!-- PROFESSIONAL - DENTIST -->
                            <td>
                                @if(isset($patient->user))
                                    @if($patient->user->gender == 0)
                                        Dr.
                                    @else
                                        Dra.
                                    @endif
                                    {{ $patient->user->first_name }}
                                    {{ $patient->user->last_name }}
                                @else
                                    -
                                @endif
                            </td>
                            <!-- SPECIALTIES -->
                            <td>
                                @if($patient->speciality)
                                    @foreach($patient->speciality as $d)
                                        <label class="label label-warning"
                                               style="background: #{{$d->color_code}} !important;opacity: 0.7;">{{ $d->title }}</label>
                                    @endforeach
                                @else
                                    <label class="label label-warning"
                                           style="background: brown !important;opacity: 0.7;">Clínica Geral</label>
                                @endif
                            </td>
                            <!-- DENTAL PLAN -->
                            <td>
                                <small>
                                    <?php if ($patient->has_dental_plan == '1') {
                                        echo 'Convênio';
                                    } else {
                                        echo 'Particular';
                                    } ?>
                                </small>
                            </td>
                            <!-- VIP / WHEELCHAIR -->
                            <td>
                                @if($patient->vip == 1)<label class="label label-warning tooltips"
                                                           data-title="Paciente Importante" data-placement="bottom"
                                                           style="background: gold !important;opacity: 0.6;letter-spacing: 1px">VIP</label>@endif
                                @if($patient->wheel_chair == 1)<label class="label label-info tooltips hidden-print"
                                                                   data-title="Paciente Cadeirante"
                                                                   data-placement="bottom" style="opacity: 0.6;"><i
                                            class="fa fa-wheelchair"></i></label>@endif
                            </td>
                            <!-- OPTIONS -->
                            <td class="hidden-print">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-squared btn-sm dropdown-toggle"
                                            style="background: #dddddd;border-radius: 1px;opacity: 0.9"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="{{ URL::route('patients.show', $patient->id) }}">
                                                <small><i class="fa fa-user fa-fw"></i> &nbsp;Perfil</small>
                                            </a></li>
                                        <li><a href="{{ URL::route('patients.edit', $patient->id) }}">
                                                <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" data-id="{{ $patient->id }}" class="deletePatient">
                                                <small><i class="fa fa-ban fa-fw"></i> &nbsp;Excluír</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>

                    </table>
                    <!-- end: PATIENT TABLE -->

                </div>
                <!-- end: PANEL BODY -->

            </div>
            <!-- end: MAIN INFO PANEL -->


        </div>
    </div>
@endsection
