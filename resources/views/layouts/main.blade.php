<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | Odontovision</title>

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/perfect-scrollbar/src/perfect-scrollbar.css')}}">

    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles-responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('css/themes/theme-style8.css')}}" type="text/css" id="skin_color">
    <link rel="stylesheet" href="{{ asset('css/print.css')}}" type="text/css" media="print">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">

    <link rel="stylesheet" href="{{ asset('plugins/angular/toastr/toaster.css')}}">

</head>
<body>

@include('includes.topbar')

<div class="main_wrapper">

    @include('includes.header')
    @include('includes.nav')
    @include('includes.rightbar')

    <div class="main-container inner">
        @yield('content')
    </div>

</div>

@yield('extra_scripts')

<script type="text/javascript" src="{{ asset('plugins/jQuery/jquery-2.1.1.min.js')}}" ></script>

<!--<![endif]-->
<script type="text/javascript" src="{{ asset('plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/blockUI/jquery.blockUI.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/iCheck/jquery.icheck.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/moment/min/moment.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/perfect-scrollbar/src/jquery.mousewheel.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/perfect-scrollbar/src/perfect-scrollbar.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootbox/bootbox.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.scrollTo/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/ScrollToFixed/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.appear/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/velocity/jquery.velocity.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/TouchSwipe/jquery.touchSwipe.min.js')}}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<script type="text/javascript" src="{{ asset('plugins/jquery-mockjax/jquery.mockjax.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/sweetalert/lib/sweet-alert.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/toastr/toastr.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/DataTables/media/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/DataTables/media/js/buttons.print.min.js')}}"></script>


{{-- for some reason this is necessary for sidebar functioning--}}
<script type="text/javascript"
        src="{{ asset('plugins/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>


<script type="text/javascript" src="{{ asset('plugins/truncate/jquery.truncate.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/summernote/dist/summernote.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/subview.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/subview-examples.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript" src="{{ asset('plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/main1.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validations.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/ajax-actions.js')}}"></script>


<script type="text/javascript" src="{{ asset('js/form-elements.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-maskmoney/jquery.maskMoney.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.maskedinput/src/jquery.maskedinput.js')}}"></script>
<script type="text/javascript"
        src="{{ asset('plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/autosize/jquery.autosize.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.pulsate/jquery.pulsate.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/pages-user-profile.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/ui-notifications.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/sweetalert/lib/sweet-alert.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jQuery-Tags-Input/jquery.tagsinput.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/dropzone/downloads/dropzone.min.js')}}"></script>
<script type=" text/javascript" src="{{ asset('js/form-elements.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jscolor/jscolor.js')}}"></script>

<script src="{{ asset('plugins/fileinput/js/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/print/jquery.print.js')}}"></script>

<script>
    jQuery(document).ready(function () {
        // stopping holiday Events
        Main.init();
    });
</script>
</body>
</html>
