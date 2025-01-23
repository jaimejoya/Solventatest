<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

     
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IPM-X') }}</title>

    <!-- Scripts -->
    
    <script src="{{asset('js/app.js') }}" ></script> 
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRwk-ir9TMpFj_Dxx1_3hJBUmvaZEJe9Q&libraries=places"></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     
    <link href="{{asset('css/plantilla.css') }}" rel="stylesheet">
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styleipm.css')}}">
</head>
<body id="fondo" >
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
