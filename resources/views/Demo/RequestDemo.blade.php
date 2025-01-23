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
                                    <h1><b>REGISTRATE</b></h1>
                                    <h3>IPM-X SU SOFTWARE ALIADO EN GESTION DE MANTENIMIENTOS</h3>
                                    <h5>A continuacion diligencie la siguiente informacion para solicitar su demo</h5>
                                </div>
                              
                                 <table class="table">

                                    <tr>
                                        <th>
                                            <label for="input-group mb1"><h5><b>Nombre</h5></b></label>
                                            <div class="col-sm-13">
                                                <input name="Nombre" required type="text" class="form-control" id="Nombre"/>
                                            </div>
                                        </th>

                                        <th>
                                            <label for="input-group mb1" ><h5><b>Apellido</h5></b></label>
                                            <div class="col-sm-13">
                                                <input name="Apellido" required type="text" class="form-control" id="Apellido"/>
                                            </div>
                                        </th>

                                        <th>
                                            <label for="input-group mb1" ><h5><b>Teléfono</h5></b></label>
                                            <div class="col-sm-13">
                                                <input name="Telefono" required type="text" class="form-control" id="Telefono" placeholder="Ej: +57 1223455"/>
                                            </div>
                                        </th>
                
                                    </tr>

                                    <tr>
                                        <th>
                                            <label for="input-group mb2" ><h5><b>Empresa</h5></b></label>
                                            <div class="col-sm-13">
                                                <input name="Empresa" required type="text" class="form-control" id="Empresa"/>
                                            </div>
                                        </th>

                                        <th>
                                            <label for="input-group mb2" ><h5><b>Cargo</h5></b></label>
                                            <div class="col-sm-13">
                                                <input name="Cargo"  required type="text" class="form-control" id="Cargo"/>
                                            </div>
                                        </th>

                                        <th>
                                            <label for="input-group mb2"><h5><b>Ciudad</h5></b></label>
                                            <div class="col-sm-13">
                                                <input name="Ciudad" required type="text" class="form-control" id="ciduad" placeholder="Bogota"/>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>
                                            <label for="input-group mb4"><h5><b>Correo</h5></b></label>
                                            <div class="col-sm-13">
                                                <input name="Correo" required type="text" class="form-control" id="Correo" placeholder="Ej:Sopo..@gmail.com"/>
                                            </div>
                                        </th> 
                                        <th>   
                                                    <label for="input-group mb3" ><h5><b>Sector Socioeconómico</h5></b></label>
                                                    <div class="col-sm-13">
                                                        <input name="Sector" required type="text" class="form-control" id="Sector"/>
                                                    </div>
                                                </th>

                                                <th>
                                                    <label for="input-group mb3" ><h5><b>Como se enteró de nuestra aplicación</h5></b></label>
                                                    <div class="col-sm-13">
                                                        <input name="Publicidad" required type="text" class="form-control" id="Publicidad" placeholder="Anuncios publicitarios, facebook o instagram"/>
                                            
                                                    </div>
                                                </th> 
                                            
                                            </tr> 

                                        </table>   

                                        <div class="col-md-12">
                                            <div class="card-group">
                                                    <div class="card-body">
                                                        <div class="text-center m-1">                  
                                                                <label for="input-group mb5"><h4><b>Mensaje</h4></b></label>
                                                                <div class="col-sm-13">                              
                                                                    <textarea cols= "60" rows="10" name="Mensaje" type="text" class="form-control" id="Mensaje" placeholder="Tienes alguna pregunta, en que te podamos ayudar?"></textarea>
                                                                    <br>
                                                                    </br>

                                                                        <div class="row">
                                                                                <div class="col-12 text-center">
                                                                                
                                                                                    <button type="submit" class="btn btn-secondary px-4"   >
                                                                                    <h3>Enviar</h3>
                                                                                    </button>
                                                                                    
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


@endsection