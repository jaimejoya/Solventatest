<!DOCTYPE html>
<!--
* CoreUI Pro - Bootstrap Admin Template
* @version v2.1.14
* @link https://coreui.io/pro/
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* License (https://coreui.io/pro/license)
-->

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IPM-X</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRwk-ir9TMpFj_Dxx1_3hJBUmvaZEJe9Q&libraries=places"></script> 
    <link href="css/plantilla.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
    <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
    <script src="https://unpkg.com/vuejs-paginate@latest"></script>
    <script src="https://unpkg.com/vue-select@3.0.0"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    
 
   

    <link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">

  </head>

  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-show">

    <div id="app">  

      <header class="app-header navbar" style="background: #2f353a;height:auto">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img class="navbar-brand-full" src="img/brand/logo.png" width="90" height="43" alt="CoreUI Logo">
          <img class="navbar-brand-minimized" src="img/brand/logo.png" width="30" height="30" alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <b>{{ Auth::user()->name_user }}</b>
              &nbsp;&nbsp;
              <img class="avatar"  style="width:60px height:60px;border-radius:50%;border:white 1px solid"src="{{ Auth::user()->logo }}">
            </a>
            
            <div class="dropdown-menu dropdown-menu-right">
              {{-- <div class="dropdown-header text-center">
                <strong>Account</strong>
              </div>
              <a class="dropdown-item" href="#">
                <i class="fa fa-bell-o"></i> Updates
                <span class="badge badge-info">42</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-envelope-o"></i> Messages
                <span class="badge badge-success">42</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-tasks"></i> Tasks
                <span class="badge badge-danger">42</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-comments"></i> Comments
                <span class="badge badge-warning">42</span>
              </a> --}}
              <div class="dropdown-header text-center">
                <strong>{{trans('multi-leng.Profile') }}</strong>
              </div>
              {{-- <a class="dropdown-item" href="#">
                <i class="fa fa-user"></i> Profile</a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-wrench"></i> Settings</a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-usd"></i> Payments
                <span class="badge badge-secondary">42</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-file"></i> Projects
                <span class="badge badge-primary">42</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="fa fa-shield"></i> Lock Account
              </a> --}}
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-lock"></i> Cerrar Sesión
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </li>
        </ul>
        
      </header>
    
      <div class="app-body">
        {{--Barra latera - sidebar--}}
      
        @if (Auth::check())
          @if (Auth::user()->status==true)
            @include('partials.sidebar') 
          @endif
        @endif
          {{--Contenido principal--}}
        @yield('content')
        
        @if (session('status'))
          <div style="text-align: center;position:relative;">
            <div class="alert alert-success alert-dismissible" style="text-align: center;margin-top:10px;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('status') }}
            </div>
          </div>
        @endif

      </div>
    </div>


    {{-- <footer class="app-footer">
      <div>
        <a href="https://coreui.io/pro/">CoreUI Pro</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io/pro/">CoreUI Pro</a>
      </div>
    </footer>  --}}

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/plantilla.js') }}"></script>
  
  </body>

</html>
