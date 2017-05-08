<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]>
<html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('/images/favicon.png') }}" type="image/png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title}} | {{ config('app.name', 'Rapido') }}</title>
    @include('includes.stylesheets')


    <script src="{{ url('/') }}/plugins/angular/angular.min.js"></script>
    <script>
        var app = angular.module('myApp', []).config(function ($interpolateProvider) {
            $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
        });
        app.controller('MyController', function ($scope) {
            $scope.patient = '';
            $scope.showData = function (data) {
                $scope.patient = data;
                $scope.$apply();
            }

            $scope.calcDiff = function (firstDate, secondDate) {
                return moment(secondDate).diff(moment(firstDate), 'minutes') + " Minutes";
            }
            $scope.showselectedapptdiv = false;

            $scope.viewappt = '';
            $scope.showappt = function (json) {
                var item = $scope.patient.appointments[json];
                //console.log(item);
                $scope.viewappt = item;
                $scope.showselectedapptdiv = true;
            }
        });
    </script>
    <!-- Scripts -->
    <script type="text/javascript">
        window.Laravel = '<?php use Illuminate\Support\Facades\Auth;echo json_encode(['csrfToken' => csrf_token(),]); ?>';
        var csrf_token = '{{ csrf_token() }}';
        var APP_URL = '{{ url('/') }}';
    </script>
    <script type="text/javascript">
        var mainCalendarEvents = '';
    </script>

</head>
<body ng-app="myApp">

@include('includes.topbar')

<div class="main-wrapper">
    @include('includes.header')
    @include('includes.nav')
    @yield('content')
</div>

<!-- start: CALENDER RIGHT CONTEXT MENU -->
<ul id="contentAppointmentRightMenu" class="dropdown-menu" aria-labelledby="dropdownMenu2" style="display:none;">
    <li><span><i class="fa fa-square fa-fw" style="margin: 5px;opacity:0.7;color:#5bc0de;"></i>
            <a href="#" data-id="1" style="color: #737373">Agendado</a></span>
    </li>
    <li><span><i class="fa fa-square fa-fw" style="margin: 5px;opacity:0.7;color:#5cb85c;"></i>
            <a href="#" data-id="2" style="color: #737373">Confirmado</a></span>
    </li>
    <li><span><i class="fa fa-square fa-fw" style="margin: 5px;opacity:0.7;color:#f0ad4e;"></i>
            <a href="#" data-id="3" style="color: #737373">Desmarcado</a></span>
    </li>
    <li><span><i class="fa fa-square fa-fw" style="margin: 5px;opacity:0.7;color:#d9534f;"></i>
            <a href="#" data-id="4" style="color: #737373">Falta</a></span>
    </li>
    <li><span><i class="fa fa-square fa-fw" style="margin: 5px;opacity:0.7;color:#5e5e5e;"></i>
            <a href="#" data-id="5" style="color: #737373">Finalizado</a></span>
    </li>
</ul>
<!-- end: CALENDER RIGHT CONTEXT MENU -->

<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="{{ url('/') }}/plugins/respond.min.js"></script>
<script src="{{ url('/') }}/plugins/excanvas.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/jQuery/jquery-1.11.1.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->


<script type="text/javascript" src="{{ url('/') }}/plugins/jQuery/jquery-2.1.1.min.js"></script>

<!--<![endif]-->
<script type="text/javascript" src="{{ url('/') }}/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/datejs/datejs.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/iCheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/moment/min/moment.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootbox/bootbox.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/jquery.appear/jquery.appear.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/jquery-cookie/jquery.cookie.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/velocity/jquery.velocity.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<script type="text/javascript" src="{{ url('/') }}/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/jquery-mockjax/jquery.mockjax.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/toastr/toastr.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/fullcalendar/fullcalendar-rightclick.js"></script>

<script type="text/javascript" src='{{ url('/') }}/plugins/fullcalendar/locale/pt-br.js'></script>
<script type="text/javascript"
        src="{{ url('/') }}/plugins/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/webcam/webcam.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"
        src="{{ url('/') }}/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/truncate/jquery.truncate.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/summernote/dist/summernote.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/subview.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/subview-examples.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript" src="{{ url('/') }}/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="{{ url('/') }}/js/calendar-functions.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/ajax-actions.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/fileinput/js/fileinput.min.js"></script>


