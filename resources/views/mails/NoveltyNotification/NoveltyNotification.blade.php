<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <style type="text/css" rel="stylesheet" media="all">

        /* Media Queries */
        @media only screen and (max-width: 500px) {
        .button {
        width: 100% !important;
        }
        }
        </style>
    </head>

    <style>
        .table, .td, .th {
          border: 1px solid #DF7401;
          page-break-inside: always;
          border-collapse: collapse;
          font-size: 10px;   
          width: auto;     
        }
    </style>

    <?php
        $style = [
        /* Layout ------------------------------ */
        'body' => 'margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;',
        'email-wrapper' => 'width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;',
        /* Masthead ----------------------- */
        'email-masthead' => 'padding: 25px 0; text-align: center;',
        'email-masthead_name' => 'font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;',
        'email-body' => 'width: 100%; font-size: 16px; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;',
        'email-body_inner' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0;',
        'email-body_cell' => 'padding: 35px;',
        'email-footer' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;',
        'email-footer_cell' => 'color: #AEAEAE; padding: 35px; text-align: center;',
        /* Body ------------------------------ */
        'body_action' => 'width: 100%; margin: 30px auto; padding: 0; text-align: center;',
        'body_sub' => 'margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',
        /* Type ------------------------------ */
        'anchor' => 'color: #3869D4;',
        'header-1' => 'margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;',
        'paragraph' => 'margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;',
        'paragraph-sub' => 'margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;',
        'paragraph-center' => 'text-align: center;',
        /* Buttons ------------------------------ */
        'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
        background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
        text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',
        'button--green' => 'background-color: #22BC66;',
        'button--red' => 'background-color: #dc4d2f;',
        'button--blue' => 'background-color: #3869D4;',
        ];
    ?>

    <?php $fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;'; ?>

    <body style="{{ $style['body'] }}" >

        <div style="text-align:justify;margin: 0px 100px ">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    
                    <td style="{{ $style['email-wrapper'] }}" align="left">
                        
                        <!-- Logo -->
                        <tr>
                            <td style="{{ $style['email-masthead'] }}"><a style="{{ $fontFamily }} {{ $style['email-masthead_name'] }}" href="{{ url('/') }}" target="_blank"> <img src="https://ipm-visits.s3.amazonaws.com/report/5ea824214c9cc37636984457/5ea824d54c9cc3f636984456/logo+IPM-X.png" height="50px" /></a></td>
                        </tr>
                        
                        <!-- Email Body -->

                        <table style="{{ $style['body_action'] }}" align="center" width="100%" cellpadding="0" cellspacing="0">

                            <tr>

                                <td align="left">

                                    Hola &nbsp;&nbsp;<b><i>{{ $email['name_user'] }}</i></b>,<br/><br/>

                                    <p>Hemos enviado este correo,  porque acaban de ser registradas las actividades de Inspección, Prueba y Mantenimiento de la sede <b>{{$email['sucursal']['name']}}</b> y se encontraron las siguientes novedades.</p> 

                                    <div>

                                        @if ($email['type_notification'] == 'range')

                                            <p>                                            
                                                <table class="table" style="width: 100%;font-size:11px" align="center">

                                                    <tr>
                                                        <th align="center" rowspan="2" style="border: 1px solid #DF7401">Equipo</th>
                                                        <th align="center" rowspan="2" style="border: 1px solid #DF7401">Subsistema</th>
                                                        <th align="center" rowspan="2" style="border: 1px solid #DF7401">Actividad</th>
                                                        <th align="center" rowspan="2" style="border: 1px solid #DF7401">Frecuencia</th>
                                                        <th align="center" style="border: 1px solid #DF7401">Hallazgos</th>
                                                    </tr>

                                                    <tr>
                                                        <th align="center" style="border: 1px solid #DF7401">Rango</th>
                                                        <th align="center" style="border: 1px solid #DF7401">Valor Permitido</th>
                                                        <th align="center" style="border: 1px solid #DF7401">Descripción de la actividad</th>
                                                        <th align="center" style="border: 1px solid #DF7401">Dato Registrado</th>
                                                    </tr>

                                                    @foreach ($email['data'] as $data)
                                                        <tr>
                                                            <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$data['name_equipment']}}</td>
                                                            <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$data['name_subsystem']}}</td>
                                                            <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$data['activity']}}</td>
                                                            <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$data['frequency']}}</td>                                                                                                                                                                           
                                                            <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$data['range']}}</td>
                                                            <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$data['dato_permitted']}}</td>
                                                            <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$data['description']}}</td>
                                                            <td align="center" style="border-bottom: 1px solid #DF7401;">{{$data['dato']}}</td>                                                            
                                                        </tr>                                                    
                                                        
                                                    @endforeach

                                                </table>                                            
                                            </p>  

                                            <br>
                                            <br>

                                            <p>Puede iniciar sesión e ingresar al <b>MODULO CLIENTE</b> y en el submodulo <b>REPORTE DE ACTIVIDADES</b> evidenciar los valores registrados que no se encuentran dentro de los rangos establecidos.</p>                                        

                                            <p>
                                                Es importante llevar el control de los valores ingresados con el fin de mantener los equipos operando correctamente. 
                                            </p>

                                        @endif

                                        @if ($email['type_notification'] == 'novelty')
                                            <p>
                                                <table class="table" style="width: 100%;font-size:11px" align="center">                                                    
                                                    <tr>
                                                        <th align="center" style="border: 1px solid #DF7401;text-align:center">Equipo</th>
                                                        <th align="center" style="border: 1px solid #DF7401;text-align:center">Subsistema</th>
                                                        <th align="center" style="border: 1px solid #DF7401;text-align:center">Tipo de Actividad</th>
                                                        <th align="center" style="border: 1px solid #DF7401;text-align:center">Tipo de Novedad</th>
                                                        <th align="center" style="border: 1px solid #DF7401;text-align:center">Prioridad</th>
                                                        <th align="center" style="border: 1px solid #DF7401;text-align:center">Descripción de la Novedad</th>
                                                        <th align="center" style="border: 1px solid #DF7401;text-align:center">Usuario que registro la Novedad</th>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$email['data']['name_equipment']}}</td>
                                                        <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$email['data']['name_subsystem']}}</td>
                                                        <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$email['data']['type_activity']}}</td>
                                                        <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$email['data']['type_novelty']}}</td>                                                                                                                                                                           
                                                        <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$email['data']['priority']}}</td>
                                                        <td align="center" style="border-right: 1px solid #DF7401;border-bottom: 1px solid #DF7401;">{{$email['data']['description']}}</td>                                                        
                                                        <td align="center" style="border-bottom: 1px solid #DF7401;text-transform:uppercase">{{$email['data']['user_register']}}</td>                                                            

                                                    </tr>
                                                </table>
                                            </p>

                                            <br><br>

                                            <p>Puede iniciar sesión e ingresar al <b>MODULO CLIENTE</b> o al <b>MODULO ADMINISTRATIVO </b> y en el submodulo <b>NOVEDADES DE LOS SISTEMAS</b> evidenciar las novedades registradas durante la Inspección,Prueba y Mantenimiento.</p>                                        

                                            <p>
                                                Es importante llevar el control de estas novedades con el fin de mantener los sistemas operando correctamente. 
                                            </p>

                                        @endif

                                    </div>

                                    Ante cualquier duda o inquietud comunicarse con el area de soporte.

                                    <br>
                                    <br>

                                    Gracias, por la atencion prestada al correo.

                                    <br>
                                    <br>

                                    Atentamente: 
                                    <b><i>{{ $email['name_partner'] }}</i></b>

                                    <br>
                                    <br>
                                    <div align="left">
                                        <a href="{{ $email['logo'] }}" target="_blank">
                                            <img  src="{{ $email['logo'] }}" width="180" height="50" alt="CoreUI Logo">
                                        </a>
                                    </div>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>
            </table>

            <!-- Footer -->

            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>
                    <td style="{{ $fontFamily }} {{ $style['email-footer_cell'] }}">
                        <p style="{{ $style['paragraph-sub'] }}"> &copy; {{ date('Y') }} <a style="{{ $style['anchor'] }}" href="{{ url('/') }}" target="_blank">OnlyFireSecurity</a>.
                            Todo los Derechos Reservados. 
                        </p>
                    </td>
                </tr>


            </table>
        </div>
            
    </body>


</html>