<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cotización No.{!! $data['quote_number'] !!}</title>
  <style>
    @page {
        size: A4;
        margin: 70px 30px;
    }
    body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Finterfire.co%2F&psig=AOvVaw2HjDolIr99rGJueBTiGdgn&ust=1703003151210000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCKjj8L-zmYMDFQAAAAAdAAAAABAD");
            background-repeat: repeat;
            background-position: center;
            background-size: 30%;
            background-attachment: fixed;
            margin: 40;
            padding: 0;
            min-height: 100vh;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            counter-reset: page-counter 0;
            background-image: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Finterfire.co%2F&psig=AOvVaw2HjDolIr99rGJueBTiGdgn&ust=1703003151210000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCKjj8L-zmYMDFQAAAAAdAAAAABAD");
            text-align: justify; 
        }
        body::before {
        content: "";
        position: fixed;
        top: 50%;
        left: 55%;
        transform: translate(-50%, -50%);
        width: 200px; /* Ajusta el tamaño de la imagen */
        height: 200px; /* Ajusta el tamaño de la imagen */
        background-image: url('/home/nicolas/ipmx-web-3.0/public/images/vendor/vue-window-modal/Footer  Economic proposal/Marca_Agua_Interfire.png'); /* Reemplaza con la ruta de tu imagen */
        background-repeat: no-repeat;
        background-size: contain; /* Ajusta el tamaño de la imagen sin distorsionarla */
        opacity: 0.1; /* Transparencia de la marca de agua */
        z-index: -1; /* Para asegurarse de que quede detrás del contenido */
        pointer-events: none;
        }
        /* .image-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px; 
        margin-top: 30px;
        }
        .image-container img {
            max-width: 50%;
            height: auto;
            max-height: 200px; /* Limita la altura máxima de la imagen 
            border: 2px solid #DF7401;
            margin-bottom: 10px; /* Espacio debajo de la imagen
            /* margin-left: 220px; 
            margin-right: auto;
        } */
        .images-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center; 
          text-align: center;
          gap: 10px;
          margin: 0 auto;
          margin-top: 60px;
        margin-bottom: 8px;
          align-items: flex-start;
      }

      .img {
        width: 120px;
        height: 140px;
        border: 2px solid #DF7401;
        margin-top: 60px;
        margin-bottom: 8px;

      }
      .image-wrapper {
        display: inline-block; /* Asegura que los contenedores de imágenes estén uno al lado del otro */
        text-align: center;
        width: 130px;
        margin: 0 auto;
        margin-top: 60px;
        margin-bottom: 8px;
        vertical-align: top; /* Evita que la imagen se desplace */
        word-wrap: break-word;
        page-break-inside: avoid;
      }
        .custom-signature {
            /* margin-top: -100px; */
            width: 100px;
            height: 100px; 
        }
        .user-info {
            font-size: 12px;
        }
        .contact-info {
        font-size: 12px;
        font-family: Arial, sans-serif;
        }
        .contact-info strong {
            font-size: 14px;
            font-weight: bold;
        }
        table.contact-info {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse; /* Para quitar espacios entre celdas */
        }
        .contact-info td {
            width: 50%; /* Ajusta cada columna a 50% del ancho total */
            vertical-align: top; /* Alinea el contenido al principio de la celda */
            padding: 8px; /* Espaciado interno para mayor claridad */
        }
        .pagenum:before{
        content: counter(page);
        }
        :root {
        --total-pages: 0;
        }
        .page::before {
        counter-increment: page-counter 1;
        content: "Pagina " counter(page-counter);
        }
        .tg {
            border-collapse: collapse;
            border-spacing: 8px;
        }
        .large-table {
        border-collapse: collapse;
        border-spacing: 8px;
        width: 100%;
        }
    .large-table td, .large-table th {
        font-family: Arial, sans-serif;
        font-size: 12px; /* Aumentar el tamaño de la fuente */
        padding: 5px 10px; /* Aumentar el espacio interno */
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: #DF7401;
    }

    .large-table th {
        font-weight: bold;
        font-size: 12px; /* Aumentar tamaño de los encabezados */
    }

    .large-table .center {
        text-align: center;
    }

    .large-table .right {
        text-align: right;
    }

    .large-table .bold {
        font-weight: bold;
    }

    .large-table .highlight {
        font-weight: bold;
        background-color: #ffce93;
        color: #000000;
        text-align: center;
        vertical-align: top;
    }
        .tg td, .tg th {
            font-family: Arial, sans-serif;
            font-size: 10px;
            padding: 2px 15px;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            word-break: normal;
            border-color: #DF7401;
        }

        .tg th {
            font-weight: normal;
            padding: 2px 5px;
        }

        .tg .tg-s6z2 {
            text-align: center;
        }

        .tg .tg-baqh {
            text-align: center;
            vertical-align: top;
        }

        .tg .tg-lqy6 {
            text-align: right;
            vertical-align: top;
        }

        .tg .tg-hgcj {
            font-weight: bold;
            text-align: center;
        }

        .tg .tg-amwm {
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
        }

        .tg .tg-yw4l {
            vertical-align: top;
        }

        .tg .tg-ssyz {
            font-weight: bold;
            background-color: #ffce93;
            color: #000000;
            text-align: center;
            vertical-align: top;
        }

        .tg .tg-9hbo {
            font-weight: bold;
            vertical-align: top;
        }

        .tg .tg-5qfb {
            font-weight: bold;
            background-color: #ffce93;
            text-align: center;
            vertical-align: top;
        }

        table.area-cotizacion td, table.area-cotizacion th {
            border-right: none;
            border-top: none;
        }

        .page-break {
            page-break-before: always;
        } 

        .page-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .pagenum:before {
            content: counter(page);
        }

        header {
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            color: rgb(14, 13, 13);
            text-align: center;
            display: flex;
            justify-content: flex-end;
            align-items: flex-start;
        }

        .table-container {
            max-width: 25%;
            background: white;
            border-radius: 35px;
            margin-top: -60px;
            margin-left: 590px;
        }

        .tg-table {
            width: 100%;
        }

        header img {
        width: 82%;
        height: 150px;
        position: absolute;
        top: -70px;
        bottom: 0;
        left: 37%;
        transform: translateX(-50%);
        }

        .title {
            margin-top: 20px;
            font-family: 'Arial, Helvetica, sans-serif';
            text-align: center;
        }

        .letter, .letter-size, .justify, .li, .margin, .margin-conclution, .ul {
            font-family: 'Arial, Helvetica, sans-serif';
        }

        .letter-size {
            font-size: 13px;
        }

        .justify {
            text-align: justify;
        }

        .li {
            margin-left: 0px;
        }

        .margin {
            margin-left: 10px;
            margin-right: 60px
        }

        .margin-conclution {
            margin-left: 40px;
            margin-right: 40px
        }

        .ul {
            list-style-image: url("https://ipm-visits.s3.amazonaws.com/report/5ea824214c9cc37636984457/5ea824d54c9cc3f636984456/logo-interfire.png");
            margin-left: 50px;
            margin-right: 60px
        }

        .img {
            width: 120px;
            height: 140px;
            border: 2px solid #DF7401;
            margin-left: 20px;
            margin-top: 8px;
        }

        .orange-box {
            text-align: center;
            margin-top: 30px;
            padding: 100px;
            border: 2px solid #DF7401;
        }
        footer {
        position: fixed;
        padding: 15px;
        bottom: -75;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 12px;
        }

        .footer-row {
        display: flex;
        justify-content: center;
        margin-bottom: 10px; /* Separación entre las filas */
        }

        .footer_img_certification {
        width: 95px;
        height: 80px;
        padding-left: 700px; 
        }

        .footer_img {
        width: 795px;
        height: auto;
        max-width: 800px;
        }

            .content {
            margin-top: 70px;
            }

            .page-number:before {
            content: "Página " counter(page);
            }
  </style>
