<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ url('/images/favicon.png') }}" type="image/png">
    <title>{{$title}} | {{ config('app.name', 'Rapido') }}</title>
    @include('includes.stylesheets')

    <!-- Scripts -->
    <script type="text/javascript">
         window.Laravel = '<?php echo json_encode(['csrfToken' => csrf_token(), ]); ?>';
         var csrf_token = '{{ csrf_token() }}';
         var APP_URL = '{{ url('/') }}';
    </script>
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
   <script type="text/javascript" src="{{ url('/') }}/plugins/jQuery/jquery-2.1.1.min.js"></script>
   <!--<![endif]-->

   <script src="http://parsleyjs.org/dist/parsley.js"></script>
   <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

   <script type="text/javascript" src="{{ url('/') }}/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/blockUI/jquery.blockUI.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/iCheck/jquery.icheck.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/moment/min/moment.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootbox/bootbox.min.js"></script>
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
   <script type="text/javascript" src="{{ url('/') }}/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-select/bootstrap-select.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/DataTables/media/js/dataTables.buttons.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/DataTables/media/js/buttons.print.min.js"></script>

   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/truncate/jquery.truncate.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/summernote/dist/summernote.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

   <script type="text/javascript" src="{{ url('/') }}/js/subview.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/js/subview-examples.js"></script>
   <!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
   <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
   <script type="text/javascript" src="{{ url('/') }}/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
   <script type="text/javascript" type="text/javascript" src="{{ url('/') }}/js/main1.js"></script>
   <script type="text/javascript" type="text/javascript" src="{{ url('/') }}/js/validations.js"></script>
   <script type="text/javascript" type="text/javascript" src="{{ url('/') }}/js/ajax-actions.js"></script>


   <script type="text/javascript" src="{{ url('/') }}/js/form-elements.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/autosize/jquery.autosize.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/js/pages-user-profile.js"></script>

   <script type="text/javascript" src="{{ url('/') }}/js/ui-notifications.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/sweetalert/lib/sweet-alert.min.js"></script>
   <!--script src="js/pages-gallery.js"></script-->
   <script type="text/javascript" src="{{ url('/') }}/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
   <!--script src="plugins/ckeditor/ckeditor.js"></script-->
   <!--script src="plugins/ckeditor/adapters/jquery.js"></script-->
   <!--script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script-->
   <script type="text/javascript" src="{{ url('/') }}/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/dropzone/downloads/dropzone.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/js/patient_register.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/js/form-elements.js"></script>
   <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
   <!-- start: CORE JAVASCRIPTS  -->
   <script src="{{ url('/') }}/plugins/fileinput/js/fileinput.min.js"></script>
   <script type="text/javascript" src="{{ url('/') }}/plugins/print/jquery.print.js"></script>

   <script>
      jQuery(document).ready(function() {
         // stopping holiday Events
         Main.init();

      });
   </script>

      <script>
         $(document).ready(function(){
            Stripe.setPublishableKey("pk_test_3uHFKYTcmDW0SXlu0LWK2oPY");
            $(function() {
                 $('#payment-form').submit(function(event) {
                     var $form = $(this);
                     $form.parsley().subscribe('parsley:form:validate', function(formInstance) {
                         formInstance.submitEvent.preventDefault();
                         return false;
                     });
                     $form.find('#submitBtn').prop('disabled', true);
                     Stripe.card.createToken($form, stripeResponseHandler);
                     return false;
                 });
            });
            function stripeResponseHandler(status, response) {
                 var $form = $('#payment-form');
                 if (response.error) {
                     $form.find('.payment-errors').text(response.error.message);
                     $form.find('.payment-errors').addClass('alert alert-danger');
                     $form.find('#submitBtn').prop('disabled', false);
                     $('#submitBtn').button('reset');
                 } else {
                     var token = response.id;
                     $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                     $form.get(0).submit();
                 }
            };
         });
      </script>
</body>
</html>
