@extends('layouts.calendar')
@section('content')

        <!-- start: MAIN CONTAINER -->
<div class="main-container inner">

    <div id="current_dentist">
        {!! Form::select('dentist_id', $professionals,$dentist_id,['class' => 'form-control','id' => 'current_dentist_id']) !!}
    </div>

    @include('calendar_partials.quick_patient_modal')

    <!-- start: PAGE -->
    <div class="main-content" style="background: #dddddd">
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
        <!-- /.modal -->
        <!-- end: SPANEL CONFIGURATION MODAL FORM -->
        <div class="container">
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12 nopadding">
                    <!-- start: FULL CALENDAR PANEL -->
                    <div class="panel panel-white" style="margin-top:0px;margin-left:-8px!important;margin-bottom:0;">
                        <div class="panel-body">
                            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                                <div class="row">
                                    <div id='full-calendar'></div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-lg-8 col-md-12 col-xs-12" style="padding-top: 7px">
                                <div class="row">
                                    <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                                                <span class="label label-info"
                                                      style="display:block!important;opacity:0.8">
                                                   Agendado
                                                </span>
                                    </div>
                                    <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                                                <span class="label label-success"
                                                      style="display:block!important;opacity:0.8">
                                                   Confirmado
                                                </span>
                                    </div>
                                    <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                                                <span class="label label-warning"
                                                      style="display:block!important;opacity:0.8">
                                                   Desmarcou
                                                </span>
                                    </div>
                                    <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                                                <span class="label label-danger"
                                                      style="display:block!important;opacity:0.8">
                                                   Faltou
                                                </span>
                                    </div>
                                    <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                                                <span class="label"
                                                      style="display:block!important;background-color:#20124d;opacity:0.8">
                                                   Não Agendar
                                                </span>
                                    </div>
                                    <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                                                <span class="label"
                                                      style="display:block!important;background-color:#5e5e5e;opacity:0.8">
                                                   Finalizado
                                                </span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4 col-md-12 col-xs-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: FULL CALENDAR PANEL -->
                </div>
            </div>
            <!-- end: PAGE CONTENT-->
        </div>
        <div class="subviews" style="background:#dddddd;">
            <div class="subviews-container" style="background:#dddddd;"></div>
        </div>
    </div>

    @include('calendar_partials.current_date_modal')

    <!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->

<!-- start: SUBVIEW FOR CALENDAR PAGE -->
<div id="newFullEvent" class="container" ng-controller="MyController" style="background: #dddddd">

    @include('calendar_partials.patient_information')
    <div class="clearfix"></div>
    @include('calendar_partials.tabs')

    <div id="readFullEvent">
        <div class="noteWrap col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="event-title"></h2>

                    <div class="btn-group options-toggle pull-right">
                        <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                            <span class="caret"></span>
                        </button>
                        <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                            <li>
                                <a href="#newFullEvent" class="edit-event">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delete-event">
                                    <i class="fa fa-times"></i> Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <span class="event-category event-cancelled">Cancelled</span>
                    <span class="event-allday"><i class='fa fa-check'></i> All-Day</span>
                </div>
                <div class="col-md-12">
                    <div class="event-start">
                        <div class="event-day"></div>
                        <div class="event-date"></div>
                        <div class="event-time"></div>
                    </div>
                    <div class="event-end"></div>
                </div>
                <div class="col-md-12">
                    <div class="event-content"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
