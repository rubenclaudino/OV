@extends('layouts.page', ['title' => 'Pacientes', 'subtitle' => 'Informações dos Pacientes'])
@section('content')

    <style>
        .image_cont {
            width: 30px;
            height: 30px;
            overflow: hidden;
        }
    </style>

    <!-- start: MAIN CONTENT -->
    <div class="main-content" style="height: 580px">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: DIV -->
            <div style="margin: 15px 2px">

                <!-- start: PANEL -->
                <div class="panel">

                    <!-- start: PANEL HEAD -->
                    <div class="panel-head">

                        <div class="col-lg-12">
                            <br>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <h2 class="table_title">Pacientes<br>
                                <small style="color: #dddddd">Lista de pacientes</small>
                            </h2>
                        </div>

                        <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                            <div class="pull-right">

                                <a class="btn" href="#"
                                   style="background: whitesmoke">
                                    <i class="fa fa-filter"></i> Filtros
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

                        <!-- start: PATIENT TABLE -->
                        <table class="table table-hover table-condensed datatable" id="mainInfo">

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
                            <?php
                            if(!empty($patients)){
                            foreach($patients as $patient){
                            ?>
                            <tr>
                                <!-- ID -->
                                <td>{{ $patient->id }}</td>
                                <!-- PROFILE PICTURE -->
                                <td>
                                    <div class="image_cont hidden-print" style="opacity: 0.7">
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
                                <td>{{ $patient->phone_landline }}</td>
                                <td>{{ $patient->phone_1 }}</td>
                                <!-- PROFESSIONAL - DENTIST -->
                                <td>
                                    @if(isset($patient->user))
                                        {{ $patient->user->Fullname() }}
                                    @else
                                        Clínica
                                    @endif
                                </td>
                                <!-- SPECIALTIES -->
                                <td>
                                    @foreach($patient->specialties as $specialty)
                                        <label class="label label-warning"
                                               style="background: #{{$specialty->color}} !important;opacity: 0.7;">{{ $specialty->name }}</label>
                                    @endforeach
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
                                <td class="hidden">
                                    @if($patient->vip == 1)<label class="label label-warning tooltips"
                                                                  data-title="Paciente Importante"
                                                                  data-placement="bottom"
                                                                  style="background: gold !important;opacity: 0.6;letter-spacing: 1px">VIP</label>@endif
                                    @if($patient->wheel_chair == 1)<label class="label label-info tooltips hidden-print"
                                                                          data-title="Paciente Cadeirante"
                                                                          data-placement="bottom" style="opacity: 0.6;"><i
                                                class="fa fa-wheelchair"></i></label>@endif
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
                                            <li><a href="{{ URL::route('patients.show', $patient->id) }}">
                                                    <small><i class="fa fa-user fa-fw"></i> &nbsp;Perfil</small>
                                                </a></li>
                                            <li><a href="{{ URL::route('patients.edit', $patient->id) }}">
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
                            <?php } } ?>
                            </tbody>

                        </table>
                        <!-- end: PATIENT TABLE -->

                    </div>
                    <!-- end: PANEL BODY -->

                </div>
                <!-- end: PANEL -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
