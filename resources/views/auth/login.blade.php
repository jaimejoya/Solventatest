@extends('layouts.app')

@section('content')


<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  {!! RecaptchaV3::initJs() !!}
</head>

<link href="{{asset('css/styleipm.css') }}" rel="stylesheet">
<body class="" style="margin: 0 auto;float: none; ">
    <div class="container "   >
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-2">
              <div class="card-body">

                <h1>Iniciar Sesión</h1>

                @if(!empty($status))
                  <div class="alert alert-success"> {{ $status }}</div>
                @endif

                <form  method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                    <div class="input-group mb-3">

                      <div class="input-group-prepend">
                          <span class="input-group-text">                            
                          <i class="icon-user" style=" color: #d3753e;"></i>
                          </span>
                      </div>
                      
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Usuario" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      
                    </div>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="icon-lock" style=" color: #d3753e;"></i>
                            </span>
                        </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Contraseña" autocomplete="current-password">
                            <button class="btn btn-secondary px-2" id="show_password" style="color: #d3753e" type="button" onclick="mostrarPassword()">
                              <span class="fa fa-eye-slash icon" style=" color: white;"></span>
                            </button>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="input-group mb-5">
                      
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <b class="form-check-label" for="remember" style="color: black">
                              Recordar Contraseña
                          </b>
                      </div>

                      @if (Route::has('password.request'))
                          <a class="btn btn-link px-0" style="color: white" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                          </a>
                      @endif

                    </div>

                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">

                      <div class="col-md-6">

                          {!! RecaptchaV3::field('register') !!}

                          @if ($errors->has('g-recaptcha-response'))

                              <span class="help-block">

                                  <strong>{{ $errors->first('g-recaptcha-response') }}</strong>

                              </span>

                          @endif

                      </div>

                    </div>

                    <div class="row">

                      {{-- @if (Route::has('register.partner'))
                        <div class="col text-right">
                          <a class="btn btn-secondary px-4" style="color: white" href="{{ route('register.partner') }}">
                            Registrarse
                          </a>
                        </div>
                      @endif --}}

                      <div class="col text-right" style="top:4px">
                        <button type="submit" class="btn btn-secondary px-4"   >
                            Ingresar
                        </button>
                      </div>

                      @if (Route::has('requestdemo'))
                          <a class="btn btn-link px-3" style="color: black" href="{{ route('requestdemo') }}">
                            {{ __('Ingrese aqui para solicitar su demo gratis') }}
                          </a>
                      @endif

                    </div>
                </form>

              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="">
              <div class="card-body text-center">
                <div>
                    <img src="{{asset('img/login/login-titulo.png')}}" style="margin:auto;width: 100%;margin-left: 2px;margin-top: 50px;" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">

      function mostrarPassword(){
        var cambio = document.getElementById("password");
        if(cambio.type == "password"){
          cambio.type = "text";
          $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
          cambio.type = "password";
          $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
      } 

    </script>

@endsection
