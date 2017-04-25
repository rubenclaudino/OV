<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/animate.css/animate.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/styles.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/custom.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/styles-responsive.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css" />

    <!-- Scripts -->
    <script>
      window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>;
      var APP_URL = '{{ url('/') }}';
    </script>
</head>
<body>
   @yield('content')

   <script src="{{ url('/') }}/plugins/jQuery/jquery-2.1.1.min.js"></script>
   <!--<![endif]-->
   <script src="{{ url('/') }}/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
   <script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="{{ url('/') }}/plugins/iCheck/jquery.icheck.min.js"></script>
   <script src="{{ url('/') }}/plugins/jquery.transit/jquery.transit.js"></script>
   <script src="{{ url('/') }}/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
   <script src="{{ url('/') }}/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   <script src="{{ url('/') }}/js/login.js"></script>
   <script type="text/javascript" type="text/javascript" src="{{ url('/') }}/js/validations.js"></script>
   <script type="text/javascript" type="text/javascript" src="{{ url('/') }}/js/ajax-actions.js"></script>
   <script>
      jQuery(document).ready(function() {
         Login.init();
      });
   </script>
</body>
</html>
