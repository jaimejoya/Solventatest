@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/styleipm.css') }}" rel="stylesheet">
    <body class="" style="margin: 0 auto;float: none; ">
        <style>
            h1 {font-family:Mplus 1p;font-size:20}
            
        </style> 
        

          <div class="form-group row">    
            <div class="container">
                <div class="col-md-12">
                    <div class="card-group">                                            
                        <div class="card" style="background-color:#23282C">
                            <div>
                                <img src="{{ asset('img/brand/logo.png')}}" style="margin:auto;width: 12%; " alt="">
                        </div>
                    </div>
                </div>

                <div class="row justify-container-center align-items-center ">
                    <div class="col-md-12">
                        <div class="card" align="center">
                        <form  method="POST" action="{{ route('demo') }}">
                            @csrf
                                <div class="card-header" >
                                    <h1><b>GRACIAS POR COMUNICARTE CON NOSOTROS</b></h1>
                                    <h3>En lo mas pronto posible nuestros especialistas se contactaran</h3>
                                    
                                    <div class="row">
                                        <div class="col-12 text-center">
                                                                                
                                            <a class="btn btn-secondary px-4" href="{{ route('form.login') }}"  >
                    
                                            <h4>Inicio</h4>
                                            </a>
                                      
                                        </div>   
                                    </div>                                                                               
                                </div>   
                        </div>
                    </div>
                </div>   
</body>          