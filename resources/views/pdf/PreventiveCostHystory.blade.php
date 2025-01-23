<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <title>{{$name}}</title>

    <style>
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
        }

        @page {
            size: A4;
            margin: 70px 10px 25px -35px;
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
            height: 80px; /* Ajusta la altura del header según tus necesidades */
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
        width: 66%; /* Cambiado de 100% a 50% para ocupar la mitad del ancho */
        height: 120px;
        position: absolute;
        top: -70px;
        bottom: 0;
        left: 37%; /* Ajustado el valor left para centrar la imagen en la mitad del header */
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

        .img-in-orange-box {
            max-width: 100%; /* Ajusta el tamaño de la imagen al contenedor */
            height: auto; /* Mantiene la proporción de la imagen */
            border: 1px solid #DF7401; /* Borde naranja para la imagen */
        }

        footer {
            background-color: #ffffff; 
            color: #fafafa; 
            padding: 10px; 
            position: fixed; 
            bottom: 0; 
            width: 100%; 
            height: 11%;
        }
        
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <img src="/home/nicolas/ipmx-web-3.0/public/images/vendor/vue-window-modal/Footer  Economic proposal/HEADER PROP INTERFIRE.png" alt="" style="header img"> 
        <div class="table-container">
        <table class="tg tg-table">
            <tr>
                <th class="tg-amwm" colspan="2"><span>test</span></th>
            </tr>
            <tr>
                <td class="tg-amwm" colspan="2"><span>test</span></td>
            </tr>
            <tr>
                <td class="tg-amwm" colspan="2"><span class="page"></span></td>
            </tr>
            <tr>
                <td class="tg-amwm" colspan="2">Fecha: {{ date("d/m/Y", strtotime($data_economic_proposal['date_realization']))}}</td>
            </tr>
        </table>
    </div>
    </header>
    <!-- END HEADER -->

    <!-- CONTENIDO PREESTABLECIDO -->
    <div style="margin-top: -15px; padding-right: 30px; padding-left: 30px;">
    <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <tr>
                <td style="font-size: 12px; text-align: right; padding-right: 50px;">
                    <p><b>Cotización No.{{$data['quote_number']}}</b></p> 
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <p>Bogotá D.C., &nbsp; {{ date("d/m/Y", strtotime($data['fecha_de_elaboracion']))}}</p> 
                </td>
            </tr>
            
            <tr>
                <td style="font-size: 15px; text-align: left; padding-left: 35px; line-height: -1;">
                    <p><b style="font-size: 17px;">Señores:</b></p> 
                    <p>{{$data['company']}} {{$data['sucursal']}}</p>
                    <p>{{$data['user_contact']}}</p> 
                    <p>{{$data['position']}}</p>
                    <p>{{$data['city']}} - {{$data['country']}}</p>
                </td>
            </tr>
    </table>
    <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <p style="margin-bottom: 5px;"><b>REF: PROPUESTA ECONÓMICA INSPECCIÓN, PRUEBA Y MANTENIMIENTO {{$data['frequency']}} DE LOS SISTEMAS DE PROTECCIÓN CONTRA INCENDIO DE {{$data['company']}} {{$data['sucursal']}}.</b></p>
                    &nbsp;
                    <p style="margin-bottom: 5px;">{{$data['introduction']}} {{$data['company']}} {{$data['sucursal']}}.</p>
                    <p style="margin-bottom: 5px;"><b style="margin-bottom: 5px; color: darkorange; text-decoration: underline;">OBJETIVO: </b></p>
                    <p style="margin-bottom: 5px;">{{$data['objetive']}}.</p>
                </td>
            </tr>
        </table>
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <tr style="margin-bottom: 10px;">
              <td style="font-size: 15px; text-align: left; padding-left: 35px;">
              <p style="margin-bottom: 5px; color: darkorange; text-decoration: underline;"><b>NORMATIVIDAD:</b></p>
                <p style="margin-bottom: 5px;">Nuestros trabajos estarán basados en versiones vigentes de las siguientes normas de la <b>NATIONAL FIRE PROTECTION ASSOCIATION (NFPA)</b> y de la <b>NORMA DE SISMORRESISTENCIA COLOMBIANA (NSR-10):</b></p>
                <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; padding-left: 75px;">
                  <li> <b>NFPA 1 -</b> Código de Incendios.</li>
                  <li> <b>NFPA 13 -</b> Norma para la instalación de sistemas de rociadores.</li>
                  <li> <b>NFPA 14 -</b> Norma para la instalación de sistemas de tubería vertical y de mangueras.</li>
                  <li> <b>NFPA 20 -</b> Norma para la instalación de Bombas Estacionarias de Protección contra incendios.</li>
                  <li> <b>NFPA 25 -</b> Norma para la inspección, prueba y mantenimiento de sistemas hidráulicos de protección contra incendios.</li>
                  <li> <b>NFPA 70 -</b> Código eléctrico nacional.</li>
                  <li> <b>NFPA 70E -</b> Norma para los Requisitos de Seguridad Eléctrica de los empleados en el lugar de trabajo.</li>
                  <li> <b>NFPA 72 -</b> Código Nacional de Alarmas de Incendios.</li>
                  <li> <b>NFPA 101 -</b> Código de Seguridad Humana.</li>
                  <li> <b>Y otras normas aplicables.</b></li>
                </ul>
                </table>
                &nbsp;
                <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
                    <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; padding-left: 75px;">
                  <li style="color: darkorange;"> <b>Inspección, prueba y mantenimiento del correcto funcionamiento de la red contra incendio.</b></li>
                    </ul>
                    <tr style="margin-bottom: 10px;">
                        <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                            <p>A continuación, se detallan los procedimientos contemplados en la propuesta para proporcionar el servicio, de acuerdo con la Frecuencia {{$data['frequency']}} seleccionada para la inspección, prueba y mantenimiento de los sistemas de protección contra incendios.</p>
                        </td>
                    </tr>
                    <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; padding-left: 75px;">
                        <li style="color: darkorange;"> <b>Inspección del Sistema De Protección Contra Incendio.</b></li>
                    </ul>
                    <tr style="margin-bottom: 10px;">
                        <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                            <p>Se realizará un examen visual de la red contra incendio, válvulas, manómetros,
                                tuberías, Rociadores automáticos y sus soportes, comprobando su condición de
                                operación, fugas, su estado físico, corrosión y posición.</p>
                        </td>
                    </tr>
                    <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; padding-left: 75px;">
                    <li style="color: darkorange;"> <b>Prueba de los Sistemas de Protección Contra Incendio.</b></li>
                        </ul>
                        <tr style="margin-bottom: 10px;">
                        <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                            <p>Este procedimiento estandarizado tiene como objetivo determinar el estado operativo de los componentes o sistemas mediante pruebas físicas periódicas. Incluye pruebas de flujo de agua, pruebas de bombas de incendio, pruebas de alarmas, de inundación y de válvulas.</p>
                        </td>
                    </tr>
                    <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; padding-left: 75px;">
                    <li style="color: darkorange;"> <b>Gabinetes Contra Incendio.</b></li>
                        </ul>
                        <tr style="margin-bottom: 10px;">
                        <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                            <p>Se hará revisión de todos los gabinetes contra incendio, para comprobar que cuenten
                                con los elementos básicos de protección, y se hará inspección visual de las
                                mangueras. Se desmontará la manguera de los dos gabinetes más lejanos del cuarto
                                de bombas, para revisar desempeño del equipo, comprobación del correcto
                                funcionamiento de la boquilla en sus distintas posiciones y del sistema de cierre,
                                comprobación de la estanqueidad de los racores y mangueras y estado de las juntas,
                                comprobación de la presión de la manguera con manómetro acoplado en el racor de
                                conexión de la manguera.</p>
                        </td>
                    </tr>
              </td>
            </tr>
    </table>
    &nbsp;
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; overflow-x: auto;">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; font-size: 12px; border-collapse: collapse; overflow-x: auto;">
                        <tr>
                            <th colspan="4" style="text-align: center; background-color: #e05119; color: black; border: 1px solid black;"><b>INSPECCIÓN {{ $inspection_systems['systems']}}</b></th>
                        </tr>
                        <tr style="text-align: center; background-color: #d98f5b; color: black;">
                            <th style="border: 1px solid black; background-color: #e05119;"><b>ITEM</b></th>
                            <th style="border: 1px solid black;"><b>EQUIPO</b></th>
                            <th style="border: 1px solid black;"><b>FRECUENCIA</b></th>
                            <th style="border: 1px solid black;"><b>RESPONSABLE</b></th>
                        </tr>
                    
                        @foreach ($data_table_inspections as $data_table_inspection) 
                            <tr style="text-align: left;">
                                <td style="border: 1px solid black; text-align: center; background-color: #e05119; color: black;">{{ $data_table_inspection['item']}}</td>
                                <td style="border: 1px solid black; background-color: #d98f5b;">{{ $data_table_inspection['equip']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $data_table_inspection['frequency']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $data_table_inspection['responsible']}}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        </table>
        &nbsp;
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; overflow-x: auto;">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; font-size: 12px; border-collapse: collapse; overflow-x: auto;">
                        <tr>
                            <th colspan="4" style="text-align: center; background-color: #e05119; color: black; border: 1px solid black;"><b>PRUEBAS {{ $tests_systems['systems']}}</b></th>
                        </tr>
                        <tr style="text-align: center; background-color: #d98f5b; color: black;">
                            <th style="border: 1px solid black; background-color: #e05119;"><b>ITEM</b></th>
                            <th style="border: 1px solid black;"><b>EQUIPO</b></th>
                            <th style="border: 1px solid black;"><b>FRECUENCIA</b></th>
                            <th style="border: 1px solid black;"><b>RESPONSABLE</b></th>
                        </tr>
                        
                        @foreach ($data_table_tests as $data_table_test) 
                            <tr style="text-align: left;">
                                <td style="border: 1px solid black; text-align: center; background-color: #e05119; color: black;">{{ $data_table_test['item']}}</td>
                                <td style="border: 1px solid black; background-color: #d98f5b;">{{ $data_table_test['equip']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $data_table_test['frequency']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $data_table_test['responsible']}}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        </table>
    </table>
        &nbsp;
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; overflow-x: auto;">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; font-size: 12px; border-collapse: collapse; overflow-x: auto;">
                        <tr>
                            <th colspan="4" style="text-align: center; background-color: #e05119; color: black; border: 1px solid black;"><b>MANTENIMIENTO {{ $maintenances_systems['systems']}}</b></th>
                        </tr>
                        <tr style="text-align: center; background-color: #d98f5b; color: black;">
                            <th style="border: 1px solid black; background-color: #e05119;"><b>ITEM</b></th>
                            <th style="border: 1px solid black;"><b>EQUIPO</b></th>
                            <th style="border: 1px solid black;"><b>FRECUENCIA</b></th>
                            <th style="border: 1px solid black;"><b>RESPONSABLE</b></th>
                        </tr>
                    
                        @foreach ($data_table_maintenances as $data_table_maintenance) 
                            <tr style="text-align: left;">
                                <td style="border: 1px solid black; text-align: center; background-color: #e05119; color: black;">{{ $data_table_maintenance['item']}}</td>
                                <td style="border: 1px solid black; background-color: #d98f5b;">{{ $data_table_maintenance['equip']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $data_table_maintenance['frequency']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $data_table_maintenance['responsible']}}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        </table>
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; padding-left: 75px;">
          <li style="color: darkorange;"> <b>Inspección, prueba y mantenimiento sistema de detección y alarma</b></li>
            </ul>
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: lÑBYeft; padding-left: 35px;">
                    <p>A cada uno de los dispositivos y equipos que conforman el sistema de detección y
                        alarma contra incendio tendrá completo servicio de las labores de mantenimiento
                        preventivo como son:</p>
                </td>
            </tr>
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                  <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; padding-left: 75px;">
                    <li> Inspección, prueba y mantenimiento y limpieza completa interior y exterior de
                        los dispositivos. (Paneles de incendio, módulos, detectores, estaciones
                        manuales, baterías, sirenas y luces estroboscópicas).</li>
                    <li> Verificación y pruebas de funcionamiento a cada uno de los detectores y
                        sirenas.</li>
                    <li> Verificación de cableado y puntos de ruptura de cableado.</li>
                    <li> Verificación de fuentes de alimentación.</li>
                  </ul>
                  </td>
              </tr>
        </table>
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; overflow-x: auto;">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; font-size: 12px; border-collapse: collapse; overflow-x: auto;">
                        <tr>
                            <th colspan="4" style="text-align: center; background-color: #e05119; color: black; border: 1px solid black;"><b>SISTEMA {{ $system_detection['systems']}}</b></th>
                        </tr>
                        <tr style="text-align: center; background-color: #d98f5b; color: black;">
                            <th style="border: 1px solid black;"><b>ITEM</b></th>
                            <th style="border: 1px solid black;"><b>EQUIPO</b></th>
                            <th style="border: 1px solid black;"><b>FRECUENCIA</b></th>
                            <th style="border: 1px solid black;"><b>RESPONSABLE</b></th>
                        </tr>
                    
                        @foreach ($data_table_detections as $data_table_detection) 
                            <tr style="text-align: left;">
                                <td style="border: 1px solid black; text-align: center; background-color: #d98f5b; color: black;">{{ $data_table_detection['item']}}</td>
                                <td style="border: 1px solid black; background-color: #d98f5b;">{{ $data_table_detection['equip']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $data_table_detection['frequency']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $data_table_detection['responsible']}}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        </table>
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: lÑBYeft; padding-left: 35px;">
                    <b style="color: darkorange;">NOTA:</b><b> Existe el sistema de Beam detector para lo cual se requiere equipo de
                        elevación, se realizará cotización adicional del alquiler de la misma, para el
                        mantenimiento de estos equipos.</b>
                </td>
            </tr>
        </table>
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <ul style="font-size: 15px; list-style-type: disc; line-height: 1.5; padding-left: 75px;">
          <li style="color: darkorange;"> <b>Otras actividades Incluidas</b></li>
            </ul>
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: lÑBYeft; padding-left: 35px;">
                    <p>Todas las actividades realizadas para cada sistema contra incendio, serán certificadas
                        mediante registro (formatos de inspección, prueba y mantenimiento), que estén
                        estipulados por la norma NFPA 25.</p>
                </td>
            </tr>
        </table>
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <p style="margin-bottom: 5px;"><b style="margin-bottom: 5px; color: darkorange; text-decoration: underline;">PROPUESTA ECONÓMICA:</b></p>
                    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; font-size: 12px; border-collapse: collapse;">
                        <tr>
                            <th colspan="6" style="text-align: center; background-color: #e05119; color: black; border: 1px solid black;"><b>Novedades</b></th>
                        </tr>
                        <tr style="text-align: center; background-color: #d98f5b; color: black;">
                            <th style="border: 1px solid black;"><b>ITEM</b></th>
                            <th style="border: 1px solid black;"><b>REFERENCIA</b></th>
                            <th style="border: 1px solid black;"><b>CANTIDAD</b></th>
                            <th style="border: 1px solid black;"><b>VALOR C/U</b></th>
                            <th style="border: 1px solid black;"><b>VALOR TOTAL</b></th>
                        </tr>
                    
                        @foreach ($table_proposed_values as $table_proposed_value) 
                            <tr style="text-align: left;">
                                <td style="border: 1px solid black; text-align: center">{{ $table_proposed_value['item']}}</td>
                                <td style="border: 1px solid black;">{{ $table_proposed_value['reference']}}</td>
                                <td style="border: 1px solid black; text-align: center">{{ $table_proposed_value['amount']}}</td>
                                <td style="border: 1px solid black;">$ {{ $table_proposed_value['frequency']}}</td>
                                <td style="border: 1px solid black;">$ {{ $table_proposed_value['unit_value']}}</td>
                                <td style="border: 1px solid black;">$ {{ $table_proposed_value['total_value']}}</td>
                            </tr>
                        @endforeach
                        <tr style="text-align: center;">
                            <td colspan="3" rowspan="3"></td>
                            <td colspan="2" style="border: 1px solid black; background-color: #bb4e00; color:" >SUBTOTAL</td>
                            <td style="border: 1px solid black;" >{{ $proposed_value_preventive['subtotal']}}</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td colspan="2" style="border: 1px solid black; background-color: #bb4e00; color:" >I.V.A 19%</td>
                            <td style="border: 1px solid black;" >{{ $proposed_value_preventive['IVA']}}</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td colspan="2" style="border: 1px solid black; background-color: #bb4e00; color:" >TOTAL</td>
                            <td style="border: 1px solid black;" >{{ $proposed_value_preventive['total_IVA']}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 35px; ">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <div class="orange-box">
                        <img src="ruta_de_la_imagen.jpg" alt="Imagen de ejemplo" class="img-in-orange-box" />
                    </div>
                </td>
            </tr>
        </table>
        <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <tr style="margin-bottom: 10px;">
                <td style="font-size: 15px; text-align: left; padding-left: 35px;">
                    <p style="margin-bottom: 5px; margin-top: 100px;">Atentamente</p>
                    &nbsp;
                    <p style="margin-bottom: 0px; margin-top: 0px;"><b>RICAURTE VILLAMARIN GUZMAN</b></p>
                    <p style="margin-bottom: 0px; margin-top: 0px;">Gerente General</p>
                    <p style="margin-bottom: 0px; margin-top: 0px;;">Tel. 7034550</p>
                    <p style="margin-bottom: 0px; margin-top: 0px;;">Cel.: 3002898865</p>
                    <p style="margin-bottom: 0px; margin-top: 0px;;">e-mail: ricaurte.villamarin@interfire.co</p>
                </td>
            </tr>
        </table>
    </div>
    <!-- FOOTER -->

     <footer>
        <img src="{{$certification}}" alt="" style="width: 95px; height: 80px; position: fixed; top: 0; right: 0; bottom: -100px;">
        <img src="/home/nicolas/ipmx-web-3.0/public/images/vendor/vue-window-modal/Footer  Economic proposal/Footer inter propuesta tecnologica.png" alt="" style="width: 100%; height: auto; position: absolute; bottom: -24px;left: 47%; transform: translateX(-50%);">
    </footer>

</body>

</html>
    