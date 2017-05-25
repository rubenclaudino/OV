@extends('layouts.page')
@section('title', 'Pacientes')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-6 col-md-6">
                    <h2 class="table_title">Pacientes<br>
                        <small style="color: #dddddd">Lista de pacientes</small>
                    </h2>
                </div>

                <div class="col-lg-6 col-md-6" style="margin-top: 30px">
                    <div class="pull-right">

                        <a class="btn" href="{{ route('patients.create') }}"
                           style="background: whitesmoke">
                            <i class="fa fa-user fa-fw"></i> Novo Paciente
                        </a>

                        <a class="btn" href="#"
                           style="background: whitesmoke">
                            <i class="fa fa-filter fa-fw"></i> Filtros
                        </a>

                        <a class="btn" href="#" class="print" data-id="mainInfo" style="background: whitesmoke">
                            <i class="fa fa-print fa-fw"></i> Imprimir
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: PANEL HEAD -->

            <br><br><br><br><br>

            <!-- start: PANEL BODY -->
            <div class="panel-body">

                <!-- start: PATIENT TABLE -->
                <table class="table table-hover table-condensed" id="mainInfo">

                    <!-- start: COLUMN INFORMATION -->
                    <thead style="background: whitesmoke">
                    <tr>
                        <th>Id</th>
                        <th></th>
                        <th>Nome</th>
                        <th colspan="2">Telefone</th>
                        <th>Dentista</th>
                        <th>Especialidade</th>
                        <th>Plano</th>
                        <th class="hidden"></th>
                        <th class="hidden-print"></th>
                    </tr>
                    </thead>
                    <!-- end: COLUMN INFORMATION -->

                    <!-- start: ROW INFORMATION -->
                    <tbody>

                    @if(!empty($patients))
                        @foreach($patients as $patient)

                            <tr>
                                <!-- ID -->
                                <td>{{ $patient->id }}</td>
                                <!-- PROFILE PICTURE -->
                                <td>
                                    <div class="hidden-print">
                                        @if($patient->patient_profile_image != '')
                                            {{ Html::image(url('/' . $patient->patient_profile_image), '', ['width' => 30, 'height' => 30]) }}
                                        @else
                                            @if($patient->gender == '1')
                                                {{ Html::image(url('/images/user/female.png'), '', ['width' => 30, 'height' => 30]) }}
                                            @else
                                                {{ Html::image(url('/images/user/male.png'), '', ['width' => 30, 'height' => 30]) }}
                                            @endif
                                        @endif
                                    </div>
                                </td>
                                <!-- FULL NAME -->
                                <td>
                                    {{ $patient->first_name }} {{ $patient->last_name }}
                                </td>
                                <!-- PHONE NUMBER -->
                                <td>{{ $patient->phone_landline }}</td>
                                <td>{{ $patient->phone_1 }}</td>
                                <!-- PROFESSIONAL - DENTIST -->
                                <td>
                                    @if(isset($patient->user))
                                        {{ $patient->user->fullName }}
                                    @else
                                        Clínica
                                    @endif
                                </td>
                                <!-- SPECIALITIES -->
                                <td>
                                    @foreach($patient->specialities as $specialty)
                                        <label class="label"
                                               style="background: {{$specialty->color}};opacity:0.7">{{ $specialty->name }}</label>
                                    @endforeach
                                </td>
                                <!-- DENTAL PLAN -->
                                <td>
                                    @if(count($patient->patient_dental_plans))
                                        {{ $patient->patient_dental_plans->clinic_dental_plan->title }}
                                    @else
                                        Particular
                                    @endif
                                </td>
                            <!-- start: OPTIONS -->
                                <td class="hidden-print">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                                style="background: #dddddd;border-radius: 1px;opacity: 0.9"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opções &nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                            <li><a href="{{ route('patients.show', $patient->id) }}">
                                                    <small><i class="fa fa-user fa-fw"></i> &nbsp;Perfil</small>
                                                </a></li>
                                            <li><a href="{{ route('patients.edit', $patient->id) }}">
                                                    <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" data-id="{{ $patient->id }}" class="deletePatient">
                                                    <small><i class="fa fa-ban fa-fw"></i> &nbsp;Excluir</small>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                                <!-- end: OPTIONS -->

                            </tr>
                        @endforeach

                    @endif

                    </tbody>

                </table>
                <!-- end: PATIENT TABLE -->

            </div>
            <!-- end: PANEL BODY -->

        </div>
        <!-- end: PANEL -->

    </div>
    <!-- end: DIV -->

@endsection