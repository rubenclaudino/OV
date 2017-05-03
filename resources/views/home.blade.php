@extends('layouts.dashboard')
@section('content')

    <div class="main-content">

        <!-- start: PANEL CONFIGURATION MODAL FORM -->
        <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title">Panel Configuration</h4>
                    </div>
                    <div class="modal-body">
                        Here will be a configuration form
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- end: PANEL CONFIGURATION MODAL FORM -->

        <div class="container" style="opacity: 0.7;padding-top: 10px;padding-right: 25px">

            <!-- start: PAGE CONTENT -->

            <div class="row">

                <!-- start: APPOINTMENTS BOOKED TODAY -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>{{$appointments->where('created_at', '>=', Carbon\Carbon::today())->count()}}</h1>
                        <p>Hoje</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED TODAY -->

                <!-- end: APPOINTMENTS BOOKED YESTERDAY -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>{{$appointments->where('created_at', '>=', Carbon\Carbon::yesterday())->where('created_at', '<', Carbon\Carbon::today())->count()}}</h1>
                        <p>Ontem</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED YESTERDAY -->

                <!-- start: APPOINTMENTS BOOKED THIS WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>{{$appointments->where('created_at', '>=', Carbon\Carbon::today()->subDay()->startOfWeek())->count()}}</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED THIS WEEK -->

                <!-- start: APPOINTMENTS BOOKED LAST WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>{{$appointments->where('created_at', '>=', Carbon\Carbon::today()->subDay()->startOfWeek()->subWeek(1))->where('created_at', '<', Carbon\Carbon::today()->subDay()->startOfWeek())->count()}}</h1>
                        <p>Semana passada</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED LAST WEEK -->

                <!-- start: PATIENTS CONFIRMED THIS WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Confirmados</h4>
                        <h1>0</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end: PATIENTS CONFIRMED THIS WEEK -->

                <!-- start: PATIENTS CANCELLED THIS WEEK -->
                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Desmarcados</h4>
                        <h1>0</h1>
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
                        <h1>0</h1>
                        <p>pacientes cativos</p>
                    </div>
                </div>
                <!-- end : CAPTIVE PATIENTS -->

                <!-- start : BIGGEST INTERVAL OF THE DAY -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-white" style="text-align: center;padding: 10px">
                        <h4>Seu maior intervalo hoje é das</h4>
                        <h1> <span style="color:silver !important">00:00</span>
                            <span>á</span>
                            <span style="color:silver !important">00:00</span>
                        </h1>
                        <p>-</p>
                    </div>
                </div>
                <!-- end : BIGGEST INTERVAL OF THE DAY -->

                <!-- start : BEST MONTH FOR HOLIDAYS -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-white" style="text-align: center;padding: 10px">
                        <h4>Melhor mês para ferias</h4>
                        <h1>...</h1>
                        <p>-</p>
                    </div>
                </div>
                <!-- end : BEST MONTH FOR HOLIDAYS -->

            </div>

            <!-- end: PAGE CONTENT-->

        </div>

        <div class="subviews">
            <div class="subviews-container"></div>
        </div>

    </div>

@endsection
