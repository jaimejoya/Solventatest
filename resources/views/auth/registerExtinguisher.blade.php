
@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/styleipm.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>

        body {
            background: #1d1f20;
            text-align: center;
        }
        /* Using codepen button style :) */
        .button {
            display: inline-block;
            border: 0;
            outline: 0;
            padding: 12px 16px;
            line-height: 1.4;
            background: linear-gradient(#4d4d4d,#2f2f2f);
            border-radius: 5px;
            border: 1px solid black;
            font-family: "Lucida Grande", "Lucida Sans Unicode", Tahoma, Sans-Serif;
            color: white !important;
            font-size: 1.2em;
            cursor: pointer;
            /* Important part */
            position: relative;
            transition: padding-right .3s ease-out;
        }
        .button.loading {
            background-color: #CCC;
            padding-right: 40px;
        }
        .button.loading:after {
            content: "";
            position: absolute;
            border-radius: 100%;
            right: 6px;
            top: 50%;
            width: 0px;
            height: 0px;
            margin-top: -2px;
            border: 2px solid rgba(255,255,255,0.5);
            border-left-color: #FFF;
            border-top-color: #FFF;
            animation: spin .6s infinite linear, grow .3s forwards ease-out;
        }
        @keyframes spin { 
            to {
                transform: rotate(359deg);
            }
        }
        @keyframes grow { 
            to {
                width: 14px;
                height: 14px;
                margin-top: -8px;
                right: 13px;
            }
        }

    </style>

    <body class="" style="margin: 0 auto;float: none; ">

        <style>
            
            h1 {font-family:Mplus 1p;font-size:20}
            h5 {font-family: Mplus 1p;font-size:18;align="justify" }
            input {
                display:block;
                width:100%;
                margin:10px 0;
                padding:10px;
                color:white;
                background:white;
            }

            .type-1 {
                border-radius:10px;
                border: 1px solid #eee;
                transition: .3s border-color;
            }

        </style> 
        
        <div class="form-group row">    
            <div class="container" >
                <div class="col-md-12">
                    <div class="card-group">                                            
                        <div class="card" style="background-color:#23282C">                        
                            <div>
                                <img src="{{ asset('img/brand/logo.png')}}" style="margin:auto;width: 12%; " alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row justify-container-center align-items-center " >
                        <div class="col-md-12">

                            <div class="card" align="center"style="background-color:#EAEAEA"> 

                                <div class="card-header" >

                                    <h1><b>REGISTRATE Y UTILIZA NUESTRO MODULO ADMINISTRATIVO DE EXTINTORES PORTATILES</b> <br> <b>TOTALMENTE GRATIS</b></h1>
                                    
                                    <table class="table" style="background-color:#EAEAEA">
                                        <div class="container">

                                            @if(session()->has('message'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif
                                        
                                            <div class= "row">
                                                <div class="col-sm"> 
                                                    <div class="col" style="background-color: #FBF7ED">                                            
                                                        <h4><b>Información de Registro </b></h4>
                                                        <hr style=  "border: 5px solid #434241"></hr>
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form  method="POST" action="{{ route('newPartner') }}" enctype="multipart/form-data">

                                                                    @csrf

                                                                    <div class="row">
                                                                        <b>Razon Social</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;text-transform:uppercase" type="text" class="type-1" id="name_partner" name="name_partner" class="@error('name_partner') is-invalid @enderror">
                                                                        @error('name_partner')
                                                                            <span class="text-danger">{{ $errors->first('name_partner') }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>NIT</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;text-transform:uppercase" type="number" class="type-1" id="nit" name="nit" class="@error('nit') is-invalid @enderror">
                                                                        @error('nit')
                                                                            <span class="text-danger">{{ $errors->first('nit') }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Persona de Contacto</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;text-transform:uppercase" type="text" class="type-1" id="person_contact" name="person_contact" class="@error('person_contact') is-invalid @enderror">
                                                                        @error('person_contact')
                                                                            <span class="text-danger">{{ $errors->first('person_contact') }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Cargo</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;text-transform:uppercase" type="text" class="type-1" id="charge" name="charge" class="@error('charge') is-invalid @enderror">
                                                                        @error('charge')
                                                                            <span class="text-danger">{{ $errors->first('charge') }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Celular</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;text-transform:uppercase" type="text" class="type-1" id="phone" name="phone" class="@error('phone') is-invalid @enderror">
                                                                        @error('phone')
                                                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Actividad Economica</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;text-transform:uppercase" type="text" class="type-1" id="activityEconomic" name="activityEconomic" class="@error('activityEconomic') is-invalid @enderror">
                                                                        @error('activityEconomic')
                                                                            <span class="text-danger">{{ $errors->first('activityEconomic') }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Página Web</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;" type="url" class="type-1" placeholder="https://example.com" id="web" name="web">
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Correo Electrónico</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;" type="email" class="type-1" id="email" name="email" class="@error('email') is-invalid @enderror">
                                                                        @error('email')
                                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Contraseña</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;" type="password" class="type-1" id="password" name="password" class="@error('password') is-invalid @enderror" required autocomplete="current-password">
                                                                        @error('password')
                                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Confirmación de Contraseña</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;" id="password" class="type-1" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">  
                                                                    </div>

                                                                    <div class="row">
                                                                        <b>Logo de la empresa</b>
                                                                    </div>

                                                                    <div class="row" style="color: white">
                                                                        <input style="color:black;text-transform:uppercase" type="file" class="type-1" id="logo" name='logo'>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col text-right">
                                                                            <a href="/">
                                                                            <button type="submit" id="myButton" class="button">Crear Usuario</button>
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>                                                                                                            
                                                    </div>       
                                                </div>
                                            </div>                                                                                                                                                                            
                                                                                    
                                        </div> 
                                    </table>    

                                </div>
                                                                                                                                
                                <div class="row justify-container-center align-items-center " >
                                    <div class="col-md-12" >                                                                                                
                                        <div class="card-header" align="left" style="background-color:#EAEAEA">                                                                                 
                                                <h5>Necesitas ayuda  para seleccionar la mejor opcion. Si estas interesado en alguno de nuestros planes comunicate con nuestros asesorias.</h5>                                                                            
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm"> 
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col-12 text-center">                                                                                       
                                                                    
                                                                    <p></p>
                                                                        <p></p>
                                                                        <p></p>
                                                                        <p></p>
                                                                            
                                                                        <a class="btn btn-outline-dark float-right ml-2" style=background-color:#F89E18 href="https://wa.me/+573017956475?text=¡Estoy+interesado!" target="_blank">
                                                                        <div>
                                                                        <img src="{{ asset('img/AtencionCliente.png')}}" style="whidt:70; height:50px" align="middle"> <b>¿Necesitas ayuda?</b>  
                                                                                    
                                                                        </div>  
                                                                        </a> 
                                                                    </div> 
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm"> 
                                                            <div class="col" style="padding-left:50px;">
                                                                <img src="{{ asset('img/email.png')}}" style="whidt:40px; height: 47px;" align="middle"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ventas@onlyfiresecurity.com</b>
                                                                
                                                                <div >
                                                                    <!--Llamada iconos creados por Gregor Cresnar - Flaticon-->
                                                                    
                                                                    <img src="{{ asset('img/movil.png')}}" style="whidt:60px; height:60px"  align="middle" > <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +57 312 5016378 </b>
                                                                </div>

                                                                <div >
                                                                    <!--Llamada iconos creados por Gregor Cresnar - Flaticon-->
                                                                    
                                                                    <img src="{{ asset('img/Telefonos.png')}}" style="whidt:1px; height:46px; padding-left:-20px;"  align="middle" > <b>&nbsp;&nbsp; 601 467 2129,Bogota </b>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        
                                                    </div>
                                                </div>
                                        </div>
                                    </div> 
                                </div>           

                            </div>     
                                                                
                        </div>
                    </div> 
                </div> 
            </div> 
        </div>

    </body>

    <script>

        function removeClass(){  
            myButton.className = myButton.className.replace(new RegExp('(?:^|\\s)loading(?!\\S)'), '');
        }

        var myButton = document.getElementById('myButton');


        myButton.addEventListener("click", function() {
            myButton.className = myButton.className + ' loading';
            setTimeout(removeClass, 8000);
        }, false);

    </script>

@endsection 
    
      