<script type="text/javascript">

    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    function setup() {
        Webcam.attach('#my_camera');
    }

    function take_snapshot() {
        // take snapshot and get image data
        Webcam.snap(function (data_uri) {
            console.log(data_uri);
        });
    }

    $(document).click(function (e) {

        // check that your clicked
        // element has no id=info
        if (e.button == 2) {
        } else {
            if (e.target.id != 'contentAppointmentRightMenu') {
                $("#contentAppointmentRightMenu").hide();
            }
        }
    });


    //function to calculate window height
    function get_calendar_height() {
        return $(window).height() - 135;
    }

    $.fn.serializeObject = function () {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    var tArray = <?php print_r($treatments);?>;

    $parsedArray = JSON.parse('<?php print_r($calendarArray);?>');
    var mainEventObject = [];
    Date.prototype.addHours = function (h) {
        this.setHours(this.getHours() + h);
        return this;
    }

    var Calendar = function () {
        "use strict";
        var dateToShow, calendar, demoCalendar, eventClass, eventCategory, subViewElement, subViewContent, $eventDetail;
        var defaultRange = new Object;
        defaultRange.start = moment();
        defaultRange.end = moment().add(1, 'days');
        //Calendar
        var setFullCalendarEvents = function () {
            var date = new Date();
            dateToShow = date;
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            demoCalendar = $parsedArray;
        };
        //function to initiate Full Calendar
        var runFullCalendar = function () {
            $(".add-event").off().on("click", function () {
                subViewElement = $(this);
                subViewContent = subViewElement.attr('href');
                $.subview({
                    content: subViewContent,
                    onShow: function () {
                        editFullEvent();
                    },
                    onHide: function () {
                        hideEditEvent();
                    }
                });
            });

            $('#event-categories div.event-category').each(function () {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };
                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 50 //  original position after the drag
                });
            });


            /* initialize the calendar
             -----------------------------------------------------------------*/
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var calEventDiff = 60;
            @if(isset($agendaSettings))
                calEventDiff = {{ $agendaSettings->interval }};
            @else
                calEventDiff = 15;
            @endif;
            var form = '';
            $('#full-calendar').fullCalendar({
                dayRightclick: function (date, jsEvent, view) {
                    //  alert('a day has been rightclicked!');
                    //  // Prevent browser context menu:
                    //  return false;
                },
                eventRightclick: function (event, jsEvent, view) {
                    if (event.className[0] == 'holiday_event') {
                    } else {
                        $('#contentAppointmentRightMenu').attr('data-id', event.id);
                        $('#contentAppointmentRightMenu').show();
                    }
                    return false;
                },
                buttonIcons: {
                    prev: 'fa fa-caret-left',
                    next: 'fa fa-caret-right'
                },
                header: {
                    left: '',
                    center: 'prev,title,next',
                    right: 'today,agendaWeek,agendaDay,listWeek'
                },
                defaultView: 'agendaWeek',
                slotDuration: '00:15:00',
                height: get_calendar_height(),
                timezone: 'local',
                events: demoCalendar,
                lang: 'pt-br',
                firstDay: 1,
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                droppable: false, // this allows things to be dropped onto the calendar !!!
                eventOverlap: false,
                selectable: true,
                selectHelper: true,
                columnFormat: "ddd D, MMM",
                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');

                    var $categoryClass = $(this).attr('data-class');
                    var $category = $categoryClass.replace("event-", "").toLowerCase().replace(/\b[a-z]/g, function (letter) {
                        return letter.toUpperCase();
                    });
                    // we need to copy it, so that multiple events don't have a reference to the same object

                    var newEvent = new Object;
                    newEvent.title = originalEventObject.title;
                    newEvent.start = new Date(date);
                    newEvent.end = moment(new Date(date)).add('hours', 1);
                    newEvent.allDay = true;
                    newEvent.className = $categoryClass;
                    newEvent.category = $category;
                    newEvent.content = '';
                    //newEvent.backgroundColor='green!important';
                    //newEvent.textColor='#fff!important',

                    $('#full-calendar').fullCalendar('renderEvent', newEvent, true);

                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                },
                select: function (start, end, allDay) {
                    var dDiff = moment(end).diff(start, 'minutes');
                    $("#contentAppointmentRightMenu").hide();
                    defaultRange.start = moment(start);

                    @if(isset($agendaSettings))
                    if (dDiff > {{ $agendaSettings->interval }}) {
                        defaultRange.end = moment(end);
                    } else {
                        defaultRange.end = moment(start).add({{ $agendaSettings->interval }}, 'minutes');
                    }
                    @else
                        defaultRange.end = moment(end);
                    @endif
                $.subview({
                        content: "#newFullEvent",
                        onShow: function () {
                            editFullEvent();
                        },
                        onHide: function () {
                            hideEditEvent();
                        }
                    });
                },
                eventClick: function (calEvent, jsEvent, view) {
                    return false;
                    if (calEvent.className[0] == 'holiday_event') {
                        return false;
                    }
                    $("#contentAppointmentRightMenu").hide();
                    dateToShow = calEvent.start;
                    // $.subview({
                    //      content: "#readFullEvent",
                    //      startFrom: "right",
                    //      onShow: function() {
                    //          readFullEvents(calEvent._id);
                    //      }
                    // });


                    // opening event
                    subViewContent = "#newFullEvent";
                    $.subview({
                        content: subViewContent,
                        onShow: function () {
                            editFullEvent(calEvent._id);
                        },
                        onHide: function () {
                            hideEditEvent();
                        }
                    });


                },
                eventDrop: function (event, delta, revertFunc) {
                    console.log('Event DRAG n DROP called');
                    function isOverlapping(event) {
                        var eventStart = moment(event.start).format('X');
                        var eventEnd = moment(event.end).format('X');

                        // "calendar" on line below should ref the element on which fc has been called
                        var array = $("#full-calendar").fullCalendar("clientEvents");
                        var i = 0;
                        for (i = 0; i < array.length; i++) {
                            if (event.id == array[i].id) {
                            }
                            else {
                                if ((array[i].starttimestamp < eventStart
                                    && eventStart < array[i].endtimestamp)
                                    || (array[i].starttimestamp < eventEnd
                                    && eventEnd < array[i].endtimestamp)) {
                                    return true;
                                }
                            }
                        }
                        return false;
                    }

                    var resultEvent = isOverlapping(event);

                    if (resultEvent === false) {
                        if (confirm("Are you sure about this change?")) {
                            event.starttimestamp = moment(event.start).format('X');
                            event.endtimestamp = moment(event.end).format('X');
                            $('#calendar').fullCalendar('updateEvent', event);
                            $.blockUI({
                                message: '<i class="fa fa-spinner fa-spin"></i> Updating this event ...'
                            });

                            console.log('Event DRAG n DROP AJAX called')
                            $.ajax({
                                url: APP_URL + '/calendar/' + event.id,
                                data: {
                                    "appointment_type_id": event.appointment_type_id,
                                    "specialty_id": event.specialty_id,
                                    "observation": event.observation,
                                    "starttimestamp": event.starttimestamp,
                                    "endtimestamp": event.endtimestamp,
                                    "appointment_status_id": event.appointment_status_id,
                                    "start": new Date(event.start),
                                    "startdate": new Date(event.start).toString('yyyy-M-dd'),
                                    "end": new Date(event.end),
                                    "_method": "PUT",
                                    "_token": csrf_token
                                },
                                method: "POST",
                                success: function (data) {
                                    $.unblockUI();
                                    //$.hideSubview();
                                    //console.log(data);
                                    if (data.status === 'success') {
                                        toastr.success(data.message);
                                        //$.hideSubview();
                                    }
                                }
                            });
                            return false;
                        } else {
                            revertFunc();
                        }
                    } else {
                        alert('This Slot already have an Event!');
                        revertFunc();
                    }
                },
                eventResize: function (event, delta, revertFunc) {
                    console.log('Entered resize method')
                    function isOverlapping(event) {
                        var eventStart = moment(event.start).format('X');
                        var eventEnd = moment(event.end).format('X');

                        // "calendar" on line below should ref the element on which fc has been called
                        var array = $("#full-calendar").fullCalendar("clientEvents");
                        var i = 0;
                        for (i = 0; i < array.length; i++) {
                            if (event.id == array[i].id) {
                            }
                            else {
                                if ((array[i].starttimestamp < eventStart && eventStart < array[i].endtimestamp) || (array[i].starttimestamp < eventEnd && eventEnd < array[i].endtimestamp)) {
                                    return true;
                                }
                            }
                        }
                        return false;
                    }

                    var resultEvent = isOverlapping(event);

                    if (resultEvent === false) {
                        var d1 = moment(event.end, "DD/MM/YYYY HH:mm:ss")
                        var d2 = moment(event.start, "DD/MM/YYYY HH:mm:ss")
                        var hrs = d1.diff(d2, 'minutes');
                        if (hrs <= calEventDiff) {
                            alert("Minimum interval can be of " + calEventDiff + " Minutes");
                            revertFunc();
                            return false;
                        }
                        if (confirm("Are you sure about this change?")) {
                            event.starttimestamp = moment(event.start).format('X');
                            event.endtimestamp = moment(event.end).format('X');
                            $('#calendar').fullCalendar('updateEvent', event);
                            $.blockUI({
                                message: '<i class="fa fa-spinner fa-spin"></i> Updating this event ...'
                            });
                            //console.log(event);

                            console.log('Resize appointment AJAX called')
                            $.ajax({
                                url: APP_URL + '/calendar/' + event.id,
                                data: {
                                    "appointment_type_id": event.appointment_type_id,
                                    "specialty_id": event.specialty_id,
                                    "observation": event.observation,
                                    "starttimestamp": event.starttimestamp,
                                    "endtimestamp": event.endtimestamp,
                                    "appointment_status_id": event.appointment_status_id,
                                    "start": new Date(event.start),
                                    "startdate": new Date(event.start).toString('yyyy-M-dd'),
                                    "end": new Date(event.end),
                                    "_method": "PUT",
                                    "_token": csrf_token
                                },
                                method: "POST",
                                success: function (data) {
                                    $.unblockUI();
                                    //console.log(data);
                                    if (data.status === 'success') {
                                        //$.hideSubview();
                                        toastr.success(data.message);
                                    }
                                }
                            });
                            return false;
                        } else {
                            revertFunc();
                        }
                    } else {
                        alert('This Slot already have an Event!');
                        revertFunc();
                    }
                },

                @if(isset($agendaSettings))
                eventConstraint: "businessHours",
                selectConstraint: "businessHours",
                businessHours: [
                    {
                        start: '{{ $agendaSettings->start }}',
                        end: '{{ $agendaSettings->end }}',
                        @if(isset($agendaSettings->days))
                        dow: [{{ implode(',', $agendaSettings->days)}}]
                        @else
                        dow: ["1", "2", "3", "4", "5", "6", "0"]
                        @endif
                    }
                ],
                scrollTime: '{{ $agendaSettings->start }}',
                minTime: "{{ $agendaSettings->start }}",
                maxTime: "{{ $agendaSettings->end }}",
                @if(isset($agendaSettings->days))
                hiddenDays: [{{ implode(',', array_diff(array(1,2,3,4,5,6,0),$agendaSettings->days)) }}],
                @endif
                        @endif
                allDaySlot: false,
                eventRender: function (event, element, view) {

                    var calendar = $('#full-calendar').fullCalendar('getCalendar');
                    var view = calendar.view;
                    var start = moment(view.start._d).format('YYYY-MM-DD');
                    var end = moment(view.end._d).format('YYYY-MM-DD');

                    $("thead").find("[data-date='" + start + "']").append("");

                    if (event.className[0] == 'holiday_event') {
                    } else {

                        // checkif the appointment is booked by r
                        if (event.booked_by == 'receptionist') {
                            element.find('.fc-time').append('<i class="fa fa-bell pull-right" data-toggle="tooltip" data-placement="left" title="Booked By Receptionist"></i>');
                        }

                        //adding birthday
                        // if(event.dob != ''){
                        // 	if(moment().format('DD/MM') == (event.dob).substring(0, (event.dob).length - 5)){
                        // 		element.find('.fc-time').append(' <i class="fa fa-calendar pull-right" data-toggle="tooltip" data-placement="left" title="User Birthday"></i> ');
                        // 	}
                        // }
                        element.find('.fc-time').append('<i class="fa fa-pencil" data-id="' + event.id + '"></i>');
                        element.find('.fc-time').prepend('<i class="fa fa-clock-o" data-id="' + event.id + '"></i>');


                    }

                },
                eventAfterAllRender: function (event, element, view) {
                    var calendar = $('#full-calendar').fullCalendar('getCalendar');
                    var view = calendar.view;
                    var start = moment(view.start._d).format('YYYY-MM-DD');
                    var end = moment(view.end._d).format('YYYY-MM-DD');

                    var daysCount = [start,
                        moment(start, "YYYY-MM-DD").add(1, 'days').format('YYYY-MM-DD'),
                        moment(start, "YYYY-MM-DD").add(2, 'days').format('YYYY-MM-DD'),
                        moment(start, "YYYY-MM-DD").add(3, 'days').format('YYYY-MM-DD'),
                        moment(start, "YYYY-MM-DD").add(4, 'days').format('YYYY-MM-DD'),
                        moment(start, "YYYY-MM-DD").add(5, 'days').format('YYYY-MM-DD'),
                        moment(start, "YYYY-MM-DD").add(6, 'days').format('YYYY-MM-DD'),
                        moment(start, "YYYY-MM-DD").add(0, 'days').format('YYYY-MM-DD'),
                        end];


                    for (var j = 0; j < daysCount.length; j++) {
                        var count = 0;
                        for (var i = 0; i < demoCalendar.length; i++) {
                            if ((moment(demoCalendar[i].start).format('YYYY-MM-DD')) == daysCount[j]) {
                                count++;
                            }
                        }
                        $("thead").find("[data-date='" + daysCount[j] + "'] .appt_count").remove();
                        $("thead").find("[data-date='" + daysCount[j] + "']").prepend("<span class='badge badge-primary appt_count'>" + count + "</span>");

                    }

                }
            });
            demoCalendar = $("#full-calendar").fullCalendar("clientEvents");
        };


        // editing calendar event
        /**
         * @param data-id
         * getting from fc-event in events
         */

        $('body').on('click', '.fc-time .fa-pencil', function () {
            var id = $(this).attr('data-id');

            var calEvent = $("#full-calendar").fullCalendar('clientEvents', id)[0];
            if (calEvent.className[0] == 'holiday_event') {
                return false;
            }
            $("#contentAppointmentRightMenu").hide();
            dateToShow = calEvent.start;
            // opening event
            subViewContent = "#newFullEvent";
            $.subview({
                content: subViewContent,
                onShow: function () {
                    editFullEvent(calEvent._id);
                },
                onHide: function () {
                    hideEditEvent();
                }
            });
        })


        var editFullEvent = function (el) {
            $('body').on('click', '.event-holiday', function () {
                return false;
            });
            $(".close-new-event").off().on("click", function () {
                $(".back-subviews").trigger("click");
            });
            $(".form-full-event .help-block").remove();
            $(".form-full-event .form-group").removeClass("has-error").removeClass("has-success");

            if (typeof el == "undefined") {
                // hiding other tabs
                $('.new-event-tabs > li').hide();
                $('.new-event-tabs > li.active').toggleClass('active');
                $('.new-event-tabs > li:first-child').addClass('active');
                $('.new-event-tabs > li:first-child').show();

                $('#newFullEvent .tab-content > div').removeClass('active');
                $('#newFullEvent .tab-content > div:first-child').addClass('active');

                $('.event-range-date').removeAttr('disabled');
                $(".form-full-event")[0].reset();
                $("#arrivedBlock").hide();

                /* hidding patient details */
                $('.appt_patient_top').addClass('hideDetails');
                $('.appt_summary').hide();


                $(".form-full-event .event-name").closest('.input-group').show();
                $(".form-full-event .event-real-name").hide();
                $(".form-full-event .all-day").bootstrapSwitch('state', false);
                $('.form-full-event .all-day-range').hide();
                $(".form-full-event .event-start-date").val(defaultRange.start);
                $(".form-full-event .event-end-date").val(defaultRange.end);

                $('.form-full-event .no-all-day-range .event-range-date').val(moment(defaultRange.start).format('MM/DD/YYYY h:mm A') + ' - ' + moment(defaultRange.end).format('MM/DD/YYYY h:mm A'))
                    .daterangepicker({
                        startDate: defaultRange.start,
                        endDate: defaultRange.end,
                        timePicker: true,
                        timePickerIncrement: 15,
                        format: 'MM/DD/YYYY h:mm A'
                    });

                $('.form-full-event .all-day-range .event-range-date').val(moment(defaultRange.start).format('MM/DD/YYYY') + ' - ' + moment(defaultRange.end).format('MM/DD/YYYY'))
                    .daterangepicker({
                        startDate: defaultRange.start,
                        endDate: defaultRange.end
                    });

                $('.form-full-event .event-categories option').filter(function () {
                    return ($(this).text() == "Generic");
                }).prop('selected', true);
                $('.form-full-event .event-categories').selectpicker('render');
                // $eventDetail.code($eventDetail.attr("placeholder"));

                defaultRange.start = moment();
                defaultRange.end = moment().add(1, 'days');

            } else {
                // activating other tabs
                $('.new-event-tabs > li').show();
                $('.event-range-date').attr('disabled', 'true');
                $('#arrivedBlock').show();
                $('.appt_summary').show();
                $(".form-full-event").find('.event-id').val(el);


                //$('.appointment-summary').tab('show');
                // $('.new-event-tabs li:last-child').addClass('active');
                // $('.new-event-tabs li:last-child').children('a').trigger('click');

                for (var i = 0; i < demoCalendar.length; i++) {
                    if (demoCalendar[i]._id == el) {
                        console.log('Every appointment loaded:')
                        console.log(demoCalendar);
                        angular.element(document.getElementById('appointment_profile')).scope().showData(demoCalendar[i].patient);
                        $('.appt_patient_top').removeClass("hideDetails");
                        $(".form-full-event").find('.event-id').val(el);
                        $(".form-full-event .event-name").val(demoCalendar[i].title);
                        $(".form-full-event .event-name").closest('.input-group').hide();
                        $(".form-full-event .patient_dropdown").hide();
                        $(".form-full-event .event-real-name").val(demoCalendar[i].title);
                        $(".form-full-event .event-real-name").show();
                        $(".form-full-event .all-day").bootstrapSwitch('state', demoCalendar[i].allDay);
                        $(".form-full-event .patient_telephone").val(demoCalendar[i].patient_telephone);
                        $(".form-full-event .patient_mobile").val(demoCalendar[i].patient_mobile);
                        $(".form-full-event .patientObservation").val(demoCalendar[i].patient_observation);
                        $(".form-full-event .all-day").bootstrapSwitch('state', demoCalendar[i].allDay);
                        $(".form-full-event .event-start-date").val(moment(demoCalendar[i].start));
                        $(".form-full-event .event-end-date").val(moment(demoCalendar[i].end));
                        if (typeof $('.form-full-event .no-all-day-range .event-range-date').data('daterangepicker') == "undefined") {
                            $('.form-full-event .no-all-day-range .event-range-date').val(moment(demoCalendar[i].start).format('MM/DD/YYYY h:mm A') + ' - ' + moment(demoCalendar[i].end).format('MM/DD/YYYY h:mm A'))
                                .daterangepicker({
                                    startDate: moment(moment(demoCalendar[i].start)),
                                    endDate: moment(moment(demoCalendar[i].end)),
                                    timePicker: true,
                                    timePickerIncrement: 10,
                                    format: 'MM/DD/YYYY h:mm A'
                                });

                            $('.form-full-event .all-day-range .event-range-date').val(moment(demoCalendar[i].start).format('MM/DD/YYYY') + ' - ' + moment(demoCalendar[i].end).format('MM/DD/YYYY'))
                                .daterangepicker({
                                    startDate: moment(demoCalendar[i].start),
                                    endDate: moment(demoCalendar[i].end)
                                });
                        } else {
                            $('.form-full-event .no-all-day-range .event-range-date').val(moment(demoCalendar[i].start).format('MM/DD/YYYY h:mm A') + ' - ' + moment(demoCalendar[i].end).format('MM/DD/YYYY h:mm A'))
                                .data('daterangepicker').setStartDate(moment(moment(demoCalendar[i].start)));
                            $('.form-full-event .no-all-day-range .event-range-date').data('daterangepicker').setEndDate(moment(moment(demoCalendar[i].end)));
                            $('.form-full-event .all-day-range .event-range-date').val(moment(demoCalendar[i].start).format('MM/DD/YYYY') + ' - ' + moment(demoCalendar[i].end).format('MM/DD/YYYY'))
                                .data('daterangepicker').setStartDate(demoCalendar[i].start);
                            $('.form-full-event .all-day-range .event-range-date').data('daterangepicker').setEndDate(demoCalendar[i].end);
                        }

                        if (demoCalendar[i].category == "" || typeof demoCalendar[i].category == "undefined") {
                            eventCategory = "Generic";
                        } else {
                            eventCategory = demoCalendar[i].category;
                        }
                        $('.form-full-event .event-categories option').filter(function () {
                            return ($(this).text() == eventCategory);
                        }).prop('selected', true);
                        $('.form-full-event .event-categories').selectpicker('render');
                        //   if (typeof demoCalendar[i].content !== "undefined" && demoCalendar[i].content !== "") {
                        //       $eventDetail.code(demoCalendar[i].content);
                        //   } else {
                        //       $eventDetail.code($eventDetail.attr("placeholder"));
                        //   }

                        // selecting options
                        // selecting appointment ID
                        $('.form-full-event .appointment_type').val(demoCalendar[i].appointment_type_id);
                        // selecting treatment_type ID
                        $('.form-full-event .treatment_type').val(demoCalendar[i].specialty_id);
                        // selecting appointment status
                        $('.form-full-event .appointment_type_status').val(demoCalendar[i].appointment_status_id);

                        $('.form-full-event').find('.selectpicker').selectpicker('refresh');

                        // adding appointment observation and patient
                        $('.form-full-event .appointmentObservation').val(demoCalendar[i].observation);
                        $('.form-full-event .patientObservation').val(demoCalendar[i].patient_observation);

                        // appointment treatment block
                        appointmentTreatment(demoCalendar[i]);

                        // appointment photoDocumentation
                        photoDocumentation(demoCalendar[i]);

                        // appointment Quotation
                        quotationContent(demoCalendar[i]);

                        // appointment pictogram
                        pictogram(demoCalendar[i]);

                        // issue exam
                        issueExam(demoCalendar[i]);

                        // appointment Summary
                        //appointmentSummary(demoCalendar[i]);

                    }
                }

                // trigerring summary tab
                $('a[href="#appointment-summary"]').tab('show');
            }
            $('.form-full-event .all-day').bootstrapSwitch();

            $('.form-full-event .all-day').on('switchChange.bootstrapSwitch', function (event, state) {
                $(".daterangepicker").hide();
                var startDate = moment($("#newFullEvent").find(".event-start-date").val());
                var endDate = moment($("#newFullEvent").find(".event-end-date").val());
                if (state) {
                    $("#newFullEvent").find(".no-all-day-range").hide();
                    $("#newFullEvent").find(".all-day-range").show();
                    $("#newFullEvent").find('.all-day-range .event-range-date').val(startDate.format('MM/DD/YYYY') + ' - ' + endDate.format('MM/DD/YYYY')).data('daterangepicker').setStartDate(startDate);
                    $("#newFullEvent").find('.all-day-range .event-range-date').data('daterangepicker').setEndDate(endDate);
                } else {
                    $("#newFullEvent").find(".no-all-day-range").show();
                    $("#newFullEvent").find(".all-day-range").hide();
                    $("#newFullEvent").find('.no-all-day-range .event-range-date').val(startDate.format('MM/DD/YYYY h:mm A') + ' - ' + endDate.format('MM/DD/YYYY h:mm A')).data('daterangepicker').setStartDate(startDate);
                    $("#newFullEvent").find('.no-all-day-range .event-range-date').data('daterangepicker').setEndDate(endDate);
                }

            });
            $('.form-full-event .event-range-date').on('apply.daterangepicker', function (ev, picker) {
                $(".form-full-event .event-start-date").val(picker.startDate);
                $(".form-full-event .event-end-date").val(picker.endDate);
            });

            /*
             * DELETING EVENT
             */
            $(".delete-event").data("event-id", el);
            $(".delete-event").off().on("click", function () {
                el = $(this).data("event-id");
                bootbox.confirm("Are you sure to cancel?", function (result) {
                    if (result) {
                        $.blockUI({
                            message: '<i class="fa fa-spinner fa-spin"></i> Deleting this event ...'
                        });

                        console.log('DELETE appointment AJAX called');
                        $.ajax({
                            url: APP_URL + '/calendar/' + el,
                            data: {id: el, "_method": "DELETE", "_token": csrf_token},
                            method: "POST",
                            success: function (data) {
                                $.unblockUI();
                                //console.log(data);
                                if (data.trim() === 'success') {
                                    $('#full-calendar').fullCalendar('removeEvents', el);
                                    demoCalendar = $("#full-calendar").fullCalendar("clientEvents");
                                    $.hideSubview();
                                    toastr.success('The event has been successfully deleted!');
                                }
                            }
                        });

                    }
                });
            });
        };
        var readFullEvents = function (el) {

            $(".edit-event").off().on("click", function () {

                subViewElement = $(this);
                subViewContent = subViewElement.attr('href');
                $.subview({
                    content: subViewContent,
                    onShow: function () {
                        editFullEvent(el);
                    },
                    onHide: function () {
                        hideEditEvent();
                    }
                });
            });


            for (var i = 0; i < demoCalendar.length; i++) {
                if (demoCalendar[i]._id == el) {

                    $("#readFullEvent .event-allday").hide();
                    $("#readFullEvent .event-end").empty().hide();

                    $("#readFullEvent .event-title").empty().text(demoCalendar[i].title);
                    if (demoCalendar[i].className == "" || typeof demoCalendar[i].className == "undefined") {
                        eventClass = "event-generic";
                    } else {
                        eventClass = demoCalendar[i].className;
                    }
                    if (demoCalendar[i].category == "" || typeof demoCalendar[i].category == "undefined") {
                        eventCategory = "Generic";
                    } else {
                        eventCategory = demoCalendar[i].category;
                    }

                    $("#readFullEvent .event-category")
                        .empty()
                        .removeAttr("class")
                        .addClass("event-category " + eventClass)
                        .text(demoCalendar[i].treatmentType);
                    if (demoCalendar[i].allDay) {
                        $("#readFullEvent .event-allday").show();
                        $("#readFullEvent .event-start").empty().html("<p>Start:</p> <div class='event-day'><h2>" + moment(demoCalendar[i].start).format('DD') + "</h2></div><div class='event-date'><h3>" + moment(demoCalendar[i].start).format('dddd') + "</h3><h4>" + moment(demoCalendar[i].start).format('MMMM YYYY') + "</h4></div>");
                        if (demoCalendar[i].end !== null) {
                            if (moment(demoCalendar[i].end).isValid()) {
                                $("#readFullEvent .event-end").show().html("<p>End:</p> <div class='event-day'><h2>" + moment(demoCalendar[i].end).format('DD') + "</h2></div><div class='event-date'><h3>" + moment(demoCalendar[i].end).format('dddd') + "</h3><h4>" + moment(demoCalendar[i].end).format('MMMM YYYY') + " </h4></div>");
                            }
                        }
                    } else {

                        $("#readFullEvent .event-start").empty().html("<p>Start:</p> <div class='event-day'><h2>" + moment(demoCalendar[i].start).format('DD') + "</h2></div><div class='event-date'><h3>" + moment(demoCalendar[i].start).format('dddd') + "</h3><h4>" + moment(demoCalendar[i].start).format('MMMM YYYY') + "</h4></div> <div class='event-time'><h3><i class='fa fa-clock-o'></i> " + moment(demoCalendar[i].start).format('h:mm A') + "</h3></div>");
                        if (demoCalendar[i].end !== null) {
                            if (moment(demoCalendar[i].end).isValid()) {
                                $("#readFullEvent .event-end").show().html("<p>End:</p> <div class='event-day'><h2>" + moment(demoCalendar[i].end).format('DD') + "</h2></div><div class='event-date'><h3>" + moment(demoCalendar[i].end).format('dddd') + "</h3><h4>" + moment(demoCalendar[i].end).format('MMMM YYYY') + "</h4></div> <div class='event-time'><h3><i class='fa fa-clock-o'></i> " + moment(demoCalendar[i].end).format('h:mm A') + "</h3></div>");
                            }
                        }
                    }

                    $("#readFullEvent .event-content").empty().html(demoCalendar[i].content);

                    break;
                }

            }

        };

        var runFullCalendarValidation = function (el) {
            var formEvent = $('.form-full-event');
            var errorHandler2 = $('.errorHandler', formEvent);
            var successHandler2 = $('.successHandler', formEvent);


            formEvent.validate({
                errorElement: "span", // contain the error msg in a span tag
                errorClass: 'help-block',
                errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                        error.insertAfter($(element).closest('.form-group').children('div').children().last());
                    } else if (element.parent().hasClass("input-icon")) {

                        error.insertAfter($(element).parent());
                    } else {
                        error.insertAfter(element);
                        // for other inputs, just perform default behavior
                    }
                },
                ignore: "",
                rules: {
                    eventName: {
                        minlength: 1,
                        required: true
                    },
                    eventStartDate: {
                        required: true,
                        date: true
                    },
                    eventEndDate: {
                        required: true,
                        date: true
                    },
                    patient_id: {
                        required: true
                    }
                },
                messages: {
                    eventName: "Por favor selecione paciente primeiro",
                    patient_id: "È necessário selecionar paciente primeiro!",
                },
                invalidHandler: function (event, validator) { //display error alert on form submit
                    successHandler2.hide();
                    errorHandler2.show();
                },
                highlight: function (element) {
                    $(element).closest('.help-block').removeClass('valid');
                    // display OK icon
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                    // add the Bootstrap error class to the control group
                },
                unhighlight: function (element) { // revert the change done by hightlight
                    $(element).closest('.form-group').removeClass('has-error');
                    // set error class to the control group
                },
                success: function (label, element) {
                    label.addClass('help-block valid');
                    // mark the current input as valid and display OK icon
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
                },
                submitHandler: function (form) {
                    console.log('You have SAVED an appointment and called AJAX to save it to DB')
                    var formD = JSON.parse(JSON.stringify($('.form-full-event').serializeObject()));
                    successHandler2.show();
                    errorHandler2.hide();
                    //alert(moment(moment(new Date($('.form-full-event .event-start-date').val()), "x").unix()*1000));

                    var date = moment(new Date($('.form-full-event .event-start-date').val())).format();
                    var timestamp1 = moment(date).format("X");
                    var date1 = moment(new Date($('.form-full-event .event-end-date').val())).format();
                    var timestamp2 = moment(date1).format("X");

                    var newEvent = new Object;
                    newEvent.title = $(".form-full-event .event-name ").val();
                    newEvent.start = new Date($('.form-full-event .event-start-date').val());
                    newEvent.end = new Date($('.form-full-event .event-end-date').val());
                    newEvent.startdate = new Date($('.form-full-event .event-start-date').val()).toString('yyyy-MM-dd');
                    newEvent.starttimestamp = timestamp1;
                    newEvent.endtimestamp = timestamp2;
                    newEvent.allDay = false;
                    newEvent.overlap = false;
                    newEvent.className = formD.appointment_status_id;
                    newEvent.appointment_status_id = formD.appointment_status_id;
                    newEvent.appointment_type_id = formD.appointment_type_id;
                    newEvent.dental_plan_id = formD.dental_plan_id;
                    newEvent.specialty_id = formD.specialty_id;
                    newEvent.category = $(".form-full-event .event-categories option:checked").text();
                    //newEvent.specialty = $(".form-full-event .treatment_type option:checked").text();
                    newEvent.observation = $('.form-full-event .appointmentObservation').val();
                    newEvent.user_id = <?php echo $dentist_id;?>;

                    newEvent._token = csrf_token,
                        newEvent._method = "POST";

                    if (newEvent.className == '1') {
                        newEvent.className = "appointment-status-booked";
                    }
                    if (newEvent.className == '2') {
                        newEvent.className = "appointment-status-confirmed";
                    }
                    if (newEvent.className == '3') {
                        newEvent.className = "appointment-status-cancelled";
                    }
                    if (newEvent.className == '4') {
                        newEvent.className = "appointment-status-missed";
                    }
                    if (newEvent.className == '5') {
                        newEvent.className = "appointment-status-finished";
                    }

                    if (formD.patient_id == '') {
                        // getting non changed event parameters
                        var events = $("#full-calendar").fullCalendar("clientEvents");
                        el = $(".form-full-event .event-id").val();
                        for (var i = 0; i < events.length; i++) {
                            if (demoCalendar[i]._id == el) {
                                newEvent.patient = demoCalendar[i].patient;
                                newEvent.patient_id = demoCalendar[i].patient_id;
                                newEvent.patient_telephone = demoCalendar[i].patient_telephone;
                                newEvent.patient_mobile = demoCalendar[i].patient_mobile;
                                newEvent.patient_observation = demoCalendar[i].patient_observation;
                            }
                        }
                    } else {
                        //newEvent.id = el;
                        console.log('ELSE called');
                        newEvent.patient_id = formD.patient_id;
                        newEvent.patient = $.parseJSON($('#patient_json').val());
                        newEvent.patient_telephone = $('.form-full-event .patient_telephone').val();
                        newEvent.patient_mobile = $('.form-full-event .patient_mobile').val();
                        newEvent.patient_observation = $('.form-full-event .patientObservation').val();
                    }
                    $.blockUI({
                        message: '<i class="fa fa-spinner fa-spin"></i> Saving Appointment ...'
                    });

                    if ($(".form-full-event .event-id").val() !== "") {
                        el = $(".form-full-event .event-id").val();
                        var actual_event = $('#full-calendar').fullCalendar('clientEvents', el);
                        actual_event = actual_event[0];
                        for (var i = 0; i < demoCalendar.length; i++) {
                            if (demoCalendar[i]._id == el) {
                                newEvent._id = el;
                                var eventIndex = i;
                            }
                        }

                        console.log('AJAX called with calendar user ID');
                        $.ajax({
                            url: APP_URL + '/calendar/' + el,
                            method: "PUT",
                            data: newEvent,
                            success: function (data) {
                                $.unblockUI();
                                //$.hideSubview();
                                if (data.status == "success") {
                                    $(".form-full-event").find('.event-id').val('');
                                    $('#full-calendar').fullCalendar('removeEvents', actual_event._id);
                                    console.log("new Event");
                                    console.log(newEvent);
                                    $('#full-calendar').fullCalendar('renderEvent', newEvent, true);
                                    demoCalendar = $("#full-calendar").fullCalendar("clientEvents");
                                    //$.hideSubview();
                                    toastr.success(data.message);
                                    return false;
                                }
                            }
                        });

                    } else {
                        console.log('AJAX called without calendar user ID')
                        $.ajax({
                            url: APP_URL + '/calendar',
                            method: "POST",
                            data: newEvent,
                            success: function (data) {
                                //console.log(data);
                                $.unblockUI();
                                if (data.status === "success") {
                                    newEvent.id = data.id;
                                    console.log(newEvent);
                                    $('.form-full-event')[0].reset();
                                    // manually resetting the patient id
                                    $('.getted_patient_id').val('');
                                    $('#full-calendar').fullCalendar('renderEvent', newEvent, true);
                                    demoCalendar = $("#full-calendar").fullCalendar("clientEvents");
                                    $.hideSubview();
                                    toastr.success(data.message);
                                } else {
                                    toastr.error(data.message);
                                }
                            }
                        });

                    }


                }
            });
        };
        // on hide event's form destroy summernote and bootstrapSwitch plugins
        var hideEditEvent = function () {
            $.hideSubview();
            //   $('.form-full-event .summernote').destroy();
            $(".form-full-event .all-day").bootstrapSwitch('destroy');

        };

        /*START My function for subview */
        var hideAppointmentDetails = function () {
            $.hideSubview();
        };

        // editing event directly
        $('body').on("click", '.fc-time-grid-event .fc-time i', function () {
            // var dataid = $(this).attr('data-id');
            // subViewContent = "#newFullEvent";
            // $.subview({
            // 	 content: subViewContent,
            // 	 onShow: function() {
            // 			editFullEvent(dataid);
            // 	 },
            // 	 onHide: function() {
            // 		  hideEditEvent();
            // 	 }
            // });
        });

        /*END My function for subview */

        return {
            init: function () {
                console.log('Calendar initialized');
                setFullCalendarEvents();
                runFullCalendar();

                runFullCalendarValidation();
                $('#arrived').on('click', function () {

                    if ($(this).hasClass("btn-primary")) {
                        toastr.success('Patient has been marked as arived and dentist has been notified!');
                        $(this).removeClass('btn-primary');
                        $(this).addClass('btn-success');
                        $(this).append('<i class="fa fa-check"></i>');
                    } else {
                        toastr.error('Patient has been marked as not arived and dentist has been notified!');
                        $(this).removeClass('btn-success');
                        $(this).addClass('btn-primary');
                        $(this).html('');
                        $(this).html('Arrived');
                    }
                });
                $("#appointment_details").on("click", function () {
                    $.subview({
                        content: '#app_details',
                        startFrom: "right",
                        onShow: function () {
                            //showAppointmentDetails();
                        },
                        onHide: function () {
                            hideAppointmentDetails();
                        }
                    });
                });
                $("#back_to_summery").on("click", function () {
                    $.subview({
                        content: '#newFullEvent',
                        startFrom: "right",
                        onShow: function () {
                            editFullEvent();
                        },
                        onHide: function () {
                            hideEditEvent();
                        }
                    });

                });

            }
        };
    }();
