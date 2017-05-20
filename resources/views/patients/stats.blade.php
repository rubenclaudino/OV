@extends('layouts.dashboard')
@section('content')

    <!-- start: MAIN INFO PANEL -->
    <div class="row" style="margin-top: 10px;opacity: 0.8">

        <!-- start : PATIENTS REGISTERED -->
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
            <div class="panel partition-green" style="text-align: center;padding: 10px">
                <h4>Pacientes</h4>
                <h1>{{ $patients['count'] }}</h1>
                <p>Cadastrados</p>
            </div>
        </div>
        <!-- start : PATIENTS REGISTERED -->

        <!-- start : PATIENTS INACTIVE -->
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
            <div class="panel partition-green" style="text-align: center;padding: 10px">
                <h4>Pacientes</h4>
                <h1>0</h1>
                <p>Inativos</p>
            </div>
        </div>
        <!-- end : PATIENTS INACTIVE -->

        <!-- start : AVG AGE BASE -->
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
            <div class="panel partition-green" style="text-align: center;padding: 10px">
                <h4>Idade</h4>
                <h1>0</h1>
                <p>Média</p>
            </div>
        </div>
        <!-- end : AVG AGE BASE -->

        <!-- start : MONTHLY AVG PATIENTS SEEN -->
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
            <div class="panel partition-green" style="text-align: center;padding: 10px">
                <h4>Pacientes</h4>
                <h1>0</h1>
                <p>Média / Mês</p>
            </div>
        </div>
        <!-- end : MONTHLY AVG PATIENTS SEEN -->

        <!-- start : DENTAL PLAN PATIENTS -->
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
            <div class="panel partition-green" style="text-align: center;padding: 10px">
                <h4>Pacientes</h4>
                <h1>{{ $patients['insuredPlan'] }}</h1>
                <p>Com Convênios</p>
            </div>
        </div>
        <!-- end : DENTAL PLAN PATIENTS -->

        <!-- start : PRIVATE PATIENTS -->
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
            <div class="panel partition-green" style="text-align: center;padding: 10px">
                <h4>Pacientes</h4>
                <h1>{{ $patients['privatePlan'] }}</h1>
                <p>Particular</p>
            </div>
        </div>
        <!-- end : PRIVATE PATIENTS -->

        <div class="clearfix"></div>

        <!-- start : NEW PATIENTS -->
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalSecondRow">
                <div class="panel-heading border-light">
                    <h5 style="margin-bottom:0;">Pacientes Novos</h5>
                </div>
                <div class="panel-body">
                    <div class="convas-container">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- end : NEW PATIENTS -->

        <!-- start : PATIENTS BOOKED PER MONTH -->
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalSecondRow">
                <div class="panel-heading border-light">
                    <h5 style="margin-bottom:0;">Pacientes Atendidos</h5>
                </div>
                <div class="panel-body" style="width:100%">
                    <div class="convas-container">
                        <canvas id="canvas1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- end : PATIENTS BOOKED PER MONTH -->

    </div>
    <!-- end: MAIN INFO PANEL -->

@endsection

@section('extra_scripts')
    @include('patients.partials.scripts')
@endsection