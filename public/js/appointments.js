$(document).ready(function () {

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    // file input
    $("#input-id").fileinput({
        showCaption: false,
        allowedFileTypes: ['image'],
    });

    Main.init();
    SVExamples.init();
    Calendar.init();
    $('.fc-prev-button').css({"font-size": "200%"});
    $('.fc-next-button').css({"font-size": "200%"});
    $('.fc-day-header > span:first-child').after("<a class='getTodaysDate' href='#' data-toggle='tooltip' data-placement='bottom' title='Confirmar Agendamentos'><i class='fa fa-phone'></i></a>");
    // $('.fc-day-grid').hide();
    // $('hr[class="fc-widget-header"]').hide();

    //
    $(window).resize(function () {
        $('#full-calendar').fullCalendar('option', 'height', get_calendar_height());
    });


    $('body').on('click', '.fc-next-button,.fc-prev-button', function () {
        $('.fc-day-header > span:first-child').after("<a class='getTodaysDate' href='#' data-toggle='tooltip' data-placement='bottom' title='Confirmar Agendamentos'><i class='fa fa-phone'></i></a>");
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    })

    $('.myHover').on('click', function (e) {
        $posX = $(this).position().left,
            $posY = $(this).position().top;

        var offset = $(this).offset();
        // alert(e.pageX - offset.left);
        // alert(e.pageY - offset.top);
        var varx = (e.pageX - offset.left) - 7;
        var vary = (e.pageY - offset.top) - 7;
        $(this).append('<span class="tooth_issue temporary" style="left:' + varx + 'px;top:' + vary + 'px;"><i class="fa fa-circle"></i></span>');

        var filename = $(this).attr('id');
        var filename1 = $(this).attr('id');
        $(this).addClass('changed');
        $('#obs_odonto').addClass('myFocusIn');

        $('#toothForm').find('textarea').val('');
        $('#toothForm').find('.tooth_number').text(filename.replace(/\D+/g, ''));
        $('#toothForm').find('input[name=tooth_left]').val(varx + "px");
        $('#toothForm').find('input[name=tooth_top]').val(vary + "px");
        $('#toothForm').find('input[name=tooth_number]').val(filename.replace(/\D+/g, ''));
        $('#toothForm').find('input[name=tooth_type]').val(filename1.replace(/[^a-zA-Z]+/g, ''));
        $('#toothForm').find('input[name=id]').val('');

        $('#toothModal').modal('show');
    });

    $('#toothForm .modal-header .close').click(function () {
        $('.tooth_issue.temporary').remove();
    })

    //function to initiate bootstrap-timepicker
    $('.time-picker').timepicker();
    $('.date-picker').datepicker({autoclose: true});

    // APPOINTMENT PATIENT DROPDOWN GETTING PATIENTS
    $('.patient_name_dropdown').on("keyup", function () {
        $text = $(this).val();
        if ($text == '') {
            $('.getted_patient_id').val('');
            $('.patient_dropdown').remove();
            $('.appt_patient_top').addClass('hideDetails');
        }
        $thisVar = $(this);
        // doing ajax
        $.ajax({
            url: APP_URL + '/patients/getPatients',
            method: "POST",
            data: {"name": $text, "_token": csrf_token, "_method": "POST"},
            success: function (data) {
                if (data != 'error') {
                    $html = "<ul class='patient_dropdown'>";
                    $html += "<li><a href='javascript:void(0)' data-id='0' data-toggle='modal' data-target='#patientModal'>Cadastrar novo paciente</a></li>";
                    for ($i = 0; $i < data.length; $i++) {
                        $phone = data[$i].phone_1;
                        if ($phone == '') {
                            $phone = 'Não foi encontrado número de contato!';
                        }
                        $html += "<li data-json='" + JSON.stringify(data[$i]) + "' data-id='" + data[$i].id + "' data-telephone='" + data[$i].phone_landline + "'  data-mobile='" + data[$i].phone_1 + "' data-observation='" + data[$i].observation + "' data-name='" + data[$i].first_name + " " + data[$i].last_name + "'>" + data[$i].first_name + " " + data[$i].last_name + " <small>(" + $phone + ")</small></li>";
                    }
                    $html += "</ul>";
                    $thisVar.parent().parent().children('ul').remove();
                    $thisVar.parent().parent().append($html);
                } else {
                    $html = "<ul class='patient_dropdown'>";
                    for ($i = 0; $i < data.length; $i++) {
                        $phone = data[$i].phone_1;
                        if ($phone == '') {
                            $phone = 'Não foi encontrado número de contato!';
                        }
                        $html += "<li data-json='" + data + "' data-id='" + data[$i].id + "' data-telephone='" + data[$i].telephone + "'  data-mobile='" + data[$i].mobile + "' data-observation='" + data[$i].observation + "' data-name='" + data[$i].first_name + " " + data[$i].last_name + "' >" + data[$i].first_name + " " + data[$i].last_name + " <small>(" + $phone + ")</small></li>";
                    }
                    $html += "</ul>";
                }
            }
        });

        // form validation on patient Modal
        $("#registerPatient").validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertBefore($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertBefore($(element).closest('.form-group').children('div'));
                } else {
                    error.insertBefore(element);
                    // for other inputs, just perform default behavior
                }
            },
            // Specify the validation rules
            rules: {
                fname: "required",
                sname: "required",
                email: {

                    required: true,
                    email: true
                }
            },
            // Specify the validation error messages
            messages: {
                fname: "Please enter your first name",
                sname: "Please enter your last name",
                email: "Please enter a valid email address",
            },
            submitHandler: function (form) {
                //form.submit();
                var data1 = $("#registerPatient").serializeObject();
                $.ajax({
                    url: APP_URL + '/events/createPatient.php',
                    data: data1,
                    method: "POST",
                    success: function (data) {
                        console.log(data);
                        if (data.trim() === 'success') {
                            toastr.success('The event has been successfully deleted!');
                        }
                        if (data.trim() === 'error') {
                            toastr.error('Email já está cadastrado!');
                        }
                    }
                });

            }
        });
    });

    $('body').on('click', '.patient_dropdown li', function () {
        $data_id = $(this).attr('data-id');
        if ($data_id != "0") {
            $text = $(this).text();
            $('.patient_name_dropdown').val($(this).attr('data-name'));
            $('.patient_telephone').val($(this).attr('data-telephone'));
            $('.patient_mobile').val($(this).attr('data-mobile'));
            $('.patientObservation').val($(this).attr('data-observation'));
            $('.getted_patient_id').val($data_id);
            $('.patient_dropdown').remove();
            $scope = $(this).attr('data-json');
            $data = $.parseJSON($scope);

            angular.element(document.getElementById('appointment_profile')).scope().showData($data);
            $('.appt_patient_top').removeClass("hideDetails");
            return false;
        }
    })

    /*
     * loading model for the todays event
     * getting date from data attribute
     @ data-date
     *
     * running ajax command
     */

    $('body').on('click', '.getTodaysDate', function () {
        $.blockUI({
            message: '<i class="fa fa-spinner fa-spin"></i> Buscando Agenda ...'
        });

        $date = $(this).parent().attr('data-date');
        $dentist_id = $('#current_dentist_id').val();

        // Agendamentos Hoje
        $.ajax({
            url: APP_URL + '/calendar/getTodaysEvents',
            method: "POST",
            data: {"date": $date, "dentist_id": $dentist_id, "_token": csrf_token, "_method": "POST"},
            success: function (data) {
                $.unblockUI();
                if (data.status === 'success') {
                    $html = "<div class='appointment_daily_schedule'>";
                    $appointments = data.message;
                    for ($i = 0; $i < $appointments.length; $i++) {
                        $html += "<div class='call_block'><div class='col-md-7'><h3>" + $appointments[$i].patient.first_name + " " + $appointments[$i].patient.last_name + "</h3>";
                        $html += "<div class='information'><p><i class='fa fa-clock-o'></i> " + new Date($appointments[$i].start).toString('h:mm tt') + " </p>";
                        // MAKE SHOW SPECIALTY
                        $specId = $appointments[$i].specialty_id;
                        $spec = 'none';
                        switch($specId) {
                            case 1:
                                $spec = 'Diagnóstico'
                                break;
                            case 2:
                                $spec = 'Clinica Geral'
                                break;
                            case 3:
                                $spec = 'Radiologia'
                                break;
                            case 4:
                                $spec = 'Testes e Exames de Laboratório'
                                break;
                            case 5:
                                $spec = 'Prevenção'
                                break;
                            case 6:
                                $spec = 'Odontopediatria'
                                break;
                            case 7:
                                $spec = 'Dentística'
                                break;
                            case 8:
                                $spec = 'Endodontia'
                                break;
                            case 9:
                                $spec = 'Periodontia'
                                break;
                            case 10:
                                $spec = 'Prótese'
                                break;
                            case 11:
                                $spec = 'Cirurgia'
                                break;
                            case 12:
                                $spec = 'Ortodontia'
                                break;
                            case 13:
                                $spec = 'Implantodontia'
                                break;
                            default:
                                $spec = '-'
                        }
                        $html += "<p><i class='fa fa-info'></i> " + "<label class='label label-info'>" + $spec + "</label>" + " </p>";
                        // END
                        if($appointments[$i].patient.phone_landline == null)
                        {}
                        else {
                            $html += "<p><i class='fa fa-phone'></i> " + $appointments[$i].patient.phone_landline + " </p>";
                        }
                        if($appointments[$i].patient.phone_1 == null)
                        {}
                        else {
                            $html += "<p><i class='fa fa-phone'></i> " + $appointments[$i].patient.phone_1 + " </p>";
                        }
                        $html += "</div></div><div class='col-md-5'><select class='form-control selectpicker' data-selected='" + $appointments[$i].status + "' data-id = '" + $appointments[$i].id + "'><option value='1' selected='selected'>Agendado</option><option value='2'>Confirmado</option><option value='3'>Desmarcado</option><option value='4'>Falta</option><option value='5'>Finalizado</option></select></div><div class='clearfix'></div></div>";

                        //console.log($html);
                    }
                    $html += "</div>";
                    $('#todaysEvent').find('.modal-body').html($html);

                    $('#todaysEvent select').each(function () {
                        $val = $(this).attr('data-selected');
                        $(this).val($val);
                    })
                    $('#todaysEvent').modal('show');
                }
                if (data.status === 'error') {
                    toastr.error(data.message);
                }
            }
        });


        //#todaysEvent
    });

    $('body').on('change', '.appointment_daily_schedule select', function () {
        $.blockUI({
            message: '<i class="fa fa-spinner fa-spin"></i> Updating ...'
        });
        $id = $(this).attr('data-id');
        $val = $(this).val();
        var cEvents = $("#full-calendar").fullCalendar("clientEvents");
        var eventId = '';
        for (var i = 0; i < cEvents.length; i++) {
            if (cEvents[i]._id == $id) {
                cEvents[i].status = $val;
                $className = '';
                if ($val == '1') {
                    $className = "appointment-status-booked";
                }
                if ($val == '2') {
                    $className = "appointment-status-confirmed";
                }
                if ($val == '3') {
                    $className = "appointment-status-cancelled";
                }
                if ($val == '4') {
                    $className = "appointment-status-missed";
                }
                if ($val == '5') {
                    $className = "appointment-status-finished";
                }
                if ($val == '6') {
                    $className = "appointment-status-waiting";
                }
                cEvents[i].className = $className;
                console.log(cEvents[i]._id);
                eventId = cEvents[i];
                $.ajax({
                    url: APP_URL + '/calendar/updateStatus/' + $id,
                    method: "PUT",
                    data: {"_method": "PUT", '_token': csrf_token, 'status': $val},
                    success: function (data) {
                        $.unblockUI();
                        if (data.status == "success") {
                            $('#full-calendar').fullCalendar('updateEvent', cEvents[i]);
                            $("#full-calendar").fullCalendar("clientEvents")
                            $("#full-calendar").fullCalendar("refresh");
                            toastr.success(data.message);
                        }
                    }
                });
                return false;
            }
        }
        console.log(eventId);

    });

    $('body').on('click', '#contentAppointmentRightMenu li a', function () {
        $.blockUI({
            message: '<i class="fa fa-spinner fa-spin"></i> Atualizando ...'
        });
        $val = $(this).attr('data-id');
        $id = $("#contentAppointmentRightMenu").attr('data-id');

        var cEvents = $("#full-calendar").fullCalendar("clientEvents");
        var eventId = '';
        for (var i = 0; i < cEvents.length; i++) {
            if (cEvents[i]._id == $id) {
                cEvents[i].status = $val;
                $className = '';
                if ($val == '1') {
                    $className = "appointment-status-booked";
                }
                if ($val == '2') {
                    $className = "appointment-status-confirmed";
                }
                if ($val == '3') {
                    $className = "appointment-status-cancelled";
                }
                if ($val == '4') {
                    $className = "appointment-status-missed";
                }
                if ($val == '5') {
                    $className = "appointment-status-finished";
                }
                cEvents[i].className = $className;
                console.log(cEvents[i]._id);
                eventId = cEvents[i];
                $.ajax({
                    url: APP_URL + '/calendar/updateStatus/' + $id,
                    method: "PUT",
                    data: {"_method": "PUT", '_token': csrf_token, 'status': $val},
                    success: function (data) {
                        $.unblockUI();
                        if (data.status == "success") {
                            $('#contentAppointmentRightMenu').hide();
                            $('#full-calendar').fullCalendar('updateEvent', cEvents[i]);
                            $("#full-calendar").fullCalendar("clientEvents")
                            $("#full-calendar").fullCalendar("refresh");
                            toastr.success(data.message);
                        }
                    }
                });
                return false;
            }
        }
        console.log(eventId);

    });

    // adding document

    // changing dentist

    $('body').on('change', '#current_dentist_id', function () {
        $id = $(this).val();
        $url = APP_URL + "/calendar/" + $id;
        window.location = $url;
    })

    // SAVE QUICKPATIENT

    $("#addQuickPatient").validate({
        errorPlacement: function (error, element) { // render error placement for each input type
            if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                //$(element).closest('.form-group').addClass('has-error');
                $(element).closest('.form-group').append(error);
                //error.insertAfter($(element).closest('.form-group').children('div').children().last());
            } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                //error.insertAfter($(element).closest('.form-group').children('div'));
                error.insertAfter($(element).closest('.form-group').addClass('has-error'));
            } else {
                //$(element).closest('.form-group').addClass('has-error');
                $(element).closest('.form-group').append(error);
            }
        },
        rules: {
            first_name: {required: true},
            last_name: {required: true},
            phone_1: {required: true, number: true}
        },
        submitHandler: function (form) {
            var formData = $('#addQuickPatient').serializeObject();
            formData._method = "POST";
            formData._token = csrf_token;
            $.ajax({
                type: "POST",
                url: APP_URL + '/patients/saveQuickpatient',
                data: formData,
                success: function (data) {
                    if (data.status == 'success') {
                        toastr.success(data.message);
                        $('#patientModal').modal('hide');

                        $('#addQuickPatient')[0].reset();
                        // adding patient data
                        $text = $(this).text();
                        $('.patient_name_dropdown').val(data.first_name + " " + data.last_name);
                        $('.getted_patient_id').val(data.id);
                        $('.patient_dropdown').remove();

                        // adding data to angular
                        angular.element(document.getElementById('appointment_profile')).scope().showData(data.data);
                        $('.appt_patient_top').removeClass("hideDetails");

                    } else {
                        toastr.error(data.message);
                    }
                }
            });
            return false;
        }
    });

    // on blur hide patient dropdown
    $('.event-name').closest('.form-group').focusout(function () {
        // $('.patient_dropdown').hide();
    });


});