</script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE JAVASCRIPTS  -->
<script type="text/javascript" src="{{ url('/') }}/js/main1.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/appointments.js"></script>
<script type="text/javascript" src="{{ url('/') }}/plugins/print/jquery.print.js"></script>

<script type="text/javascript">
    function printData($id) {
        var divToPrint = document.getElementById($id);
        newWin = window.open("");
        newWin.document.write("<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>" + divToPrint.outerHTML + "<button class='btn btn-primary' onclick='window.print()'></button>");
        //newWin.print();
        //newWin.close();
    }
    $(function () {
        $(".print").on('click', function () {
            $id = $(this).attr('data-id');
            $("#" + $id).print({
                // Use Global styles
                globalStyles: false,
                // Add link with attrbute media=print
                mediaPrint: true,
                //Custom stylesheet
                stylesheet: "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",

                //Print in a hidden iframe
                iframe: false,

                // Don't print this
                noPrintSelector: ".avoid-this",
                // Add this on top
                append: "",

                // Add this at bottom
                prepend: "",

                // Manually add form values
                manuallyCopyFormValues: true,
                // resolves after print and restructure the code for better maintainability
                deferred: $.Deferred(),
                // timeout
                timeout: 250,
                // Custom title
                title: null,
                // Custom document type
                doctype: '<!doctype html>'
            });
        });
    });
</script>

<?php
$user = Auth::user();
if($user->hasRole('Loclal Admin') || $user->hasRole('Receptionist')){
?>
<style>#current_dentist_id {
        display: block;
        float: left;
        width: 160px;
    }</style>
<script type="text/javascript">
    $(document).ready(function () {
        $html = $("#current_dentist").html();
        $("#current_dentist").html('');
        $html1 = "<div class='change_dentist'></div>";
        $('.fc-right').append($html1);
        $('.fc-right .change_dentist').append($html);


    });
</script>
<?php } ?>


</body>
<!-- end: BODY -->
</html>
