@extends('layouts.dashboard')
@section('title', 'Home')
@section('content')

    <div class="main-content">

        <div class="container" style="opacity: 0.7">

            <!-- start: USER WIDGETS -->
            <div class="row" style="margin-top: 10px;margin-right: -5px">

                <!-- start: APPOINTMENTS BOOKED TODAY FOR THIS USER-->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendamentos</h4>
                        <h1>{{$appointments->where('user_id', Auth::user()->id)->where('created_at', '>=', Carbon\Carbon::today())->count()}}</h1>
                        <p>Hoje</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED TODAY FOR THIS USER-->

                <!-- end: APPOINTMENTS BOOKED YESTERDAY -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendamentos</h4>
                        <h1>{{$appointments->where('user_id', Auth::user()->id)->where('created_at', '>=', Carbon\Carbon::yesterday())->where('created_at', '<', Carbon\Carbon::today())->count()}}</h1>
                        <p>Ontem</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED YESTERDAY -->

                <!-- start: APPOINTMENTS BOOKED THIS WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendamentos</h4>
                        <h1>{{$appointments->where('user_id', Auth::user()->id)->where('created_at', '>=', Carbon\Carbon::today()->subDay()->startOfWeek())->count()}}</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED THIS WEEK -->

                <!-- start: APPOINTMENTS BOOKED LAST WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendamentos</h4>
                        <h1>{{$appointments->where('user_id', Auth::user()->id)->where('created_at', '>=', Carbon\Carbon::today()->subDay()->startOfWeek()->subWeek(1))->where('created_at', '<', Carbon\Carbon::today()->subDay()->startOfWeek())->count()}}</h1>
                        <p>Semana passada</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED LAST WEEK -->

                <!-- start: PATIENTS CONFIRMED THIS WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Confirmados</h4>
                        <h1>{{ $appointments->where('user_id', Auth::user()->id)->where('start', '>=', Carbon\Carbon::today()->subDay()->startOfWeek())->where('appointment_status_id', 2)->count() }}</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end: PATIENTS CONFIRMED THIS WEEK -->

                <!-- start: PATIENTS CANCELLED THIS WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Desmarcados</h4>
                        <h1>{{ $appointments->where('user_id', Auth::user()->id)->where('start', '>=', Carbon\Carbon::today()->subDay()->startOfWeek())->where('appointment_status_id', 3)->count() }}</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end: PATIENTS CANCELLED THIS WEEK -->

                <!-- start: DENTAL PLAN PATIENTS RATIO -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-white" style="text-align: center;padding: 10px">
                        <h4>Convênio</h4>
                        <h1>0</h1>
                        <p>-</p>
                    </div>
                </div>
                <!-- end: DENTAL PLAN PATIENTS RATIO -->

                <!-- start: NON DENTAL PLAN PATIENTS RATIO -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-white" style="text-align: center;padding: 10px">
                        <h4>Particular</h4>
                        <h1>0</h1>
                        <p>-</p>
                    </div>
                </div>
                <!-- end: NON DENTAL PLAN PATIENTS RATIO -->

                <!-- start : CAPTIVE PATIENTS -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-white" style="text-align: center;padding: 10px">
                        <h4>Você tem</h4>
                        <h1>{{ $patients->where('user_id', Auth::user()->id)->count() }}</h1>
                        <p>pacientes cativos</p>
                    </div>
                </div>
                <!-- end : CAPTIVE PATIENTS -->

                <!-- start : BEST MONTH FOR HOLIDAYS -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding hide">
                    <div class="panel partition-white" style="text-align: center;padding: 10px">
                        <h4>Melhor mês para ferias</h4>
                        <h1>...</h1>
                        <p>-</p>
                    </div>
                </div>
                <!-- end : BEST MONTH FOR HOLIDAYS -->

                <!-- start : EARNING AMOUNT BETWEEN PRIVATE AND DENTAL PLANS BY MONTH -->
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding hide">
                    <div class="panel panel-white equalSecondRow">
                        <div class="panel-heading border-light">
                            <h5 style="margin-bottom:0;">Renda (Convênio X Particular)</h5>
                        </div>
                        <div class="panel-body" style="width:100%">
                            <div class="convas-container">
                                <canvas id="canvas1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end : EARNING AMOUNT BETWEEN PRIVATE AND DENTAL PLANS BY MONTH -->

                <!-- start : PATIENT FLUXATION BY MONTH (PRIVATE AND DENTAL PLAN)-->
                <div class="col-md-7 col-lg-8 col-sm-12 col-xs-12 nopadding hide">
                    <div class="panel panel-white equalThisRow">
                        <div class="panel-heading border-light">
                            <h5 style="margin-bottom:0;">Fluxo de Pacientes (Convênio X Particular)</h5>
                        </div>
                        <div class="panel-body">
                            <div class="convas-container">
                                <canvas id="canvas2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end : PATIENT FLUXATION BY MONTH (PRIVATE AND DENTAL PLAN)-->

                <!-- start : PATIENTS BOOKED PER MONTH -->
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding hide">
                    <div class="panel panel-white equalSecondRow">
                        <div class="panel-heading border-light">
                            <h5 style="margin-bottom:0;">Fluxo de Pacientes</h5>
                        </div>
                        <div class="panel-body">
                            <div class="convas-container">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end : PATIENTS BOOKED PER MONTH -->

            </div>
            <!-- end: USER WIDGETS -->

        @role('local_admin')
        <!-- start: CLINIC ADMIN WIDGETS -->
            <div class="row" style="margin-top: 10px;margin-right: -5px;">

                <!-- start:  -->
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
                    <div class="panel" style="text-align: center; padding-bottom: 2px;padding-top: 0.5px">
                        <h3 style="color: #3d3d3d">Dados relacionados á clínica</h3>
                    </div>
                </div>
                <!-- end:  -->

                <!-- start: BOOKED TODAY -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>{{$clinic->appointments->where('created_at', '>=', Carbon\Carbon::today())->count()}}</h1>
                        <p>Hoje</p>
                    </div>
                </div>
                <!-- end: BOOKED TODAY -->

                <!-- end: APPOINTMENTS BOOKED YESTERDAY -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>{{$clinic->appointments->where('created_at', '>=', Carbon\Carbon::yesterday())->where('created_at', '<', Carbon\Carbon::today())->count()}}</h1>
                        <p>Ontem</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED YESTERDAY -->

                <!-- start: APPOINTMENTS BOOKED THIS WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>{{$clinic->appointments->where('created_at', '>=', Carbon\Carbon::today()->subDay()->startOfWeek())->count()}}</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED THIS WEEK -->

                <!-- start: APPOINTMENTS BOOKED LAST WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>{{$clinic->appointments->where('created_at', '>=', Carbon\Carbon::today()->subDay()->startOfWeek()->subWeek(1))->where('created_at', '<', Carbon\Carbon::today()->subDay()->startOfWeek())->count()}}</h1>
                        <p>Semana passada</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED LAST WEEK -->

                <!-- start: NEW PATIENTS THIS WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Pacientes Novos</h4>
                        <h1>{{$clinic->appointments->where('created_at', '>=', Carbon\Carbon::today()->subDay()->startOfWeek()->subWeek(1))->where('created_at', '<', Carbon\Carbon::today()->subDay()->startOfWeek())->count()}}</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end: NEW PATIENTS THIS WEEK -->

                <!-- start: NEW PATIENTS LAST WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Pacientes Novos</h4>
                        <h1>{{$clinic->appointments->where('created_at', '>=', Carbon\Carbon::today()->subDay()->startOfWeek()->subWeek(1))->where('created_at', '<', Carbon\Carbon::today()->subDay()->startOfWeek())->count()}}</h1>
                        <p>Semana passada</p>
                    </div>
                </div>
                <!-- end: NEW PATIENTS LAST WEEK -->

            </div>
            <!-- end: BOOKED TODAY -->
            @endrole

        </div>

        <div class="subviews">
            <div class="subviews-container"></div>
        </div>

    </div>

@endsection
