<!-- start: TAB TITLES START -->
<ul id="mainEventTabs" class="nav nav-tabs new-event-tabs" role="tablist" data-tabs="tabs" style="display:none;">

    <!-- start: APPOINTMENT DETAILS -->
    <li role="presentation" class="active"><a href="#appointment-details" aria-controls="appointment-details"
                                              role="tab" data-toggle="tab">Booking Information</a></li>
    <!-- end: APPOINTMENT DETAILS -->

    <!-- start: APPOINTMENT INFO -->
    <li role="presentation"><a href="#appointment-information" aria-controls="appointment-information" role="tab"
                               data-toggle="tab" class="appointment-information">Appointment Information</a></li>
    <!-- end: APPOINTMENT INFO -->

    <!-- start: APPOINTMENT SUMMARY -->
    <li role="presentation"><a href="#appointment-summary" id="appt-summary" aria-controls="appointment-summary"
                               role="tab" data-toggle="tab" class="appointment-summary">Appointment Summary</a></li>
    <!-- start: APPOINTMENT SUMMARY -->

</ul>
<!-- end: TAB TITLES START -->

<!-- start: TAB CONTENT START -->
<div class="tab-content panel" style="margin-bottom: 15px">

    <!-- start: APPOINTMENT DETAILS -->
    <div role="tabpanel" class="tab-pane active" id="appointment-details">

        <!-- start: PANEL BODY -->
        <div class="panel-body" style="padding-bottom: 5px;">

            <!-- start: ROW -->
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- start: FORM -->
                    <form class="form-full-event" action="#">
                        <input class="event-id hide" type="hidden">
                        <input type="hidden" name="patient_json" value="">

                        <div class="row" style="padding-bottom: 0px;margin-bottom: 0px">

                            <div class="col-md-6">
                                <div class="form-group" tabindex="-1">
                                    <div class="input-group">
                                        <input name="eventName" type="text" placeholder="Nome do paciente..."
                                               class="event-name form-control patient_name_dropdown">
                                        <span class="input-group-addon" id="basic-addon1"><i
                                                    class="fa fa-search"></i></span>
                                    </div>
                                    <input name="" type="text" placeholder="Nome do paciente..."
                                           class="form-control event-real-name" disabled="true">
                                </div>
                                <input type="hidden" name="patient_id" class="getted_patient_id">

                                <div class="no-all-day-range">
                                    <div class="form-group">
                                        <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><i
                                                            class="fa fa-clock-o"></i></span>
                                            <input type="text" class="event-range-date form-control"
                                                   name="eventRangeDate" placeholder="Range date"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="all-day-range hidden" style="display: none;">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="form-group">
													<span class="input-icon">
														<input class="event-range-date form-control"
                                                               name="ad_eventRangeDate" placeholder="Range date"
                                                               type="text">
														<i class="fa fa-calendar"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- <label>Appointment Status</label> -->
                                            {!! Form::select('appointment_status_id', $appointment_statuses, 'Appointment Status',['class' => 'form-control selectpicker appointment_type']) !!}

                                        </div>
                                        <div class="form-group">
                                            <!-- <label>Treatment Type</label> -->
                                            {!! Form::select('specialty_id', $specialties, 'Treatment Type',['class' => 'form-control selectpicker treatment_type']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- <label>Appointment Type</label> -->
                                            {!! Form::select('appointment_type_id', $types, 'Appointment Type',['class' => 'form-control selectpicker appointment_type']) !!}
                                        </div>
                                        <div class="form-group">
                                            <!-- <label>Dental Plan</label> -->
                                            {!! Form::select('clinic_dental_plan_id', $dentalPlans, 'Dental Plan',['class' => 'form-control selectpicker dental_plan']) !!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                        <textarea class="form-control patientObservation" style="min-height:95px;"
                                                  placeholder="Observações do Paciente" disabled="disabled"></textarea>
                                </div>
                                <div class="form-group">
                                        <textarea class="form-control appointmentObservation"
                                                  name="observation" placeholder="Observações do Agendamento"
                                                  style="min-height:95px;"></textarea>
                                </div>
                            </div>

                            <div class="hide">
                                <input type="text" class="event-start-date" name="start_date"/>
                                <input type="text" class="event-end-date" name="end_date"/>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <hr class="custom_sepg">
                                <button class="btn btn-success  save-new-event" type="submit">
                                    Agendar
                                </button>
                                <a href="#" class="btn btn-info btn-light-grey close-subviews">Voltar</a>

                            </div>

                        </div>

                    </form>
                    <!-- end: FORM -->

                </div>

            </div>
            <!-- end: ROW -->

        </div>
        <!-- end: PANEL BODY -->

    </div>
    <!-- end: APPOINTMENT DETAILS -->

    <!-- start: APPOINTMENT INFO -->
    <div role="tabpanel" class="tab-pane" id="appointment-information" style="padding: 0px">

        <!-- start: TAB TITLES -->
        <ul class="nav nav-tabs" style="border: none">
            <li class="active">
                <a data-toggle="tab" href="#treatment">
                    <strong>Treatment</strong>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#quotation" class="quotations">
                    <strong>Quotation</strong>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#pictogram" class="pictogram_tab">
                    <strong>Pictogram</strong>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#photo_documentation" class="photo-documentation">
                    <strong>Photo Documentation</strong>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#issue_exam" class="issue_exam">
                    <strong>Issue Exam</strong>
                </a>
            </li>
        </ul>
        <!-- end: TAB TITLES -->

        <!-- start: TAB CONTENT -->
        <div class="tab-content" style="background:whitesmoke;border:none">

            <!-- start: TREATMENT -->
            <div id="treatment" class="tab-pane fade active in">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#register_procedure" data-toggle="modal" class="btn btn-primary demo">
                                Register Procedure
                            </a>
                            <a class="btn btn-primary print" data-id="loadTreatmentUnderAppointment">
                                Print Receipt
                            </a>
                        </div>
                    </div>
                </div>

                <br>

                <div id="loadTreatmentUnderAppointment">

                    <div aria-hidden="true" style="display: none;" id="register_procedure"
                         class="modal extended-modal fade no-display" tabindex="-1" data-width="700">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background:#fff;">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        ×
                                    </button>
                                    <h4 class="modal-title">Add Treatment</h4>
                                </div>
                                <div class="modal-body" style="background:#fff;">
                                    <form class="row" id="addTreatment">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                            <div class="form-group">
                                                <label for="tco" style="margin:10px 0px 0"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right">
                                                    Treatment Carried Out</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    {!! Form::select('treatment_type_id', $treatmentTypes, 'Treatment Type',['class' => 'form-control selectpicker treatment_type','placeholder' => 'Select Treatment Type','id' => 'register_treatment_type_id']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="price" style="margin:10px 0px 0"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right">
                                                    Price</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" id="price"
                                                           placeholder="0.00" disabled="disabled">
                                                    <input type="hidden" name="price" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="price" style="margin:10px 0px 0"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right">
                                                    Status</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="selectpicker" name="payment_action">
                                                        <option value="1">Paid</option>
                                                        <option value="0">Not Paid</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="p_method" style="margin:10px 0px 0"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right">
                                                    Payment Method</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select id="p_method" class="selectpicker" name="payment_type">
                                                        <option value="0">Cash</option>
                                                        <option value="1">Credit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <label for="p_method" class="col-lg-3 col-md-3 col-sm-12 control-label" style="margin:10px 0px 10px 0px;">
                                                Installments
                                            </label>
                                            <div class="form-group">
                                                <div class="col-lg-9 col-md-9 col-sm-12" style="margin:10px 0px 10px 0px;">
                                                    <select id="p_method">
                                                        <option>x1</option>
                                                        <option>x2</option>
                                                        <option>x3</option>
                                                        <option>x4</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                                <label for="p_method"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right">
                                                    Observations</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <textarea name="observation" style="resize: none;width:100%"
                                                                  cols="20" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-offset-3 col-md-9 col-sm-12">
                                                    <button class="btn btn-primary" type="submit" id="submit">
                                                        Register Treatment
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div aria-hidden="true"
                         style="display: none; width: 800px; margin-left: -379px; margin-top: -250px;"
                         id="editTreatmentModal" class="modal extended-modal fade no-display" tabindex="-1"
                         data-width="800">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background:#fff;">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        ×
                                    </button>
                                    <h4 class="modal-title">Edit This Treatment</h4>
                                </div>
                                <div class="modal-body" style="background:#fff;">
                                    <form class="row" id="editTreatment">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                            <div class="form-group">
                                                <label for="tco" style="margin:10px 0px 10px 0px;"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right">
                                                    Treatment Carried Out</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12" style="">
                                                    {!! Form::select('treatment_type_id', $treatmentTypes, 'Treatment Type',['class' => 'form-control selectpicker treatment_type','placeholder' => 'Select Treatment Type']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="price"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right"
                                                       style="margin:10px 0px 10px 0px;">
                                                    Price</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control price-placeholder"
                                                           placeholder="0.00" disabled="disabled">
                                                    <input type="hidden" name="price">
                                                    <input type="hidden" name="id">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="price"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right"
                                                       style="margin:10px 0px 10px 0px;">
                                                    Status</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="selectpicker" name="payment_action">
                                                        <option value="1">Paid</option>
                                                        <option value="0">Not Paid</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="p_method"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right"
                                                       style="margin:10px 0px 10px 0px;">
                                                    Payment Method</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select id="p_method" class="selectpicker" name="payment_type">
                                                        <option value="0">Cash</option>
                                                        <option value="1">Credit</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="p_method"
                                                       class="col-lg-3 col-md-3 col-sm-12 control-label text-right"
                                                       style="margin:10px 0px 10px 0px;">
                                                    Observations</label>

                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <textarea name="observation" style="resize: none;width:100%"
                                                                  cols="20" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-offset-3 col-md-9 col-sm-12">
                                                    <button class="btn btn-primary" type="submit" id="submit">Save
                                                        Treatment
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- start: DIV -->
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 nopadding">

                        <div class="panel-body" style="background: white">
                            <table class="table table-striped table-hover" id="sample-table-2">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Treatment</th>
                                    <th class="hidden-xs">Dentist</th>
                                    <th class="center hidden-xs">Paid</th>
                                    <th class="hidden-xs">Payment Type</th>
                                    <th>R$</th>
                                    <th class="center hidden-xs">Obs</th>
                                    <th class="hidden-xs">Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- end: DIV -->

                </div>

            </div>
            <!-- end: TREATMENT -->

            <div id="quotation" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="panel panel-white">
                            <div class="panel-body">

                            <!-- <form id="addAppointmentQuotation" method="POST" action="{{ url('/calendar/addQuotation') }}" autocomplete="off">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <input type="hidden" name="_method" value="POST">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="noteWrap">
                                       <div class="form-group">
                                          <textarea name="content" class="quotation" placeholder="Write quotation here..."></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-lg-onset-4 col-md-onset-4 col-sm-12 col-xs-12">
                                    <div class="row">
                                       <button type="submit" class="btn btn-success">Save Quotation</button>
                                       <button class="btn btn-primary"><i class="fa fa-print"></i>&nbsp;&nbsp;&nbsp;Print</button>
                                       <!-- <button class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i>&nbsp;&nbsp;&nbsp;Email to Patient</button> -->
                                <!-- </div>
                             </div>
                          </form> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
            <div id="pictogram" class="tab-pane fade" style="margin:0px;padding:0px;">
                <div class="panel panel-white myGramPanel">
                    <div class="panel-body myGramPanel">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:0px;padding:0px;">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="myTest"
                                 style="margin:0px;padding:0px;">
                                <center>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                                         style="margin:0px;padding:0px;">
                                        <?php
                                        for($i = 8;$i > 0;$i--){?>
                                        <div id="1<?php echo $i;?>C" class="myHover teeth"
                                             style="background:url({{ url('/') }}/images/odontogram/1<?php echo $i ?>C.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/1<?php echo $i ?>C.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php
                                        for($i = 8;$i > 0;$i--){?>
                                        <div class="teeth myHover" id="1<?php echo $i;?>T"
                                             style="background:url({{ url('/') }}/images/odontogram/1<?php echo $i ?>T.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/1<?php echo $i ?>T.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php
                                        for($i = 8;$i > 0;$i--){?>
                                        <div class="teeth myHover" id="1<?php echo $i;?>S"
                                             style="background:url({{ url('/') }}/images/odontogram/1<?php echo $i ?>S.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/1<?php echo $i ?>S.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php
                                        for($i = 8;$i > 0;$i--){?>
                                        <div style=" display:inline-block;padding:5px 7px;background:whitesmoke">
                                            <?php echo "1" . $i;?>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                                         style="margin:0px;padding:0px;border-left:2px solid whitesmoke;">
                                        <?php for($i = 1;$i < 9;$i++){ ?>
                                        <div class="teeth myHover" id="2<?php echo $i;?>C"
                                             style=" background:url({{ url('/') }}/images/odontogram/2<?php echo $i ?>C.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/2<?php echo $i ?>C.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php for($i = 1;$i < 9;$i++){ ?>
                                        <div class="teeth myHover" id="2<?php echo $i;?>T"
                                             style="background:url({{ url('/') }}/images/odontogram/2<?php echo $i ?>T.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/2<?php echo $i ?>T.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php for($i = 1;$i < 9;$i++){ ?>
                                        <div class="teeth myHover" id="2<?php echo $i;?>S"
                                             style="background:url({{ url('/') }}/images/odontogram/2<?php echo $i ?>S.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/2<?php echo $i ?>S.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php
                                        for($i = 1;$i < 9;$i++){?>
                                        <div <?php if ($i == 1) {
                                            echo "class='myFirstLable2'";
                                        } ?>    style=" display:inline-block;padding:5px 7px;background:whitesmoke">
                                            <?php echo "2" . $i;?>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <hr style="margin:10px;width:97%">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <hr style="margin:10px 10px 10px -7px;width:97%">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                                         style="margin:0px;padding:0px;">
                                        <?php
                                        for($i = 8;$i > 0;$i--){?>
                                        <div <?php if ($i == 8) {
                                            echo "class='myFirstLable'";
                                        } ?> style=" display:inline-block;padding:5px 7px;background:whitesmoke">
                                            <?php echo "4" . $i;?>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php
                                        for($i = 8;$i > 0;$i--){?>
                                        <div class="teeth myHover" id="4<?php echo $i;?>S"
                                             style="background:url({{ url('/') }}/images/odontogram/4<?php echo $i ?>S.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/4<?php echo $i ?>S.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php
                                        for($i = 8;$i > 0;$i--){?>
                                        <div class="teeth myHover" id="4<?php echo $i;?>T"
                                             style="background:url({{ url('/') }}/images/odontogram/4<?php echo $i ?>T.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/4<?php echo $i ?>T.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php
                                        for($i = 8;$i > 0;$i--){?>
                                        <div class="teeth myHover" id="4<?php echo $i;?>C"
                                             style="background:url({{ url('/') }}/images/odontogram/4<?php echo $i ?>C.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/4<?php echo $i ?>C.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                                         style="margin:0px;padding:0px;border-left:2px solid whitesmoke;">
                                        <?php
                                        for($i = 1;$i < 9;$i++){?>
                                        <div <?php if ($i == 1) {
                                            echo "class='myFirstLable2'";
                                        } ?>    style=" display:inline-block;padding:5px 7px;background:whitesmoke">
                                            <?php echo "3" . $i;?>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php for($i = 1;$i < 9;$i++){ ?>
                                        <div class="teeth myHover" id="3<?php echo $i;?>S"
                                             style=" background:url({{ url('/') }}/images/odontogram/3<?php echo $i ?>S.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/3<?php echo $i ?>S.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php for($i = 1;$i < 9;$i++){ ?>
                                        <div class="teeth myHover" id="3<?php echo $i;?>T"
                                             style=" background:url({{ url('/') }}/images/odontogram/3<?php echo $i ?>T.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/3<?php echo $i ?>T.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <?php for($i = 1;$i < 9;$i++){ ?>
                                        <div class="teeth myHover" id="3<?php echo $i;?>C"
                                             style=" background:url({{ url('/') }}/images/odontogram/3<?php echo $i ?>C.jpg)">
                                            <img src="{{ url('/') }}/images/odontogram/3<?php echo $i ?>C.jpg"
                                                 style="visibility: hidden;"/>
                                        </div>
                                        <?php }?>
                                    </div>
                                </center>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs wrapper"
                                 style=" margin:0px;padding:0px;">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs"
                                     style="margin:0px;padding:0px;background:url({{ url('/') }}/images/odontogram/sideView.jpg) no-repeat;">
                                    <img src="{{ url('/') }}/images/odontogram/sideView.jpg"
                                         style="visibility: hidden;"/>
                                </div>
                                <div id="defectDescirption" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div id="defectDescirptionMobile"></div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="obs_odonto">
                                            Observation
                                        </label>
                                        <textarea class="form-control " id="obs_odonto" cols="10" rows="3"
                                                  style="resize:none;width:100%"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding-bottom:0px">
                                    <br>

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-xs-12 nopadding"
                                             style="margin-top:30px;">
                                            <button class="btn btn-block btn-primary">Save</button>
                                            <button class="btn btn-block btn-primary">Print</button>
                                            <!-- <button class="btn btn-block btn-primary">Email</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- START:: NEW MODAL ADD EDIT TOOTH  -->
                <div class="modal fade" id="toothModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <form id="toothForm" method="post">
                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="tooth_number" value="">
                                <input type="hidden" name="tooth_left" value="">
                                <input type="hidden" name="tooth_top" value="">
                                <input type="hidden" name="tooth_type" value="">
                                <input type="hidden" name="id" value="">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title">Tooth Info</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="tooth_number">21</label>
                                            </div>
                                            <div class="form-group">
                                                    <textarea class="form-control" name="description"
                                                              placeholder="Description" type="text"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary btn-save-createnew" type="submit">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END:: NEW MODAL -->


            </div>
            <div id="photo_documentation" class="tab-pane fade">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                    <form id="addAppointmentDocument" method="POST" action="{{ url('/calendar/AddDocument') }}"
                          autocomplete="off" enctype="multipart/form-data">
                        <input type="file" id="input-id" name="upload_document" class="file-loading"
                               accept="image"/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="appointment_id" value="">

                        <div id="my_camera"></div>
                        <!-- <input type="button" value="Access Camera" onClick="setup(); $(this).hide().next().show();">
                          <input type="button" value="Take Snapshot" onClick="take_snapshot()" style="display:none"> -->
                    </form>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="row">
                        <div class="no_document">
                            <img src="{{ url('/images/') }}/nodocument.png" alt="No Document">
                        </div>
                        <div class="photo_document">
                            <div class="col-lg-1 col-md-1 col-sm-1 myNavButton hidden-xs">
                                <button class="btn prev" style="margin-top:320%">
                                    <i style="font-size:2em;" class="fa fa-arrow-circle-o-left"></i>
                                </button>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 mySlide">
                                <div id="owl-example" class="owl-carousel">
                                    <div class="panel panel-white sItem">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    14/02/2016
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <center>
                                                        <img src="{{ url('/')}}/images/anonymous.png"
                                                             class="doc_photo"/>
                                                    </center>
                                                    <br>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    Observation will go here.......
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-white sItem">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    14/02/2016
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <center>
                                                        <img src="{{ url('/') }}/images/anonymous.png"
                                                             class="doc_photo"/>
                                                    </center>
                                                    <br>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    Observation will go here.......
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-white sItem">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    14/02/2016
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <center>
                                                        <img src="{{ url('/')}}/images/anonymous.png"
                                                             class="doc_photo"/>
                                                    </center>
                                                    <br>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    Observation will go here.......
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-white sItem">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    14/02/2016
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <center>
                                                        <img src="{{ url('/') }}/images/anonymous.png"
                                                             class="doc_photo"/>
                                                    </center>
                                                    <br>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    Observation will go here.......
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-white sItem">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    14/02/2016
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <center>
                                                        <img src="{{ url('/') }}/images/anonymous.png"
                                                             class="doc_photo"/>
                                                    </center>
                                                    <br>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    Observation will go here.......
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-white sItem">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    14/02/2016
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <center>
                                                        <img src="{{ url('/') }}/images/anonymous.png"
                                                             class="doc_photo"/>
                                                    </center>
                                                    <br>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    Observation will go here.......
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 myNavButton hidden-xs">
                                <button class="btn next" style="margin-top:320%">
                                    <i style="font-size:2em;" class="fa fa-arrow-circle-o-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="issue_exam" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="panel panel-white sItem equal_issueExam">
                            <div class="panel-body">
                                <form id="addExam" method="POST" action="#">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="POST">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <input data-date-format="yyyy-mm-dd"
                                                               data-date-viewmode="years"
                                                               class="form-control date-picker" type="text"
                                                               name="exam_date">
                                                        <span class="input-group-addon"> <i
                                                                    class="fa fa-calendar"></i> </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6	col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="p_method"
                                                               class="col-lg-4 col-md-4 col-sm-4 control-label"
                                                               style="padding-top:10px;">
                                                            Model
                                                        </label>

                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                            {!! Form::select('model_id', $report_models,'',['class' => 'form-control selectpicker','id' => 'model_id']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="noteWrap">
                                                <div class="form-group">
                                                        <textarea name="content" id="summernote" class="exam_note"
                                                                  placeholder="Write note here..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-lg-onset-4 col-md-onset-4 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <button class="btn btn-success" type="submit">Save Exam</button>
                                            <!-- <button class="btn btn-primary"><i class="fa fa-print"></i>&nbsp;&nbsp;&nbsp;Print</button>
                                            <button class="btn btn-primary"><i class="fa fa-paper-plane"></i>&nbsp;&nbsp;&nbsp;Email</button> -->
                                        </div>
                                    </div>
                                </form>
                                <form id="updateExam" method="POST" action="#" style="display:none;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="id" value="">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <input data-date-format="yyyy-mm-dd"
                                                               data-date-viewmode="years"
                                                               class="form-control date-picker" type="text"
                                                               name="exam_date">
                                                        <span class="input-group-addon"> <i
                                                                    class="fa fa-calendar"></i> </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6	col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="p_method"
                                                               class="col-lg-4 col-md-4 col-sm-4 control-label"
                                                               style="padding-top:10px;">
                                                            Model
                                                        </label>

                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                            {!! Form::select('model_id', $report_models,'',['class' => 'form-control selectpicker model_id','id' => 'model_id']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="noteWrap">
                                                <div class="form-group">
                                                        <textarea name="content" id="summernote1" class="exam_note"
                                                                  placeholder="Write note here..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-lg-onset-4 col-md-onset-4 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <button class="btn btn-success" type="submit">Update Exam</button>
                                            <button class="btn btn-success" type="button" id="newExam">New Exam
                                            </button>
                                            <!-- <button class="btn btn-primary"><i class="fa fa-print"></i>&nbsp;&nbsp;&nbsp;Print</button>
                                            <button class="btn btn-primary"><i class="fa fa-paper-plane"></i>&nbsp;&nbsp;&nbsp;Email</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <style>
                            .table th, .table td {
                                border-top: none !important;
                            }
                        </style>
                        <div class="panel panel-white loadExams">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: TAB CONTENT -->

    </div>
    <!-- end: APPOINTMENT INFO -->

    <!-- start: APPOINTMENT SUMMARY -->
    <div role="tabpanel" class="tab-pane" id="appointment-summary">

        <div class="appt_summary">

            <!-- start: SUMMARY TITLE -->
            <h3 style="margin-top:0;background: whitesmoke;padding: 15px;font-weight: 100">Appointment Summary</h3>
            <!-- end: SUMMARY TITLE -->

            <!-- start: ROW -->
            <div class="row">
                <div class="col-md-8" style="overflow-x:auto;max-height:292px;">
                    <!-- start: HISTORY TABLE -->
                    <table class="table table-hover" ng-if="patient.appointments">
                        <thead>
                        <th>Date</th>
                        <th>Duration</th>
                        <th class="center">Status</th>
                        <th>Professional</th>
                        <th></th>
                        </thead>
                        <tbody style="color: #737373">
                        <tr ng-repeat="appointment in patient.appointments">
                            <!-- BOOKING DATE -->
                            <td>{[{ appointment.startdate }]}</td>
                            <!-- DURATION -->
                            <td>{[{ calcDiff(appointment.appointment_starttime,appointment.appointment_endtime)
                                }]}
                            </td>
                            <!-- APPOINTMENT STATUS -->
                            <td class="center">
                                    <span ng-switch="appointment.status">
                                     <span class="label label-default"
                                           style="background: #5bc0de !important;opacity: 0.8" ng-switch-when="Booked">{[{ appointment.status }]}</span>
                                        <span class="label label-default"
                                              style="background: #5cb85c !important;opacity: 0.8"
                                              ng-switch-when="Confirmed">{[{ appointment.status }]}</span>
                                        <span class="label label-default"
                                              style="background: #f0ad4e !important;opacity: 0.8"
                                              ng-switch-when="Cancelled">{[{ appointment.status }]}</span>
                                        <span class="label label-default"
                                              style="background: #5e5e5e !important;opacity: 0.8"
                                              ng-switch-when="Finished ">{[{ appointment.status }]}</span>
                                        <span class="label label-default"
                                              style="background: #d9534f !important;opacity: 0.8"
                                              ng-switch-when="Missed">{[{ appointment.status }]}</span>
                                     <span class="label label-default"
                                           style="background: #1b6d85 !important;opacity: 0.8" ng-switch-default>{[{ appointment.status }]}</span>
                                    </span>
                            </td>
                            <!-- DENTIST NAME -->
                            <td>
                                {[{ appointment.dentist.first_name }]} {[{ appointment.dentist.last_name }]}
                            </td>
                            <!-- OPTIONS -->
                            <td>
                                <button class="btn btn-info btn-squared btn-xs"
                                        style="opacity: 0.6;background: silver;border-color: silver "
                                        ng-click="showappt($index)">View
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- end: HISTORY TABLE -->
                    <div class="alert alert-info" ng-if="!patient.appointments">
                        No Appointments Found
                    </div>
                </div>

                <!-- start: SELECTED APPOITNMENT AREA -->
                <div class="col-md-4">
                    <div class="well" ng-show="showselectedapptdiv">
                        <h3 style="margin-top:0;" class="text-center">Selected Appointment</h3>
                        <table class="table">
                            <tr>
                                <td><strong>Date</strong></td>
                                <td>{[{ viewappt.startdate}]}</td>
                            </tr>
                            <tr>
                                <td><strong>Duration</strong></td>
                                <td>{[{ calcDiff(viewappt.appointment_starttime,viewappt.appointment_endtime) }]}
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Professional</strong></td>
                                <td>{[{ viewappt.dentist.first_name}]} {[{ viewappt.dentist.last_name}]}</td>
                            </tr>
                            <tr>
                                <td><strong>Status</strong></td>
                                <td>{[{ viewappt.status}]}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- start: SELECTED APPOITNMENT AREA -->

            </div>
            <!-- end: ROW -->

        </div>

    </div>
    <!-- end: APPOINTMENT SUMMARY -->

</div>
<!-- end: SUBVIEW FOR CALENDAR PAGE -->
