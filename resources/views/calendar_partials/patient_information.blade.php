<!-- start: TOP PATIENT INFORMATION -->
<div class="appt_patient_top panel" id="appointment_profile"
     style="background: white;margin-top: 15px;margin-bottom: 10px">

    <input id="patient_json" type="hidden" value="{[{ patient }]}">

    <div class="col-xs-12 col-sm-7 col-md-7">

        <!-- start: PATIENT FOTO -->
        <div class="patient_avatar" ng-if="patient">
            <div ng-if="patient.patient_profile_image">
                <img src="{{ url('/') }}/{[{ patient.patient_profile_image }]}" alt="Patient Image">
            </div>
            <div ng-if="!patient.patient_profile_image">
                <img src="{{ url('/') }}/images/anonymous.png" alt="Patient Image">
            </div>
        </div>
        <!-- end: PATIENT FOTO -->

        <!-- start: PATIENT INFO -->
        <div class="patient_details">

            <!-- start: NAME -->
            <h2 class="light_black" style="font-weight: lighter;opacity: 0.8;text-align:left;float:left;">
                {[{ patient.first_name }]} {[{ patient.last_name }]}
            </h2>
            <!-- end: NAME -->

            <!-- start: PATIENT OBS -->
            <label class="label label-warning"
                   style="opacity: 0.7;text-align:left;float:left;margin-top:8px;margin-left:8px;padding: 5px !important;margin-right: 5px"
                   ng-if="patient.vip == '1'">VIP</label>
            <label class="label label-info"
                   style="opacity: 0.7;text-align:left;float:left;margin-top:8px;margin-left:8px;padding: 5px !important;"
                   ng-if="patient.wheel_chair == '1'"><i class="fa fa-wheelchair"></i></label>
            <!-- end: PATIENT OBS -->
            <div class="clearfix"></div>

            <!-- start: SPECIALTY -->
            <div class="patient_specialty">
                    <span class="label label-default" ng-repeat="speciality in patient.specialties"
                          style="background: #{[{ speciality.color_code }]} !important;opacity: 0.7;letter-spacing: 1px !important;margin-right: 5px;">{[{ specialty.name }]}</span>
                <br>
            </div>
            <!-- end: SPECIALTY -->

            <!-- start: DENTAL INSURER -->
            <h5 style="padding-bottom: 5px">
                {[{ patient.has_dental_plan }]}
            </h5>
            <!-- end: DENTAL INSURER -->

            <!-- start: ADDRESS -->
            <h5>
                <i class="fa fa-map-marker fa-fw"></i>
                &nbsp;{[{ patient.address }]} {[{ patient.street_number }]}
                , {[{ patient.borough }]} , {[{ patient.city }]} {[{ patient.state }]}
            </h5>
            <!-- end: ADDRESS -->

            <!-- start: PHONE -->
            <h5>
                <i class="fa fa-phone fa-fw"></i>&nbsp; {[{ patient.phone_landline }]}
                <i class="fa fa-mobile fa-fw"></i>&nbsp; {[{ patient.phone_1 }]}
                <i class="fa fa-whatsapp fa-fw"></i>&nbsp; {[{ patient.whatsapp_number }]}
            </h5>
            <!-- end: PHONE -->

        </div>
        <!-- end: PATIENT INFO -->

    </div>

    <!-- start: BUTTONS AREA -->
    <div class="col-md-5">

        <div class="patient_actions">

            <div class="dropdown" style="display:inline-block;">

                <button class="btn btn-primary btn-profile dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    &nbsp;&nbsp;&nbsp; Opções &nbsp;&nbsp;&nbsp;
                    <span class="caret"></span>
                </button>

                <ul class="dropdown-menu appt_tabs_dropdown pull-right" aria-labelledby="dropdownMenu1"
                    style="opacity:0.8;">
                    <li><a href="#appointment-summary" aria-controls="appointment-summary" role="tab"
                           data-toggle="tab" class="appointment-summary"><i class="fa fa-list fa-fw"></i></small>
                            &nbsp; Appointment Timeline</a></li>
                    <li><a href="#appointment-details" aria-controls="appointment-details" role="tab"
                           data-toggle="tab"><i class="fa fa-calendar-o fa-fw"></i></small>&nbsp; Booking
                            Information</a></li>
                    <li class="hide"><a href="#appointment-information" aria-controls="appointment-information" role="tab"
                           data-toggle="tab" class="appointment-information"><i
                                    class="fa fa-info fa-fw"></i></small>&nbsp; Appointment Information</a></li>

                    <!-- <li><a href="#">Register Payment</a></li> -->
                    <li><a href="{{ url('/patients/') }}/{[{ patient.id }]}" target="_blank"><i
                                    class="fa fa-user fa-fw"></i></small>&nbsp; Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="delete-event">
                            <small><i class="fa fa-ban fa-fw"></i></small>
                            &nbsp; Excluír</a></li>
                </ul>

            </div>

        </div>

    </div>
    <!-- end: BUTTONS AREA -->

</div>
<!-- end: TOP PATIENT INFORMATION -->