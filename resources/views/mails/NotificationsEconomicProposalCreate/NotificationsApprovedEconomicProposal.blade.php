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
          table-layout: auto;
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

                                    Estimado Usuario.<br/><br/>

                                    <p>Nos complace informarte que la propuesta económica que se ha revisado ha sido aprobada y está lista para ser enviada al cliente.</p>

                                    <p>Para proceder con el envío, por favor seguir los siguientes pasos:</p>

                                    <ol>
                                        <li>Acceder al <strong>Módulo Costos y Presupuesto</strong>.</li>
                                        <li>Dirígirse al <strong>Submódulo de Tabla Costos y Presupuestos</strong>.</li>
                                        <li>Seleccione el tipo de mantenimiento al que deseas ver la propuesta económica.</li>
                                        <li>Elija la opción <strong>Consultar Propuestas Económicas</strong>.</li>
                                        <li>Seleccione el cliente, el sistema y el subsistema que desea consultar.</li>
                                        <li>Seleccione la opción <strong>Filtrar por Fecha</strong> y seleccione el rango de la fecha en la que desea consultar la la propuesta económica.</li>
                                        <li>Seleccione la propuesta economica que ha sido aprovada</li>
                                    </ol>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>
            </table>

            <div>
                <p> 
                    Para más detalles, puedes acceder a la 
                    <a href="https://ipm-x.com/?https%3A%2F%2Fipm-x_com%2F&gad_source=1&gclid=Cj0KCQjwu-63BhC9ARIsAMMTLXSaihzzvquxohMair-MXXQiNhML62mI68ft0COlJM1FiHdm-smsrrcaAh0pEALw_wcB#contacto" target="_blank" class="button">Ir a Propuesta Económica</a>
                </p>
                <br><br>

            </div>

            Ante cualquier duda o inquietud, comunícate con el área de soporte.

            <br>
            <br>

            Gracias por la atención prestada al correo.

            <br>
            <br>

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