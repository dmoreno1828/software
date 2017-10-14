<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{env('APP_NAME')}} @yield('title')</title>

    <!-- Styles -->
 
    <link href="{{env('APP_CSS')}}css/style.default.css" rel="stylesheet">
    <link href="{{env('APP_CSS')}}css/style.dodgerblue.css" rel="stylesheet">
                @yield('complementos_css') 
</head>
<body>
        <section>
 
@include('layouts.partials.slider_left')
@include('layouts.partials.main_panel')
@yield('breacum')


 
 

           
                <div class="contentpanel">
                @yield('content')
                </div>
  
</section>

    <!-- Scripts -->

    
        <script src="{{env('APP_CSS')}}js/jquery-1.11.1.min.js"></script>
        <script src="{{env('APP_CSS')}}js/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{env('APP_CSS')}}js/bootstrap.min.js"></script>
        <script src="{{env('APP_CSS')}}js/modernizr.min.js"></script>
        <script src="{{env('APP_CSS')}}js/jquery.sparkline.min.js"></script>
        <script src="{{env('APP_CSS')}}js/toggles.min.js"></script>
        <script src="{{env('APP_CSS')}}js/retina.min.js"></script>
        <script src="{{env('APP_CSS')}}js/jquery.cookies.js"></script>
        <script src="{{env('APP_CSS')}}js/custom.js"></script>
        <script src="{{env('APP_CSS')}}js/jquery.validate.min.js"></script>
                @yield('complementos_js')
</body>
</html>
