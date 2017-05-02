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

        <div class="container">

            <!-- start: PAGE CONTENT -->

            <div class="row">

                <!-- start: APPOINTMENTS BOOKED TODAY -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>0</h1>
                        <p>Hoje</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED TODAY -->

                <!-- end: APPOINTMENTS BOOKED YESTERDAY -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>0</h1>
                        <p>Ontem</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED YESTERDAY -->

                <!-- start: APPOINTMENTS BOOKED THIS WEEK -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>0</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED THIS WEEK -->

                <!-- start: APPOINTMENTS BOOKED LAST WEEK -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Agendados</h4>
                        <h1>0</h1>
                        <p>Semana passada</p>
                    </div>
                </div>
                <!-- end: APPOINTMENTS BOOKED LAST WEEK -->

                <!-- start: TOTAL REVENUE TODAY -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel panel-white little4Divs" style="height:auto !important;">
                        <div class="panel-body padding-20 text-center">
                            <div class="space10">
                                <h5 class="text-black semi-bold no-margin p-b-5">Hoje</h5>
                                <h3 class="text-black no-margin"><span class="text-small">R$</span>0</h3>
                            </div>
                            <div class="sparkline-5 space10 modified-sparkline-5">
                                        <span><canvas height="70" width="104"
                                                      style="display: inline-block; width: 104px; height: 70px; vertical-align: top;"></canvas></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: TOTAL REVENUE TODAY -->

                <!-- start: TOTAL REVENUE YESTERDAY -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel panel-white little4Divs" style="height:auto !important;">
                        <div class="panel-body padding-20 text-center">
                            <div class="space10">
                                <h5 class="text-black semi-bold no-margin p-b-5">Ontem</h5>
                                <h3 class="text-black no-margin"><span class="text-small">R$</span>0</h3>
                            </div>
                            <div class="sparkline-5 space10 modified-sparkline-5">
                                        <span><canvas height="70" width="104"
                                                      style="display: inline-block; width: 104px; height: 70px; vertical-align: top;"></canvas></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: TOTAL REVENUE YESTERDAY -->

                <!-- start:  -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Confirmados</h4>
                        <h1>0</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end:  -->

                <!-- start:  -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Desmarcados</h4>
                        <h1>0</h1>
                        <p>Essa semana</p>
                    </div>
                </div>
                <!-- end:  -->

                <!-- start: TOTAL PERCENTAGE OF EARCH TYPE SPECIALTY CARRIED OUT -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel panel-white little4Divs" id="pagecontent"
                         style="padding:0!important;margin:0!important;background:#fff!important;">
                        <canvas style="width:100%;margin-top:35%!important;" id="pieChart"></canvas>
                        <div id="p-legend" class="chart-legend-small"></div>
                    </div>
                </div>
                <!-- end: TOTAL PERCENTAGE OF EARCH TYPE SPECIALTY CARRIED OUT -->

                <!-- start: -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                            <h4>Convênio</h4>
                            <h1>0</h1>
                    </div>
                </div>
                <!-- end: -->

                <!-- start:  -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Particular</h4>
                        <h1>0</h1>
                    </div>
                </div>
                <!-- end: -->

                <!-- start:  -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                            <h4>-</h4>
                            <h1>0</h1>
                    </div>
                </div>
                <!-- end:  -->

                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding ">
                    <div class="panel panel-default panel-white core-box " style="height:175px;">
                        <div class="panel-body">
                            <div class="easy-pie-chart">
                                    <span class="bounce number appear" data-percent="0"
                                          data-plugin-options='{"barColor": "#0175b0"}'> <span class="percent"></span> </span>
                                <div class="label-chart">
                                    <h4 class="no-margin" style="font-size:1em!important">Pacientes Novos</h4>
                                </div>
                            </div>
                            <div class="text-center space15">
                                <span class="block">Mês passado</span><span
                                        class="label label-primary vertical-align-bottom">0%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- start : CAPTIVE PATIENTS -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 nopadding">
                    <div class="panel partition-green" style="text-align: center;padding: 10px">
                        <h4>Você tem</h4>
                        <h1>0</h1>
                        <p>pacientes cativos</p>
                    </div>
                </div>
                <!-- end : CAPTIVE PATIENTS -->

                <!-- start : PATIENTS BOOKED PER MONTH -->
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
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

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
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

                <div class="col-md-7 col-lg-8 col-sm-12 col-xs-12 nopadding">
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

                <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
                    <div class="panel panel-white equalThirdRow">
                        <div class="panel-heading border-light" style="padding-bottom:0;">
                            <h5 style="margin-bottom:0;">Últimos agendamentos marcados</h5>
                        </div>

                        <div class="panel-body ">
                            <table class="table table-striped table-hover" style="color: #383838;margin-bottom:0;">
                                <tbody style="background:#fff;">
                                <tr>
                                    <td class="lsub" style="border-top:none!important">...</td>
                                    <td class="lsub" style="border-top:none!important"><i class="fa fa-clock-o"></i> 1
                                        Jan
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lsub">...</td>
                                    <td class="lsub"><i class="fa fa-clock-o"></i> 1 Jan</td>
                                </tr>
                                <tr>
                                    <td class="lsub">...</td>
                                    <td class="lsub"><i class="fa fa-clock-o"></i> 1 Jan</td>
                                </tr>
                                <tr>
                                    <td class="lsub">...</td>
                                    <td class="lsub"><i class="fa fa-clock-o"></i> 1 Jan</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- start: THE CHECK REMINDER -->
                <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
                    <div class="panel panel-white equalThirdRow">
                        <div class="panel-body " style="padding:0;">
                            <div class="tabbable  no-margin no-padding partition-dark">
                                <ul class="nav nav-tabs" id="myTab2">
                                    <li class="">
                                        <a aria-expanded="false" data-toggle="tab" href="#todo_tab_example1">
                                            To-do
                                        </a>
                                    </li>
                                    <li class="">
                                        <a aria-expanded="false" data-toggle="tab" href="#todo_tab_example2">
                                            Next Week
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a aria-expanded="true" data-toggle="tab" href="#todo_tab_example3">
                                            Next Month
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content  partition-white">
                                    <div id="todo_tab_example1" class="tab-pane padding-bottom-5 ">
                                        <div class="panel-scroll height-180  ps-container">
                                            <ul class="todo">
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-danger"> today</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">New frontend layout</span><span
                                                                        class="label label-danger"> today</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 20:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Hire developers</span><span
                                                                        class="label label-warning"> tommorow</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 7:00 AM Tomorrow</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-success"> this week</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-success"> this week</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-success"> this week</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div style="left: 0; bottom: 3px; width: 320px; display: none;"
                                                 class="ps-scrollbar-x-rail">
                                                <div style="left: 0px; width: 0px;" class="ps-scrollbar-x"></div>
                                            </div>
                                            <div style="top: 0px; right: 3px; height: 180px; display: inherit;"
                                                 class="ps-scrollbar-y-rail">
                                                <div style="top: 0px; height: 128px;" class="ps-scrollbar-y"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="todo_tab_example2" class="tab-pane padding-bottom-5">
                                        <div class="panel-scroll height-180 ps-container ">
                                            <ul class="todo">
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Hire developers</span><span
                                                                        class="label label-success"> Monday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Lunch with Nicole</span><span
                                                                        class="label label-danger"> Wednesday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 20:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">New frontend layout</span><span
                                                                        class="label label-warning"> Wednesday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 7:00 AM Tomorrow</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-danger"> Friday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-danger"> Friday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-danger"> Friday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div style="left: 0; bottom: 3px; width: 0px; display: none;"
                                                 class="ps-scrollbar-x-rail">
                                                <div style="left: -10px; width: 0px;" class="ps-scrollbar-x"></div>
                                            </div>
                                            <div style="top: 0px; right: 3px; height: 180px; display: inherit;"
                                                 class="ps-scrollbar-y-rail">
                                                <div style="top: 0px; height: 0px;" class="ps-scrollbar-y"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="todo_tab_example3" class="tab-pane padding-bottom-5 active">
                                        <div class="panel-scroll height-180 ps-container">
                                            <ul class="todo">
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Lunch with Boss</span><span
                                                                        class="label label-warning"> 01 monday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Bootstrap Seminar</span><span
                                                                        class="label label-success"> 05 wednesday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 20:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">New frontend layout</span><span
                                                                        class="label label-warning"> 05 Wednesday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 7:00 AM Tomorrow</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-danger"> 07 Friday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-danger"> 07 Friday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todo-actions">
                                                        <i class="fa fa-square-o"></i>
                                                        <div class="padding-horizontal-5">
                                                            <div class="block space5">
                                                                <span class="desc">Staff Meeting</span><span
                                                                        class="label label-danger"> 07 Friday</span>
                                                            </div>
                                                            <div class="block">
                                                                <span class="desc text-small text-light"><i
                                                                            class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                                                <div class="btn-group btn-group-sm todo-tools">
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div style="left: 0px; bottom: 3px; width: 0px; display: none;"
                                                 class="ps-scrollbar-x-rail">
                                                <div style="left: -10px; width: 0px;" class="ps-scrollbar-x"></div>
                                            </div>
                                            <div style="top: 0px; right: 3px; height: 180px; display: inherit;"
                                                 class="ps-scrollbar-y-rail">
                                                <div style="top: 0px; height: 0px;" class="ps-scrollbar-y"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end: THE CHECK REMINDER -->
                <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-lg-12 col-sm-12 nopadding">
                        <div class="panel panel-white nopadding halfEqual">
                            <div class="panel-body">
                                <h5>Seu intervalo hoje é das</h5><br>
                                <span style="font-size:2em;color:#35B6D2 !important">00:00</span>
                                <span style="font-size:1.8em;">á</span>
                                <span style="font-size:2em;color:#35B6D2 !important">00:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 nopadding">
                        <div class="panel panel-white halfEqual nopadding">
                            <div class="panel-body">
                                <h5>Melhor mês para ferias</h5><br>
                                <span style="font-size:2em;color:#35B6D2 !important">...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
                    <div class="panel panel-white nopadding equalForthRow">
                        <h5>Existem <strong class="middleText">0</strong> pacientes com pagamentos em aberto.</h5>
                        <span><i class="fa fa-search middleText" style="font-size:1.8em;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                    class="fa fa-print middleText" style="font-size:2em; "></i></span>
                        <br>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
                    <div class="panel panel-white nopadding equalForthRow">
                        <h5 style="line-height:45px">Você tem <h4 class="middleText" style="font-size:2em; ">R$0</h4>
                            pacientes com pagamentos em aberto.
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
                    <div class="panel panel-white nopadding equalForthRow">
                        <h5 style="line-height:45px">Media de renda por dia<h4 class="middleText"
                                                                               style="font-size:2em;">R$0</h4></h5>
                    </div>
                </div>

            </div>

            <!-- end: PAGE CONTENT-->

        </div>

        <div class="subviews">
            <div class="subviews-container"></div>
        </div>

    </div>

@endsection