</head>
<body>

    <header>
        <img src="https://ipm-visits.s3.amazonaws.com/report-extinguisher/629643aaba78b047144c3723/Header.jpg" alt="" style="header img"> 
        <div class="table-container">
            <table class="large-table">
                <tr>
                    <th class="bold center" colspan="2"><span>test</span></th>
                </tr>
                <tr>
                    <td class="bold center" colspan="2"><span>test</span></td>
                </tr>
                <tr>
                    <td class="bold center" colspan="2"><span class="page"></span></td>
                </tr>
                <tr>
                    <td class="bold center" colspan="2">Fecha: {{ date("d/m/Y", strtotime($data_economic_proposal['date_realization']))}}</td>
                </tr>
            </table>
    </div>
    </header>

    <footer>
        <div class="footer-row">
          <img src="{{$certification}}" alt="" class="footer_img_certification">
        </div>
        <div class="footer-row">
          <img src="https://ipm-visits.s3.amazonaws.com/report-extinguisher/629643aaba78b047144c3723/Footer.jpg" alt="" class="footer_img">
        </div>
      </footer>

  <div class="content">
    <table class="containing_main_table">
        <tr>
            <td style="font-size: 15px; text-align: right; padding-right: 50px;">
                <p><b>Cotización No.{!! $data['quote_number'] !!}</b></p>
            </td>
        </tr>
        <tr>
            <td class="td_containing_main">
                <p>{!! $data['header_propcost'] !!}</p>
            </td>
        </tr> 
        <tr>
            <td class="td_containing_main">
                <p>{!! $data['addressee'] !!}</p>
            </td>
        </tr>
        <tr>
            
            <td class="td_containing_main">
                <p><b>{{$data['reference']}}</b></p>
            </td>
            
        </tr>
        <tr>
            <td class="td_containing_main">
                <p>{{$data['introduction']}}</p>
            </td>
        </tr>
        <tr>
            <td class="td_containing_main">
                <p><b style="color: darkorange; text-decoration: underline;">OBJETIVO:</b>{{ $data['objetive']}}</p>
            </td>
        </tr>
    </table>
    
    <div class="containing_main_table">
        
        
                <p><b style="color: darkorange; text-decoration: underline;">NOVEDADES:</b></p>
            

        <!-- Recorre las novedades -->
        @foreach($data['noveltys'] as $novelty)
       
                    <p>{{ $novelty['description'] }}</p>
                

            <!-- Mostrar las imágenes si existen -->
            @if(isset($novelty['images']))
            <div class="images-container">
                @foreach($novelty['images'] as $image)

                        <div class="image-wrapper">
                            <img src="{{ $image }}" alt="Imagen de novedad" class="img">
                        </div>
                @endforeach
            </div>
            @endif
        @endforeach
    </div>
    
    <table class="containing_main_table">
        <tr>
            <td class="td_containing_main">
                <br>
                <p><b style="margin-bottom: 5px; color: darkorange; text-decoration: underline;">PROPUESTA ECONÓMICA:</b></p>
                @if($showEspecificColumns)
                <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; font-size: 12px; border-collapse: collapse;">
                    <tr>
                        <th colspan="8" style="text-align: center; background-color: #e05119; color: black; border: 1px solid black;">
                            <b>{{ $data['name_table'] }}</b>
                        </th>
                    </tr>
                    <tr style="text-align: center; background-color: #d98f5b; color: black;">
                        <th style="border: 1px solid black;"><b>ITEM</b></th>
                        <th style="border: 1px solid black;"><b>REFERENCIA</b></th>
                        <th style="border: 1px solid black;"><b>CANTIDAD</b></th>
                        <th style="border: 1px solid black;"><b>VALOR UNITARIO SUMINISTRO</b></th>
                        <th style="border: 1px solid black;"><b>VALOR TOTAL SUMINISTRO</b></th>
                        <th style="border: 1px solid black;"><b>VALOR UNITARIO INSTALACIÓN</b></th>
                        <th style="border: 1px solid black;"><b>VALOR TOTAL INSTALACIÓN</b></th>
                        <th style="border: 1px solid black;"><b>VALOR TOTAL</b></th>
                        <th style="border: 1px solid black;"><b>VALOR UNITARIO GLOBAL</b></th>
                        <th style="border: 1px solid black;"><b>VALOR TOTAL GLOBAL</b></th>
                    </tr>
                    @if (is_array($data['selected_equipment']) && isset($data['selected_equipment'][0]))
                        {{-- Múltiples equipos --}}
                        @foreach($data['selected_equipment'] as $equipment)
                            <tr>
                                <th colspan="8" style="text-align: center; background-color: #bb4e00; color: black; border: 1px solid black;">
                                    <b>{{ $equipment['equipmentData'] }}</b>
                                </th>
                            </tr>
                            @foreach($equipment['items'] as $item)
                            <tr style="text-align: center;">
                                <td>{{ $item['index'] }}</td>
                                <td>{{ $item['proposal_reference'] }}</td>
                                <td>{{ $item['proposal_amount'] }}</td>
                                <td>$&nbsp;{{ $item['proposal_unit_supply'] }}</td>
                                <td>$&nbsp;{{ $item['proposal_total_supply'] }}</td>
                                <td>$&nbsp;{{ $item['proposal_cost_facility'] }}</td>
                                <td>$&nbsp;{{ $item['proposal_unit_facility'] }}</td>
                                <td>$&nbsp;{{ $item['proposal_total'] }}</td>
                                <td>$&nbsp;{{ $item['proposal_cost_unit_global'] }}</td>
                                <td>$&nbsp;{{ $item['proposal_cost_total_global'] }}</td>
                            </tr>
                            @endforeach
                        @endforeach
                    @else
                        {{-- Un solo equipo --}}
                        <tr>
                            <th colspan="8" style="text-align: center; background-color: #bb4e00; color: black; border: 1px solid black;">
                                <b>{{ $data['selected_equipment']['equipmentData'] }}</b>
                            </th>
                        </tr>
                        @foreach($data['selected_equipment']['items'] as $item)
                        <tr style="text-align: center;">
                            <td>{{ $item['index'] }}</td>
                            <td>{{ $item['proposal_reference'] }}</td>
                            <td>{{ $item['proposal_amount'] }}</td>
                            <td>$&nbsp;{{ $item['proposal_total_supply'] }}</td>
                            <td>$&nbsp;{{ $item['proposal_unit_facility'] }}</td>
                            <td>$&nbsp;{{ $item['proposal_total'] }}</td>
                            <td>$&nbsp;{{ $item['proposal_cost_unit_global'] }}</td>
                                <td>$&nbsp;{{ $item['proposal_cost_total_global'] }}</td>
                        </tr>
                        @endforeach
                    @endif

                    <tr style="text-align: center;">
                        <td colspan="5" rowspan="3"></td>
                        <td colspan="2" style="border: 1px solid #DF7401; background-color: #bb4e00;">SUBTOTAL</td>
                        <td style="border: 1px solid #DF7401;">$&nbsp;{{ $data['subtotal_supply'] }}</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #DF7401; background-color: #bb4e00;">IVA %{{ $data['percentage_IVA'] }}</td>
                        <td style="border: 1px solid #DF7401;">$&nbsp;{{ $data['percentage_IVA_economic'] }}</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td colspan="2" style="border: 1px solid #DF7401; background-color: #bb4e00;">TOTAL</td>
                        <td style="border: 1px solid #DF7401;">$&nbsp;{{ $data['total_proposal_economic'] }}</td>
                    </tr>
                </table>
                @endif
                @if($showGlobalColumns)
    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left: 50px; margin-right: 50px; font-size: 12px; border-collapse: collapse;">
        <tr>
            <th colspan="5" style="text-align: center; background-color: #e05119; color: black; border: 1px solid black;">
                <b>{{ $data['name_table'] }}</b>
            </th>
        </tr>
        <tr style="text-align: center; background-color: #d98f5b; color: black;">
            <th style="border: 1px solid black;"><b>ITEM</b></th>
            <th style="border: 1px solid black;"><b>REFERENCIA</b></th>
            <th style="border: 1px solid black;"><b>CANTIDAD</b></th>
            <th style="border: 1px solid black;"><b>VALOR UNITARIO</b></th>
            <th style="border: 1px solid black;"><b>VALOR TOTAL</b></th>
        </tr>
        @if (is_array($data['selected_equipment']) && isset($data['selected_equipment'][0]))
            {{-- Múltiples equipos --}}
            @foreach($data['selected_equipment'] as $equipment)
                <tr>
                    <th colspan="5" style="text-align: center; background-color: #bb4e00; color: black; border: 1px solid black;">
                        <b>{{ $equipment['equipmentData'] }}</b>
                    </th>
                </tr>
                @foreach($equipment['items'] as $item)
                <tr style="text-align: center;">
                    <td>{{ $item['index'] }}</td>
                    <td>{{ $item['proposal_reference'] }}</td>
                    <td>{{ $item['proposal_amount'] }}</td>
                    <td>$&nbsp;{{ $item['proposal_cost_unit_global'] }}</td>
                    <td>$&nbsp;{{ $item['proposal_cost_total_global'] }}</td>
                </tr>
                @endforeach
            @endforeach
        @else
            {{-- Un solo equipo --}}
            <tr>
                <th colspan="5" style="text-align: center; background-color: #bb4e00; color: black; border: 1px solid black;">
                    <b>{{ $data['selected_equipment']['equipmentData'] }}</b>
                </th>
            </tr>
            @foreach($data['selected_equipment']['items'] as $item)
            <tr style="text-align: center;">
                <td>{{ $item['index'] }}</td>
                <td>{{ $item['proposal_reference'] }}</td>
                <td>{{ $item['proposal_amount'] }}</td>
                <td>$&nbsp;{{ $item['proposal_cost_unit_global'] }}</td>
                <td>$&nbsp;{{ $item['proposal_cost_total_global'] }}</td>
            </tr>
            @endforeach
        @endif

        <tr style="text-align: center;">
            <td colspan="2" rowspan="3"></td>
            <td colspan="2" style="border: 1px solid #DF7401; background-color: #bb4e00;">SUBTOTAL</td>
            <td style="border: 1px solid #DF7401;">$&nbsp;{{ $data['subtotal_global'] }}</td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="2" style="border: 1px solid #DF7401; background-color: #bb4e00;">IVA %{{ $data['percentage_IVA'] }}</td>
            <td style="border: 1px solid #DF7401;">$&nbsp;{{ $data['percentage_IVA_economic'] }}</td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="2" style="border: 1px solid #DF7401; background-color: #bb4e00;">TOTAL</td>
            <td style="border: 1px solid #DF7401;">$&nbsp;{{ $data['total_proposal_economic'] }}</td>
        </tr>
    </table>
