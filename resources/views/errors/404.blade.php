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
   <style>
      .error-404{padding:50px 0;width: 100%;float:left;text-align: center;}
      .error-404 h1{font-size: 15em;}
      .error-404 p{margin-top:15px;font-size: 1.5em;}
   </style>

    <!-- Scripts -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
            </div>
        </nav>

        <div class="error-404">
           <h1>404</h1>
           <p>The page you are looking for is not found! Go to <a href="{{ url('/') }}/home">Home</a></p>
        </div>

    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