@endif
            </td>
        </tr>
    </table>
    <table class="containing_main_table">
        <tr>
            <td class="td_containing_main">
                <p style="margin-top: 50px;"><b style="margin-bottom: 5px; color: darkorange; text-decoration: underline;">TIEMPO DE ENTREGA:</b></p>
                <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; ">
                    <li style="margin-bottom: 5px; color: rgb(0, 0, 0);">{!!$data['delivery_time']!!}</li>
                </ul>
                <p style="margin-top: 50px;"><b style="margin-bottom: 5px; color: darkorange; text-decoration: underline;">FORMA DE PAGO:</b></p>
                <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; ">
                    <li style="margin-bottom: 5px; color: rgb(0, 0, 0);">{!!$data['way_to_pay']!!}</li>
                </ul>
                <p style="margin-top: 50px;"><b style="margin-bottom: 5px; color: darkorange; text-decoration: underline;">VALIDEZ DE LA OFERTA</b></p>
                <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; ">
                    <li style="margin-bottom: 5px; color: rgb(0, 0, 0);">{!!$data['validity']!!}</li>
                </ul>
            </td>
        </tr>
    </table>
    <div style="page-break-inside: avoid;">
        <p style=" margin-top: 50px;">{!!$data['note']!!}</p>
        <table class="contact-info">
            <tr>
                <!-- Primera Columna: Información y Firma del Primer Usuario -->
                <td>
                    <div>
                        <strong>{{ strtoupper($data['user_name']) }}</strong><br>
                        <strong>Cargo:</strong> {{ $data['role_name'] }}<br>
                        <strong>Cel:</strong> {{ $data['phone'] }}<br>
                        <strong>e-mail:</strong> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a><br>
                        <div style="margin-top:8px">
                            <strong>Firma:</strong><br>
                            <br>
                            @if(!empty($data['user_signature']))
                                <img src="{{ $data['user_signature'] }}" width="200px" height="100px" alt="Firma">
                            @else
                                <strong>El usuario no cuenta con firma</strong>
                            @endif
                        </div>
                    </div>
                </td>
                
                <!-- Segunda Columna: Información y Firma del Segundo Usuario -->
                @if($economic_propsal_information_form['default_signatures']['revised']['status'])
                <td>
                    
                    <div>
                        <strong>{{ strtoupper($economic_propsal_information_form['default_signatures']['revised']['name']) }}</strong><br>
                        <strong>Cargo:</strong> {{ $economic_propsal_information_form['default_signatures']['revised']['charge'] }}<br>
                        <strong>Cel:</strong> {{ $data['phone_partner'] }}<br>
                        <strong>e-mail:</strong> <a href="mailto:{{ $data['email_partner'] }}">{{ $data['email_partner'] }}</a><br>
                        <div style="margin-top:8px">
                            <strong>Firma:</strong><br>
                            <br>
                            @if(!empty($economic_propsal_information_form['default_signatures']['revised']['signature']))
                                <img src="{{ $economic_propsal_information_form['default_signatures']['revised']['signature'] }}" width="200px" height="100px" alt="Firma">
                            @else
                                <strong>El usuario no cuenta con firma</strong>
                            @endif
                        </div>
                    </div>
                </td>
                @endif
            </tr>
        </table>
</div>

</body>
</html>
