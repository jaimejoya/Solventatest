<!DOCTYPE html>
<html lang="es">

  <head>
    <title>{{$reportData['sucursal_name']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <meta charset="utf-8">
  
  <style>

    @page { margin: 1.5cm 0cm 2cm;}
        .tg  {border-collapse:collapse;border-spacing:8;}
        .tg td{font-family:Arial, sans-serif;font-size:10px;padding:2px 15px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#DF7401;}
        .tg th{font-family:Arial, sans-serif;font-size:10px;font-weight:normal;padding:2px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#DF7401;}
        .tg .tg-s6z2{text-align:center}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-lqy6{text-align:right;vertical-align:top}
        .tg .tg-hgcj{font-weight:bold;text-align:center}
        .tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:middle}
        .tg .tg-yw4l{vertical-align:top}
        .tg .tg-ssyz{font-weight:bold;background-color:#ffce93;color:#000000;text-align:center;vertical-align:top}
        .tg .tg-9hbo{font-weight:bold;vertical-align:top}
        .tg .tg-5qfb{font-weight:bold;background-color:#ffce93;text-align:center;vertical-align:top}
        table.area-cotizacion td, table.area-cotizacion th  {border-right: none;border-top:none; }

        table, td, th {
          border: 1px solid #DF7401;
          border-collapse: collapse;
          font-size: 10px; 
          width: 100%;            
        }

      .page-break {
        page-break-before: always;
      }

      .pagenum:before{
        content: counter(page);
      }

      :root {
        --total-pages: 0;
      }

      ol { padding:0; font-family: Arial, Helvetica, sans-serif; counter-reset: item; font-size: 14px; margin-top: -25px; }
        ol li{ display: block }
        ol li:before { content: counters(item, ".") " "; counter-increment: item }
      
      ul{
        padding: 0;
      }
      ul li {margin-left: 14px}
          
      header#mainHeader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 200px; 
          z-index: 1000;
      }

      .main-content-one-page{  
        margin-top: 60px;           
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;

      }

      .main-content {
        /* margin-top: 20px; */
        margin-bottom: 40px;
        box-sizing: border-box;
        font-family: 'Arial, Helvetica, sans-serif';
      }

      .main-sub-content{        
        font-family: 'Arial, Helvetica, sans-serif';        
        flex: 90; /* Hace que el contenido principal ocupe el espacio disponible */        
        display: flex;
        align-items: center;
        justify-content: center;
      }

      html {
        margin-left: 40px;
        margin-right: 40px;
      }

      .page::before {
        counter-increment: page-counter 1;
        content: "Página " counter(page-counter);
      }

      footer img {
        width: 100px;
        height: 100px;
      }

      .footer-content img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
      }
      .a1{
        color:black;
        top: 40px;
        margin-top:35px;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
        font-size: 15px;
      }

      .title{
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;
      }

      .letter{
        font-family: 'Arial, Helvetica, sans-serif';
        text-align: justify;
        /* margin-top: 50px; */
        /* padding-top: 50px; */
      }

      .letter-size {
        font-size: 17px;
      }

      .margin{
        margin-left: 10px;
        margin-right: 60px
      }

      .margin-conclution{
        
        margin-left: 40px;
        margin-right: 40px
      }

      .ul{
          background-image: url({$report_generate['information_maintenance']['bullet_point']['image']});
          background-repeat: no-repeat;
          background-position: left center;
          background-size: 15px;
          padding: 0;          
          list-style: none;
      }
      
      .logo-client {
        margin-top: 50px;
      }

      /* .img{
        width: 120px;
        height: 140px;
        border: 2px 
        solid #DF7401;
        margin-top:8px;
      } */

      .content{
        margin-top: 80px;
      }

      .footer-title{
          text-align: center;
          //display: inline-grid;
          width:100%;
          margin-top:40px        
      }
     
      #table{ 
        display: table; 
        margin-left: 20px;
        text-align: center;
        align-items: center;
        overflow-x:auto;
      }
      .tr{ 
          display: table-row; 
          margin-top: 22px;
          margin-bottom: 10px;
      }
      th {
          word-wrap: break-word;
      }
      .td { 
          display: table-cell;
          word-wrap: break-word;
      }
      h1 {
        display: inline;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
      }

      h2 {
        display: inline;
        font-size: 15px;
        font-weight: bold;
        text-transform: uppercase;
      }
      .custom-counter {
          counter-reset: main-counter;
          list-style: none;
          padding-left: 0;
          padding-top: 5px;
      }

      .custom-counter > li {
          counter-increment: main-counter;
          margin-bottom: 20px;
      }

      .custom-counter > li::before {
          content: counter(main-counter) ". ";
          font-weight: bold;
          text-transform: uppercase;
          font-size: 18px;
      }

      .sublist {
          counter-reset: sub-counter;
          list-style: none;
          padding-top: 30px;
      }

      .sublist > li {
          counter-increment: sub-counter;
          margin-bottom: 10px;
      }

      .sublist > li::before {
          content: counter(main-counter) "." counter(sub-counter) ". ";
          font-weight: bold;
          text-transform: uppercase;
          font-size: 15px;
      }

      .sub-sublist {
          counter-reset: sub-sub-counter;
          list-style: none;
          padding-top: 40px;
      }

      .sub-sublist > li {
          counter-increment: sub-sub-counter;
          margin-bottom: 20px;
      }

      .sub-sublist > li::before {
          content: counter(main-counter) "." counter(sub-counter) "." counter(sub-sub-counter) ". ";
          font-weight: bold;
          text-transform: uppercase;
          font-size: 15px;
      }

      .description {
          margin-top: 10px;
          font-size: 15px;
          page-break-inside: avoid;
      }

      .report-table {
          width: 100%;
          font-size: 15px;
          margin-top: 10px;
          padding: 0;
          table-layout: fixed;
      }
      .report-table th, .report-table td {
        word-wrap: break-word;
        min-width: 50px;
        overflow-wrap: break-word;
      }
      /* .images-container {
          margin-top: 30px;
          text-align: center;
      } */

      .present-to {
        margin-top: 50px;
      }

      .company-name {
        display: block;
        margin-top: 20px;
      }

      body {
        padding-top: 100px; /* Cambiado a 150px para ajustarse a la altura del encabezado */
        padding-bottom: 20px;
        box-sizing: border-box;
        counter-reset: page-counter 0;
      }
      footer {
        position: fixed;
        width: 100%;
        bottom: -50;
        z-index: 1000;
        background-color: white;
        text-align: right;
        padding: 10px;
      }

      .images-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center; 
          text-align: center;
          gap: 10px;
          margin: 0 auto;
          align-items: flex-start;
      }

      .img {
        width: 120px;
        height: 140px;
        border: 2px solid #DF7401;
        margin-top: 8px;
        margin-bottom: 8px;

      }

      .image-wrapper {
        display: inline-block; /* Asegura que los contenedores de imágenes estén uno al lado del otro */
        text-align: center;
        width: 130px;
        margin: 0 auto;
        vertical-align: top; /* Evita que la imagen se desplace */
        word-wrap: break-word;
        page-break-inside: avoid;
      }

      .image-wrapper b {
        word-wrap: break-word; /* Evita que el texto se salga de los límites */
        margin-top: 5px; /* Añade un pequeño espacio entre la imagen y el texto */
        flex-grow: 1; /* Permite que el texto crezca si es necesario */
      }
      

  </style>

  <body class="letter">

    
    {{-- <!-- HEADER -->
      <header id="mainHeader">

        <table class="tg" style="width: 100%; background: white;border-radius:35px;">

          <tr>
            <th class="tg-s6z2" rowspan="4" style="width:100px">
              @if(!empty($reportData['logo']))
                <img src="{{$reportData['logo']}}" width="80px">
              @endif
            </th>
            @if($reportData['information_extinguisher']['title']['status'])
              <th class="tg-hgcj" rowspan="4" style="border-radius:12px">
                <span style='font-size: 15px'>{{$reportData['information_extinguisher']['title']['description']}} {{$reportData['company_name']}} {{$reportData['sucursal_name']}}</span> 
              </th>
            @endif
            <th class="tg-amwm" style="width:50%"><span class="page"></span></th>
          </tr>

          @if($reportData['information_extinguisher']['format_version']['status'])
            <tr>
              <td class="tg-amwm" style="width:50%"><span>{{$reportData['information_extinguisher']['format_version']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <td lass="tg-amwm" width="50px"></td>
            </tr>
          @endif

          @if($reportData['information_extinguisher']['code_quality']['status'])
            <tr>              
              <td class="tg-amwm" style="width:50%"><span>{{$reportData['information_extinguisher']['code_quality']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <td lass="tg-amwm" width="50px"></td>
            </tr>
          @endif               

          @if($reportData['information_extinguisher']['format_date']['status'])
            <tr>
              <td class="tg-amwm" style="width:50%"><span>{{$reportData['information_extinguisher']['format_date']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <th class="tg-amwm" style="width:50%"></td>
            </tr>
          @endif

        </table>

      </header>

      <br>
      <br>
      <br>
      
    <!-- END HEADER --> --}}

    <!-- HEADER -->
    <header id="mainHeader" style="position: fixed; top: 0; width: 100%; height: auto;">
      <table class="tg" style="width: 100%; background: white; border-radius: 35px;">
          <tr>
              <th class="tg-s6z2" rowspan="4" style="width:100px">
                  @if(!empty($reportData['logo']))
                      <img src="{{$reportData['logo']}}" width="80px">
                  @endif
              </th>
              @if($reportData['information_extinguisher']['title']['status'])
                  <th class="tg-hgcj" rowspan="4" style="border-radius:12px">
                      <span style='font-size: 15px'>
                          {{$reportData['information_extinguisher']['title']['description']}} 
                          {{$reportData['company_name']}} {{$reportData['sucursal_name']}}
                      </span> 
                  </th>
              @endif
              <th class="tg-amwm" style="width:50%">
                  <span class="page"></span>
              </th>
          </tr>

          @if($reportData['information_extinguisher']['format_version']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$reportData['information_extinguisher']['format_version']['description']}}</span>
                  </td>
              </tr>
          @else
              <tr>
                  <td class="tg-amwm" width="50px"></td>
              </tr>
          @endif

          @if($reportData['information_extinguisher']['code_quality']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$reportData['information_extinguisher']['code_quality']['description']}}</span>
                  </td>
              </tr>
          @else
              <tr>
                  <td class="tg-amwm" width="50px"></td>
              </tr>
          @endif

          @if($reportData['information_extinguisher']['format_date']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$reportData['information_extinguisher']['format_date']['description']}}</span>
                  </td>
              </tr>
          @else
              <tr>
                  <th class="tg-amwm" style="width:50%"></th>
              </tr>
          @endif
      </table>
    </header>
    <!-- END HEADER -->
    <!-- BODY -->
      <div class="main-content-one-page">

          <p>            
            <strong>
              {{$reportData['information_extinguisher']['title']['description']}}
              <br>
              <b style="text-transform: uppercase">{{$reportData['company_name']}}</b>
              <br>
              <b style="text-transform: uppercase">{{$reportData['sucursal_name']}}</b>
            </strong>

          </p>
              
              
          <p class="present-to"><strong>
              Presentado a:
              <br>
              <b class="company-name">{{$reportData['company_name']}}</b>
            </strong>
          </p>
          
          @if ($reportData['company_logo'] != '')
            <div class='logo-client'>
                <img src="https://s3.amazonaws.com/ipm-visits/{{$reportData['company_logo']}}" width="20%"  max-width="20%">
                <br>
            </div>
            @else
            <div class='logo-client' style="margin-top:50px;">
            </div>
          @endif


          <div class="content">
              <b>{{$reportData['partner']}}</b>
              <br>
              <b>{{$reportData['dateGenerate']}}</b>
              <br>
          </div>
           
          <div class="footer-title" >
            <table class="tg" style="width: 100%; background: white;border-radius:35px;margin-top:80px">            
              <tr>
                  <td width="100px" style="margin-top:8px"> <strong>ELABORO:</strong>
                    <div style="text-align:center;">
                      @if(count($reportData['users_who_activities'])>1)
                        @foreach ($reportData['users_who_activities'] as $userWho)
                          <div class="row" style="margin-top:2px">
                            <div class="row"><label for="" style="text-transform:uppercase;">{{ $userWho['name_user'] }}</label></div>
                            <div class="row"><label for="" style="text-transform:uppercase;">{{ $userWho['charge']}}</label></div>
                            <div class="row"><img src="{{ $userWho['signature'] }}" width="100px"></div>                          
                          </div>
                        @endforeach
                        <div class="row" style="margin-top:8px"><label>{{$reportData['users_who_activities_date']}}</label></div>                      
                        @else
                        <div style="text-align:center;margin-top:5px">
                          @foreach ($reportData['users_who_activities'] as $userWho)
                            
                            <div class="row">
                              <img src="{{ $userWho['signature'] }}" width="100px">
                            </div>
                            <div class="row">
                              <label for="" style="text-transform:uppercase;">{{ $userWho['name_user'] }}</label>
                            </div>
                            <div class="row">
                              <label for="" style="text-transform:uppercase;">{{ $userWho['charge']}}</label>
                            </div>                          
                          @endforeach
                          <div class="row" style="margin-top:8px;margin-bottom:8px">
                            <label>{{$reportData['users_who_activities_date']}}</label>
                          </div>
                        </div>
                      @endif
                    </div>
                  </td>

                  @if($reportData['information_extinguisher']['default_signatures']['revised']['status'])

                    <td width="100px"> <strong>REVISO:</strong>
                        <div style="text-align:center;margin-top:5px">
                          <div class="row">
                            <img src="{{$reportData['userRevised']['signature']}}" width="100px">
                          </div>
                          <div class="row">
                            <label for="" style="text-transform:uppercase;">{{$reportData['userRevised']['name_user']}}</label>
                          </div>
                          <div class="">
                            <label for="" style="text-transform:uppercase;">{{$reportData['userRevised']['charge']}}</label>
                          </div>
                          <div class="row" style="margin-top:8px;margin-bottom:8px">
                            <label>{{$reportData['dateRevised']}}</label>                            
                          </div>
                        </div>
                    </td>

                  @endif

                  @if($reportData['information_extinguisher']['default_signatures']['approved']['status'])

                    <td width="100px" style="margin-top:8px"> <strong>APROBO</strong>
                      <div style="text-align:center;margin-top:5px">
                        <div class="row">
                          @if(!empty($reportData['information_extinguisher']['default_signatures']['approved']['signature']))
                            <img src="{{$reportData['information_extinguisher']['default_signatures']['approved']['signature']}}" width="100px">
                          @endif
                        </div>
                        <div class="row">
                          <label for="" style="text-transform: uppercase;">{{$reportData['information_extinguisher']['default_signatures']['approved']['name']}}</label>
                        </div>
                        <div class="row">
                          <label for="" style="text-transform: uppercase;">{{$reportData['information_extinguisher']['default_signatures']['approved']['charge']}}</label>
                        </div>
                        <div class="row" style="margin-top:8px;margin-bottom:8px">
                          <label>{{$reportData['dateApproved']}}</label>
                        </div>
                      </div>
                    </td>

                  @endif
              </tr>
            </table>
          </div>
      </div>
    <!-- END BODY -->

    <!-- FOOTER -->

      @if (!empty($reportData['certification']))

        <footer>
          <div class="footer-content">        
            <img src="{{$reportData['certification']}}" alt="" width="100" height="100">
          </div>
        </footer>

      @endif

    <!--- END FOOTER ---->

    <!--- TABLE CONTENT --->

      <div class="main-content" style="page-break-before:always;">

        <p class="title">
          <strong >CONTENIDO</strong>
        </p>

        <ol style="margin-top:40px;text-align:justify;">
 
          @if($reportData['information_extinguisher']['glossary']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#glosary" style="margin-top:25px;">GLOSARIO</a>
            </div>
          @endif

          @if($reportData['information_extinguisher']['introduction']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#introduction">INTRODUCCIÓN</a>
            </div>
          @endif

          @if($reportData['information_extinguisher']['inspection_basis']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#basis_inspection">BASES DE INSPECCIÓN</a>
            </div>
          @endif
          
          @foreach ($reportData['subsystems'] as $key => $subsystem)
            <li class="li" style="margin-top:15px;"><a class="a1" href="#{{$subsystem['name']}}" style="text-transform:uppercase">. &nbsp;&nbsp;{{ $subsystem['name'] }}</a></li>            
          @endforeach

          @if (!empty($reportData['correctives']))
            <li class="li"><a class="a1" href="#correctives">.&nbsp;CORRECTIVOS REALIZADOS</a></li>    
          @endif

          @if ( !empty($reportData['corrective']['alta']) ||!empty($reportData['preventive']['alta']) ||!empty($reportData['still_install']['alta']) ||!empty($reportData['corrective']['media']) ||!empty($reportData['preventive']['media']) ||!empty($reportData['still_install']['media'])||!empty($reportData['corrective']['baja']) ||!empty($reportData['preventive']['baja']) ||!empty($reportData['still_install']['baja']))
            <li class="li"><a class="a1" href="#recomendations">.&nbsp;RECOMENDACIONES</a></li>
          @endif
                  
        </ol>

      </div>

    <!--- END TABLE CONTENT --->

    <!--- GLOSARIO ---->

      @if($reportData['information_extinguisher']['glossary']['status'])

        <div class="main-content" style="page-break-before:always;">
          
          <p class="title"><a id="glosary"><strong>GLOSARIO</a></strong></p>
          
          @if(!empty($reportData['information_maintenance']['glossary']['description']))
            <p style="text-align:justify; margin-top:35px;">
              {{$reportData['information_maintenance']['glossary']['description']}}
            </p>
          @endif

          <ul>
            @foreach ($reportData['information_extinguisher']['glossary']['data'] as $item)
              @if($reportData['information_extinguisher']['bullet_point']['status'])
                <li class="ul" style="margin-top:12px;text-align:justify;">
                  <b>1{{$item['word']}}</b> &nbsp;<label for="">{{$item['description']}}</label>
                </li>
              @else

                <li style="margin-top:5px;text-align:justify">
                  <b>{{$item['word']}}</b><label for="">{{$item['description']}}</label>
                </li>

              @endif

              <br>
                
            @endforeach        
          </ul>

        </div>
        
      @endif

    <!--- END GLOSARIO --->


    <!--- INTRODUCCION ---->
      @if($reportData['information_extinguisher']['introduction']['status'])
        <div class="main-content" style="page-break-before:always;">      
          <p class="title"><a id="introduction"><strong>INTRODUCCIÓN</strong></a></p>
          <br>
          <p style="text-align:justify;">
            {{$reportData['information_extinguisher']['introduction']['description']}}
          </p>
        </div>
      @endif

    <!--- END INTRODUCCION ---->

    <!---- BASES DE INSPECCION ----> 

      @if($reportData['information_extinguisher']['inspection_basis']['status'])
        <div class="main-content" style="page-break-before: always; margin: 0; padding-top: 10px; box-sizing: border-box; font-family: 'Arial, Helvetica, sans-serif'; min-height: 100vh; display: flex; flex-direction: column; justify-content: space-between;">
        
          <p class="title"><a id="basis_inspection"><strong>BASES DE INSPECCIÓN</strong></a></p>

          <div style="margin-top:25px;text-align:justify">
            <p class="p1" style="font-size: 17px">
              {{$reportData['information_extinguisher']['inspection_basis']['description']}}
            </p>
  
            <ul style="margin-top:15px;">
              @foreach ($reportData['information_extinguisher']['inspection_basis']['data'] as $item)
                <li style="margin-bottom:8px">{{$item['word']}} - {{$item['description']}}</li>
              @endforeach
            </ul>
  
            <p class="p1" style="font-size: 17px">
              Las actividades desarrolladas se registraron en el software de gestión de mantenimiento IPM-X(desarrollado por Only Fire Security)
            </p>
          </div>
        </div>
      @endif
    
    <!--- END BASES DE INSPECCION ---->


      <!---- IPM ---->

      <ol class="custom-counter">
        @foreach ($reportData['subsystems'] as $subsystem )
          <li style="page-break-inside: avoid;">
            <h1>
              <a id="{{ $subsystem['name'] }}" style="text-transform: uppercase"><b>{{ $subsystem['name'] }}</b></a>
            </h1>
      
            @if(!empty($subsystem['description']))
            <p class="description">{{ $subsystem['description'] }}</p>
            @endif
      
            @foreach ($subsystem['reports'] as $reportActivity)
              <div style="margin-top: 10px;">
                <div style="page-break-inside: avoid;">
                  <p style="font-size: 15px; text-transform: uppercase;"><b>TABLA {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }}</b></p>
                  @foreach ($reportActivity['reports_equipment'] as $activities)
                    <table class="report-table" align="center" style="page-break-inside: avoid;">
                        <tr>
                            <th colspan="{{ count($activities['equipments']) + 2 }}">
                                <b style="text-transform: uppercase">ACTIVIDADES REALIZADAS {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }} {{ $subsystem['name'] }}</b>
                            </th>
                        </tr>

                        <tr>
                            <th rowspan="2" style="width:40%"><b>Ítem</b></th>
                            <th rowspan="2"><b>Descripción de la actividad</b></th>
                            <th colspan="{{ count($activities['equipments']) }}"><b>EQUIPOS</b></th>
                        </tr>

                        <tr>
                            @foreach ($activities['equipments'] as $equipment)
                                <th style="width:auto">
                                    <label for="" style="white-space:break-spaces;">{{ $equipment }}</label>
                                </th>
                            @endforeach
                        </tr>

                        @php
                            $groupedData = [];
                            foreach ($activities['data'] as $dataItem) {
                                $groupedData[$dataItem['name']][$dataItem['equipment']] = $dataItem['datos'];
                            }
                        @endphp

                        @foreach ($groupedData as $name => $equipments)
                            <tr align="center" style="white-space:break-spaces;">
                                <td style="width:40%">{{ $loop->iteration }}</td>
                                <td>{{ $name }}</td>

                                @foreach ($activities['equipments'] as $equipment)
                                    @php
                                        $dato = isset($equipments[$equipment]) ? $equipments[$equipment] : null;
                                    @endphp

                                    @if (!is_null($dato))
                                        @if ($dato == 'Conforme')
                                            <td style="color: green">{{ $dato }}</td>
                                        @elseif ($dato == 'No Conforme')
                                            <td style="color: red">{{ $dato }}</td>
                                        @elseif (\DateTime::createFromFormat('Y-m-d', $dato) !== false || 
                                                \DateTime::createFromFormat('Y-m-d H:i:s', $dato) !== false || 
                                                \DateTime::createFromFormat('Y-m-d\TH:i:sP', $dato) !== false)
                                            @php
                                                $dateFormats = ['Y-m-d', 'Y-m-d H:i:s', 'Y-m-d\TH:i:sP'];
                                                foreach ($dateFormats as $format) {
                                                    $date = \DateTime::createFromFormat($format, $dato);
                                                    if ($date !== false) {
                                                        break;
                                                    }
                                                }
                                            @endphp
                                            <td>{{ $date->format('d/m/Y') }}</td>
                                        @else
                                            <td>{{ $dato }}</td>
                                        @endif
                                    @else
                                        <td>No Aplica</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                        {{-- @foreach ($activities['data'] as $key => $data)
                            <tr align="center" style="white-space:break-spaces;">
                                <td style="width:40%">{{ ++$key }}</td>    
                                <td>{{ $data['name'] }}</td>

                                @foreach ($activities['equipments'] as $equipment)
                                    @php
                                        // Verificamos si el equipo actual coincide con el equipo de la actividad
                                        $dato = ($data['equipment'] == $equipment) ? $data['datos'] : null;
                                    @endphp

                                    @if (!is_null($dato))
                                        @if ($dato == 'Conforme')
                                            <td style="color: green">{{ $dato }}</td>
                                        @elseif ($dato == 'No Conforme')
                                            <td style="color: red">{{ $dato }}</td>
                                        @elseif (\DateTime::createFromFormat('Y-m-d', $dato) !== false || 
                                                \DateTime::createFromFormat('Y-m-d H:i:s', $dato) !== false || 
                                                \DateTime::createFromFormat('Y-m-d\TH:i:sP', $dato) !== false)
                                            @php
                                                $dateFormats = ['Y-m-d', 'Y-m-d H:i:s', 'Y-m-d\TH:i:sP'];
                                                foreach ($dateFormats as $format) {
                                                    $date = \DateTime::createFromFormat($format, $dato);
                                                    if ($date !== false) {
                                                        break;
                                                    }
                                                }
                                            @endphp
                                            <td>{{ $date->format('d/m/Y') }}</td>
                                        @else
                                            <td>{{ $dato }}</td>
                                        @endif
                                    @else
                                        <td></td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach --}}
                    </table>
                    <div style="margin-bottom: 30px;"></div>
                  @endforeach


                  {{-- @foreach ($reportActivity['reports_equipment'] as $activities)
                    <!-- Aplicar 'page-break-inside: avoid;' para evitar que la tabla se parta entre páginas -->
                    <table class="report-table" align="center" style="page-break-inside: avoid;">
                      <tr>
                        <th colspan="{{ count($activities['equipments']) + 2 }}">
                          <b style="text-transform: uppercase">ACTIVIDADES REALIZADAS {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }} {{ $subsystem['name'] }}</b>
                        </th>
                      </tr>
                      
                      <tr>
                        <th rowspan="2" style="width:40%"><b>Ítem</b></th>
                        <th rowspan="2"><b>Descripción de la actividad</b></th>
                        <th colspan="{{ count($activities['equipments']) }}"><b>EQUIPOS</b></th>
                      </tr>
      
                      <tr>
                        @foreach ($activities['equipments'] as $equipment)
                          <th style="width:auto">
                            <label for="" style="white-space:break-spaces;">{{ $equipment }}</label>
                          </th>
                        @endforeach
                      </tr>
                      @foreach ($activities['data'] as $key => $data)
                        <tr align="center" style="white-space:break-spaces;">
                            <td style="width:40%">{{ ++$key }}</td>    
                            <td>{{ $data['name'] }}</td>
                            @foreach ($activities['equipments'] as $index => $equipment)
                                @if (isset($data['datos'][$index]) && !empty($data['datos'][$index]))
                                    @php
                                        $dato = $data['datos'][$index];
                                    @endphp
                                    @if ($dato == 'Conforme')
                                        <td style="color: green">{{ $dato }}</td>
                                    @elseif($dato == 'No Conforme')
                                        <td style="color: red">{{ $dato }}</td>
                                    @elseif (\DateTime::createFromFormat('Y-m-d', $dato) !== false || 
                                            \DateTime::createFromFormat('Y-m-d H:i:s', $dato) !== false || 
                                            \DateTime::createFromFormat('Y-m-d\TH:i:sP', $dato) !== false) 
                                        @php
                                            $dateFormats = ['Y-m-d', 'Y-m-d H:i:s', 'Y-m-d\TH:i:sP'];
                                            foreach ($dateFormats as $format) {
                                                $date = \DateTime::createFromFormat($format, $dato);
                                                if ($date !== false) {
                                                    break;
                                                }
                                            }
                                        @endphp
                                        <td>{{ $date->format('d/m/Y') }}</td>
                                    @else
                                        <td>{{ $dato }}</td>
                                    @endif
                                @else
                                    <!-- Si no hay dato para este equipo, dejar la celda vacía -->
                                    <td></td>
                                @endif
                            @endforeach
                        </tr>
                      @endforeach
                    </table>
                    <div style="margin-bottom: 30px;"></div> <!-- Esta línea añade el espacio -->
                  @endforeach --}}
                </div>
                
                @foreach ($reportActivity['images'] as $images)
                  <div class="images-container">
                    {{-- @foreach ($images as $image) --}}
                    @foreach ($images as $index => $image)
                    <div class="image-wrapper">
                        <img src="{{ $image['evidence'] }}" class="img">
                        <br>
                        <b style="font-size: 8px; display: block;"> {{ $index + 1 }}. Equipo: {{ $image['code'] }}</b>
                        <b style="font-size: 7px; display: block;">{{ $image['name'] }}</b>
                      </div>
                    @endforeach
                  </div>   
                @endforeach 
              </div> 
            @endforeach 
          </li>   
        @endforeach
      </ol>


          <!---- CORRECTIVES ---->

            @if (!empty($reportData['correctives']))

                      
              <li style="text-align:center; page-break-before:always; margin-top: 25px">

                <h1 class="letter"><a id="correctives">CORRECTIVOS REALIZADOS</a></h2>                          

                <p class="letter" style="font-size:15px;">
                  En esta dependencia se encuentran las descripciones de las actividades que fueron corregidas junto con la fecha de ejecución. 
                </p>

                <ol class="sublist" style="margin-top:10px; text-align:left;">
                  
                    @foreach ($reportData['correctives'] as $corrective)

                      <li style="list-style-type: circle;page-break-inside: avoid;"> 
                        <h2 style="list-style-type: disc;">Novedad:</h2> 
                        <label>{{ $corrective['novelty'] }}</label>
                        <br>
                        <br>
                        <b style="margin-top:20px">Fecha de Corrección:</b> {{ $corrective['date_executed'] }} 
                        <br>
                        <br>
                        <b style="margin-top:20px">Actividad Corregida:</b> {{ $corrective['description'] }}
                        <br>
                        <br>
                        @if (!empty($corrective['subsystem']) && !empty($corrective['equipment']))
                          <b>Subsistema:</b> <label>{{$corrective['subsystem']}}</label>
                          <br><br>
                          <b>Equipo:</b> <label>{{$corrective['equipment']}}</label>
                          <br><br>
                        @endif
                        <b>Imagenes:</b>
                        <br>
                        <br>

                        <div  class="card-body" style="margin-top:15px;">

                          <div class="row row-cols-2 row-cols-md-3" align="center">
                            
                              <div class="card h-20">
                                @foreach ($corrective['images'] as $image )
                                <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                @endforeach
                              </div>
                            
                          </div>
                        </div>
                      </li>
                      <br>                    
                    @endforeach
                  
                </ol>

              </li>

            @endif
          
          <!---- RECOMENDATION ---->


            @if ( !empty($reportData['corrective']['alta']) ||!empty($reportData['preventive']['alta']) ||!empty($reportData['still_install']['alta']) ||!empty($reportData['corrective']['media']) ||!empty($reportData['preventive']['media']) ||!empty($reportData['still_install']['media'])||!empty($reportData['corrective']['baja']) ||!empty($reportData['preventive']['baja']) ||!empty($reportData['still_install']['baja']))

              <li style="text-align:center; page-break-before:always;">

                {{-- <b class="letter" style="text-align:center;">.&nbsp;<a id="recomendations">RECOMENDACIONES</a></b> --}}
                <h1 class="letter"><a id="recomendations">RECOMENDACIONES</a></h1>

                <p class="letter description" style="text-align:justify;">
                  En esta dependencia se encuentran pendientes que son requeridos para poner operativo los equipos: 
                </p>

                <ol class="sublist" style="text-align:justify; ">

                  @if (count($reportData['corrective']['alta'])!= 0|| count($reportData['corrective']['media']) != 0 || count($reportData['corrective']['baja']) != 0)

                    <li>
                      
                      {{-- <b class="letter">.&nbsp; RECOMENDACIONES POR FALLAS:</b> --}}
                      <h2 style="text-align:left;">RECOMENDACIONES POR FALLAS:</h2>

                      <ol class="sub-sublist" >

                        @if (count($reportData['corrective']['alta'])!= 0)
                          <b style="text-align:left; margin-top:20px">PRIORIDAD ALTA:</b>
                          @foreach ($reportData['corrective']['alta'] as $novelty_corrective)                      
                            <li style="margin-top:15px; page-break-inside: avoid;">
                              <label>{{$novelty_corrective['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_corrective['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_corrective['subsystem']) && !empty($novelty_corrective['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_corrective['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_corrective['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_corrective['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach                          

                        @endif

                        @if (count($reportData['corrective']['media'])!= 0)

                          <b class="letter">PRIORIDAD MEDIA:</b>
                          @foreach ($reportData['corrective']['media'] as $novelty_corrective)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_corrective['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_corrective['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_corrective['subsystem']) && !empty($novelty_corrective['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_corrective['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_corrective['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_corrective['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach                        

                        @endif

                        @if (count($reportData['corrective']['baja'])!= 0)

                          <b class="letter">PRIORIDAD BAJA:</b>
                          @foreach ($reportData['corrective']['baja'] as $novelty_corrective)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_corrective['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_corrective['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_corrective['subsystem']) && !empty($novelty_corrective['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_corrective['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_corrective['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_corrective['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach
                        @endif
                      </ol>
                    </li>
                  @endif


                  @if (count($reportData['preventive']['alta'])!= 0|| count($reportData['preventive']['media']) != 0 || count($reportData['preventive']['baja']) != 0)

                    <li>
                      
                      {{-- <b class="letter">.&nbsp; RECOMENDACIONES POR CONSUMIBLES:</b> --}}
                      <h2 style="text-align:left;">RECOMENDACIONES POR CONSUMIBLES:</h2>

                      <ol class="sub-sublist" >

                        @if (count($reportData['preventive']['alta'])!= 0)

                          <b class="letter">PRIORIDAD ALTA:</b>
                          @foreach ($reportData['preventive']['alta'] as $novelty_preventive)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_preventive['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_preventive['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_preventive['subsystem']) && !empty($novelty_preventive['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_preventive['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_preventive['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_preventive['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach
                          
                        @endif

                        @if (count($reportData['preventive']['media'])!= 0)
                          <b class="letter"> PRIORIDAD MEDIA:</b>
                          @foreach ($reportData['preventive']['media'] as $novelty_preventive)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_preventive['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_preventive['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_preventive['subsystem']) && !empty($novelty_preventive['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_preventive['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_preventive['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_preventive['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach

                        @endif

                        @if (count($reportData['preventive']['baja'])!= 0)
                          <b class="letter">PRIORIDAD BAJA:</b>
                          @foreach ($reportData['preventive']['baja'] as $novelty_preventive)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_preventive['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_preventive['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_preventive['subsystem']) && !empty($novelty_preventive['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_preventive['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_preventive['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_preventive['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach
                        @endif
                      </ol>
                    </li>
                  @endif

                  @if (count($reportData['still_install']['alta'])!= 0|| count($reportData['still_install']['media']) != 0 || count($reportData['still_install']['baja']) != 0)

                    <li>
                      
                      {{-- <b class="letter">.&nbsp; RECOMENDACIONES POR REPUESTOS:</b> --}}
                      <h2 style="text-align:left;">RECOMENDACIONES POR REPUESTOS:</h2>

                      <ol class="sub-sublist" >

                        @if (count($reportData['still_install']['alta'])!= 0)
                          <b class="letter">PRIORIDAD ALTA:</b>
                          @foreach ($reportData['still_install']['alta'] as $novelty_still_install)
                            <li style="margin-top:15px; page-break-inside: avoid; ">
                              <label>{{$novelty_still_install['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_still_install['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_still_install['subsystem']) && !empty($novelty_still_install['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_still_install['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_still_install['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_still_install['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach

                        @endif

                        @if (count($reportData['still_install']['media'])!= 0)
                          <b class="letter">PRIORIDAD MEDIA:</b>
                          @foreach ($reportData['still_install']['media'] as $novelty_still_install)                        
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_still_install['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_still_install['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_still_install['subsystem']) && !empty($novelty_still_install['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_still_install['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_still_install['equipment']}}</label>
                                  </div>
                                  
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_still_install['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach

                        @endif

                        @if (count($reportData['still_install']['baja'])!= 0)
                          <b class="letter">PRIORIDAD BAJA:</b>
                          @foreach ($reportData['still_install']['baja'] as $novelty_still_install)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_still_install['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_still_install['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_still_install['subsystem']) && !empty($novelty_still_install['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_still_install['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_still_install['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_still_install['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>         
                          @endforeach
                          
                        @endif

                      </ol>

                    </li>
                    
                  @endif

                </ol>

              </li>
                
            @endif

          <!---- END RECOMENDATION ---->

        </ol>

      <!---- END IPM ---->
                              
  </body>

</html>


{{-- 
<!DOCTYPE html>
<html lang="es">

  <head>
    <title>{{$reportData['sucursal_name']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <meta charset="utf-8">
  
  <style>

    @page { margin: 1.5cm 0cm 2cm;}
        .tg  {border-collapse:collapse;border-spacing:8;}
        .tg td{font-family:Arial, sans-serif;font-size:10px;padding:2px 15px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#DF7401;}
        .tg th{font-family:Arial, sans-serif;font-size:10px;font-weight:normal;padding:2px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#DF7401;}
        .tg .tg-s6z2{text-align:center}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-lqy6{text-align:right;vertical-align:top}
        .tg .tg-hgcj{font-weight:bold;text-align:center}
        .tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:middle}
        .tg .tg-yw4l{vertical-align:top}
        .tg .tg-ssyz{font-weight:bold;background-color:#ffce93;color:#000000;text-align:center;vertical-align:top}
        .tg .tg-9hbo{font-weight:bold;vertical-align:top}
        .tg .tg-5qfb{font-weight:bold;background-color:#ffce93;text-align:center;vertical-align:top}
        table.area-cotizacion td, table.area-cotizacion th  {border-right: none;border-top:none; }

        table, td, th {
          border: 1px solid #DF7401;
          border-collapse: collapse;
          font-size: 10px; 
          width: 100%;            
        }

      .page-break {
        page-break-before: always;
      }

      .pagenum:before{
        content: counter(page);
      }

      :root {
        --total-pages: 0;
      }

      ol { padding:0; font-family: Arial, Helvetica, sans-serif; counter-reset: item; font-size: 14px; margin-top: -25px; }
        ol li{ display: block }
        ol li:before { content: counters(item, ".") " "; counter-increment: item }
      
      ul{
        padding: 0;
      }
      ul li {margin-left: 14px}
          
      header#mainHeader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 200px; 
          z-index: 1000;
      }

      .main-content-one-page{  
        margin-top: 60px;           
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;

      }

      .main-content {
        /* margin-top: 20px; */
        margin-bottom: 40px;
        box-sizing: border-box;
        font-family: 'Arial, Helvetica, sans-serif';
      }

      .main-sub-content{        
        font-family: 'Arial, Helvetica, sans-serif';        
        flex: 90; /* Hace que el contenido principal ocupe el espacio disponible */        
        display: flex;
        align-items: center;
        justify-content: center;
      }

      html {
        margin-left: 40px;
        margin-right: 40px;
      }

      .page::before {
        counter-increment: page-counter 1;
        content: "Página " counter(page-counter);
      }

      footer img {
        width: 100px;
        height: 100px;
      }

      .footer-content img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
      }
      .a1{
        color:black;
        top: 40px;
        margin-top:35px;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
        font-size: 15px;
      }

      .title{
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;
      }

      .letter{
        font-family: 'Arial, Helvetica, sans-serif';
        text-align: justify;
        /* margin-top: 50px; */
        /* padding-top: 50px; */
      }

      .letter-size {
        font-size: 17px;
      }

      .margin{
        margin-left: 10px;
        margin-right: 60px
      }

      .margin-conclution{
        
        margin-left: 40px;
        margin-right: 40px
      }

      .ul{
          background-image: url({$report_generate['information_maintenance']['bullet_point']['image']});
          background-repeat: no-repeat;
          background-position: left center;
          background-size: 15px;
          padding: 0;          
          list-style: none;
      }
      
      .logo-client {
        margin-top: 50px;
      }

      /* .img{
        width: 120px;
        height: 140px;
        border: 2px 
        solid #DF7401;
        margin-top:8px;
      } */

      .content{
        margin-top: 80px;
      }

      .footer-title{
          text-align: center;
          //display: inline-grid;
          width:100%;
          margin-top:40px        
      }
     
      #table{ 
        display: table; 
        margin-left: 20px;
        text-align: center;
        align-items: center;
        overflow-x:auto;
      }
      .tr{ 
          display: table-row; 
          margin-top: 22px;
          margin-bottom: 10px;
      }
      th {
          word-wrap: break-word;
      }
      .td { 
          display: table-cell;
          word-wrap: break-word;
      }
      h1 {
        display: inline;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
      }

      h2 {
        display: inline;
        font-size: 15px;
        font-weight: bold;
        text-transform: uppercase;
      }
      .custom-counter {
          counter-reset: main-counter;
          list-style: none;
          padding-left: 0;
          padding-top: 5px;
      }

      .custom-counter > li {
          counter-increment: main-counter;
          margin-bottom: 20px;
      }

      .custom-counter > li::before {
          content: counter(main-counter) ". ";
          font-weight: bold;
          text-transform: uppercase;
          font-size: 18px;
      }

      .sublist {
          counter-reset: sub-counter;
          list-style: none;
          padding-top: 30px;
      }

      .sublist > li {
          counter-increment: sub-counter;
          margin-bottom: 10px;
      }

      .sublist > li::before {
          content: counter(main-counter) "." counter(sub-counter) ". ";
          font-weight: bold;
          text-transform: uppercase;
          font-size: 15px;
      }

      .sub-sublist {
          counter-reset: sub-sub-counter;
          list-style: none;
          padding-top: 40px;
      }

      .sub-sublist > li {
          counter-increment: sub-sub-counter;
          margin-bottom: 20px;
      }

      .sub-sublist > li::before {
          content: counter(main-counter) "." counter(sub-counter) "." counter(sub-sub-counter) ". ";
          font-weight: bold;
          text-transform: uppercase;
          font-size: 15px;
      }

      .description {
          margin-top: 10px;
          font-size: 15px;
          page-break-inside: avoid;
      }

      .report-table {
          width: 100%;
          font-size: 15px;
          margin-top: 10px;
          padding: 0;
          table-layout: fixed;
      }
      .report-table th, .report-table td {
        word-wrap: break-word;
        min-width: 50px;
        overflow-wrap: break-word;
      }
      /* .images-container {
          margin-top: 30px;
          text-align: center;
      } */

      .present-to {
        margin-top: 50px;
      }

      .company-name {
        display: block;
        margin-top: 20px;
      }

      body {
        padding-top: 100px; /* Cambiado a 150px para ajustarse a la altura del encabezado */
        padding-bottom: 20px;
        box-sizing: border-box;
        counter-reset: page-counter 0;
      }
      footer {
        position: fixed;
        width: 100%;
        bottom: -50;
        z-index: 1000;
        background-color: white;
        text-align: right;
        padding: 10px;
      }

      .images-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center; 
          text-align: center;
          gap: 10px;
          margin: 0 auto;
          align-items: flex-start;
      }

      .img {
        width: 120px;
        height: 140px;
        border: 2px solid #DF7401;
        margin-top: 8px;
        margin-bottom: 8px;

      }

      .image-wrapper {
        display: inline-block; /* Asegura que los contenedores de imágenes estén uno al lado del otro */
        text-align: center;
        width: 130px;
        margin: 0 auto;
        vertical-align: top; /* Evita que la imagen se desplace */
        word-wrap: break-word;
        page-break-inside: avoid;
      }

      .image-wrapper b {
        word-wrap: break-word; /* Evita que el texto se salga de los límites */
        margin-top: 5px; /* Añade un pequeño espacio entre la imagen y el texto */
        flex-grow: 1; /* Permite que el texto crezca si es necesario */
      }
      

  </style>

  <body class="letter">

    
    {{-- <!-- HEADER -->
      <header id="mainHeader">

        <table class="tg" style="width: 100%; background: white;border-radius:35px;">

          <tr>
            <th class="tg-s6z2" rowspan="4" style="width:100px">
              @if(!empty($reportData['logo']))
                <img src="{{$reportData['logo']}}" width="80px">
              @endif
            </th>
            @if($reportData['information_extinguisher']['title']['status'])
              <th class="tg-hgcj" rowspan="4" style="border-radius:12px">
                <span style='font-size: 15px'>{{$reportData['information_extinguisher']['title']['description']}} {{$reportData['company_name']}} {{$reportData['sucursal_name']}}</span> 
              </th>
            @endif
            <th class="tg-amwm" style="width:50%"><span class="page"></span></th>
          </tr>

          @if($reportData['information_extinguisher']['format_version']['status'])
            <tr>
              <td class="tg-amwm" style="width:50%"><span>{{$reportData['information_extinguisher']['format_version']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <td lass="tg-amwm" width="50px"></td>
            </tr>
          @endif

          @if($reportData['information_extinguisher']['code_quality']['status'])
            <tr>              
              <td class="tg-amwm" style="width:50%"><span>{{$reportData['information_extinguisher']['code_quality']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <td lass="tg-amwm" width="50px"></td>
            </tr>
          @endif               

          @if($reportData['information_extinguisher']['format_date']['status'])
            <tr>
              <td class="tg-amwm" style="width:50%"><span>{{$reportData['information_extinguisher']['format_date']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <th class="tg-amwm" style="width:50%"></td>
            </tr>
          @endif

        </table>

      </header>

      <br>
      <br>
      <br>
      
    <!-- END HEADER -->

    <!-- HEADER -->
    <header id="mainHeader" style="position: fixed; top: 0; width: 100%; height: auto;">
      <table class="tg" style="width: 100%; background: white; border-radius: 35px;">
          <tr>
              <th class="tg-s6z2" rowspan="4" style="width:100px">
                  @if(!empty($reportData['logo']))
                      <img src="{{$reportData['logo']}}" width="80px">
                  @endif
              </th>
              @if($reportData['information_extinguisher']['title']['status'])
                  <th class="tg-hgcj" rowspan="4" style="border-radius:12px">
                      <span style='font-size: 15px'>
                          {{$reportData['information_extinguisher']['title']['description']}} 
                          {{$reportData['company_name']}} {{$reportData['sucursal_name']}}
                      </span> 
                  </th>
              @endif
              <th class="tg-amwm" style="width:50%">
                  <span class="page"></span>
              </th>
          </tr>

          @if($reportData['information_extinguisher']['format_version']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$reportData['information_extinguisher']['format_version']['description']}}</span>
                  </td>
              </tr>
          @else
              <tr>
                  <td class="tg-amwm" width="50px"></td>
              </tr>
          @endif

          @if($reportData['information_extinguisher']['code_quality']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$reportData['information_extinguisher']['code_quality']['description']}}</span>
                  </td>
              </tr>
          @else
              <tr>
                  <td class="tg-amwm" width="50px"></td>
              </tr>
          @endif

          @if($reportData['information_extinguisher']['format_date']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$reportData['information_extinguisher']['format_date']['description']}}</span>
                  </td>
              </tr>
          @else
              <tr>
                  <th class="tg-amwm" style="width:50%"></th>
              </tr>
          @endif
      </table>
    </header>
    <!-- END HEADER -->
    <!-- BODY -->
      <div class="main-content-one-page">

          <p>            
            <strong>
              {{$reportData['information_extinguisher']['title']['description']}}
              <br>
              <b style="text-transform: uppercase">{{$reportData['company_name']}}</b>
              <br>
              <b style="text-transform: uppercase">{{$reportData['sucursal_name']}}</b>
            </strong>

          </p>
              
              
          <p class="present-to"><strong>
              Presentado a:
              <br>
              <b class="company-name">{{$reportData['company_name']}}</b>
            </strong>
          </p>
          
          @if ($reportData['company_logo'] != '')
            <div class='logo-client'>
                <img src="https://s3.amazonaws.com/ipm-visits/{{$reportData['company_logo']}}" width="20%"  max-width="20%">
                <br>
            </div>
            @else
            <div class='logo-client' style="margin-top:50px;">
            </div>
          @endif


          <div class="content">
              <b>{{$reportData['partner']}}</b>
              <br>
              <b>{{$reportData['dateGenerate']}}</b>
              <br>
          </div>
           
          <div class="footer-title" >
            <table class="tg" style="width: 100%; background: white;border-radius:35px;margin-top:80px">            
              <tr>
                  <td width="100px" style="margin-top:8px"> <strong>ELABORO:</strong>
                    <div style="text-align:center;">
                      @if(count($reportData['users_who_activities'])>1)
                        @foreach ($reportData['users_who_activities'] as $userWho)
                          <div class="row" style="margin-top:2px">
                            <div class="row"><label for="" style="text-transform:uppercase;">{{ $userWho['name_user'] }}</label></div>
                            <div class="row"><label for="" style="text-transform:uppercase;">{{ $userWho['charge']}}</label></div>
                            <div class="row"><img src="{{ $userWho['signature'] }}" width="100px"></div>                          
                          </div>
                        @endforeach
                        <div class="row" style="margin-top:8px"><label>{{$reportData['users_who_activities_date']}}</label></div>                      
                        @else
                        <div style="text-align:center;margin-top:5px">
                          @foreach ($reportData['users_who_activities'] as $userWho)
                            
                            <div class="row">
                              <img src="{{ $userWho['signature'] }}" width="100px">
                            </div>
                            <div class="row">
                              <label for="" style="text-transform:uppercase;">{{ $userWho['name_user'] }}</label>
                            </div>
                            <div class="row">
                              <label for="" style="text-transform:uppercase;">{{ $userWho['charge']}}</label>
                            </div>                          
                          @endforeach
                          <div class="row" style="margin-top:8px;margin-bottom:8px">
                            <label>{{$reportData['users_who_activities_date']}}</label>
                          </div>
                        </div>
                      @endif
                    </div>
                  </td>

                  @if($reportData['information_extinguisher']['default_signatures']['revised']['status'])

                    <td width="100px"> <strong>REVISO:</strong>
                        <div style="text-align:center;margin-top:5px">
                          <div class="row">
                            <img src="{{$reportData['userRevised']['signature']}}" width="100px">
                          </div>
                          <div class="row">
                            <label for="" style="text-transform:uppercase;">{{$reportData['userRevised']['name_user']}}</label>
                          </div>
                          <div class="">
                            <label for="" style="text-transform:uppercase;">{{$reportData['userRevised']['charge']}}</label>
                          </div>
                          <div class="row" style="margin-top:8px;margin-bottom:8px">
                            <label>{{$reportData['dateRevised']}}</label>                            
                          </div>
                        </div>
                    </td>

                  @endif

                  @if($reportData['information_extinguisher']['default_signatures']['approved']['status'])

                    <td width="100px" style="margin-top:8px"> <strong>APROBO</strong>
                      <div style="text-align:center;margin-top:5px">
                        <div class="row">
                          @if(!empty($reportData['information_extinguisher']['default_signatures']['approved']['signature']))
                            <img src="{{$reportData['information_extinguisher']['default_signatures']['approved']['signature']}}" width="100px">
                          @endif
                        </div>
                        <div class="row">
                          <label for="" style="text-transform: uppercase;">{{$reportData['information_extinguisher']['default_signatures']['approved']['name']}}</label>
                        </div>
                        <div class="row">
                          <label for="" style="text-transform: uppercase;">{{$reportData['information_extinguisher']['default_signatures']['approved']['charge']}}</label>
                        </div>
                        <div class="row" style="margin-top:8px;margin-bottom:8px">
                          <label>{{$reportData['dateApproved']}}</label>
                        </div>
                      </div>
                    </td>

                  @endif
              </tr>
            </table>
          </div>
      </div>
    <!-- END BODY -->

    <!-- FOOTER -->

      @if (!empty($reportData['certification']))

        <footer>
          <div class="footer-content">        
            <img src="{{$reportData['certification']}}" alt="" width="100" height="100">
          </div>
        </footer>

      @endif

    <!--- END FOOTER ---->

    <!--- TABLE CONTENT --->

      <div class="main-content" style="page-break-before:always;">

        <p class="title">
          <strong >CONTENIDO</strong>
        </p>

        <ol style="margin-top:40px;text-align:justify;">
 
          @if($reportData['information_extinguisher']['glossary']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#glosary" style="margin-top:25px;">GLOSARIO</a>
            </div>
          @endif

          @if($reportData['information_extinguisher']['introduction']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#introduction">INTRODUCCIÓN</a>
            </div>
          @endif

          @if($reportData['information_extinguisher']['inspection_basis']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#basis_inspection">BASES DE INSPECCIÓN</a>
            </div>
          @endif
          
          @foreach ($reportData['subsystems'] as $key => $subsystem)
            <li class="li" style="margin-top:15px;"><a class="a1" href="#{{$subsystem['name']}}" style="text-transform:uppercase">. &nbsp;&nbsp;{{ $subsystem['name'] }}</a></li>            
          @endforeach

          @if (!empty($reportData['correctives']))
            <li class="li"><a class="a1" href="#correctives">.&nbsp;CORRECTIVOS REALIZADOS</a></li>    
          @endif

          @if ( !empty($reportData['corrective']['alta']) ||!empty($reportData['preventive']['alta']) ||!empty($reportData['still_install']['alta']) ||!empty($reportData['corrective']['media']) ||!empty($reportData['preventive']['media']) ||!empty($reportData['still_install']['media'])||!empty($reportData['corrective']['baja']) ||!empty($reportData['preventive']['baja']) ||!empty($reportData['still_install']['baja']))
            <li class="li"><a class="a1" href="#recomendations">.&nbsp;RECOMENDACIONES</a></li>
          @endif
                  
        </ol>

      </div>

    <!--- END TABLE CONTENT --->

    <!--- GLOSARIO ---->

      @if($reportData['information_extinguisher']['glossary']['status'])

        <div class="main-content" style="page-break-before:always;">
          
          <p class="title"><a id="glosary"><strong>GLOSARIO</a></strong></p>
          
          @if(!empty($reportData['information_maintenance']['glossary']['description']))
            <p style="text-align:justify; margin-top:35px;">
              {{$reportData['information_maintenance']['glossary']['description']}}
            </p>
          @endif

          <ul>
            @foreach ($reportData['information_extinguisher']['glossary']['data'] as $item)
              @if($reportData['information_extinguisher']['bullet_point']['status'])
                <li class="ul" style="margin-top:12px;text-align:justify;">
                  <b>1{{$item['word']}}</b> &nbsp;<label for="">{{$item['description']}}</label>
                </li>
              @else

                <li style="margin-top:5px;text-align:justify">
                  <b>{{$item['word']}}</b><label for="">{{$item['description']}}</label>
                </li>

              @endif

              <br>
                
            @endforeach        
          </ul>

        </div>
        
      @endif

    <!--- END GLOSARIO --->


    <!--- INTRODUCCION ---->
      @if($reportData['information_extinguisher']['introduction']['status'])
        <div class="main-content" style="page-break-before:always;">      
          <p class="title"><a id="introduction"><strong>INTRODUCCIÓN</strong></a></p>
          <br>
          <p style="text-align:justify;">
            {{$reportData['information_extinguisher']['introduction']['description']}}
          </p>
        </div>
      @endif

    <!--- END INTRODUCCION ---->

    <!---- BASES DE INSPECCION ----> 

      @if($reportData['information_extinguisher']['inspection_basis']['status'])
        <div class="main-content" style="page-break-before: always; margin: 0; padding-top: 10px; box-sizing: border-box; font-family: 'Arial, Helvetica, sans-serif'; min-height: 100vh; display: flex; flex-direction: column; justify-content: space-between;">
        
          <p class="title"><a id="basis_inspection"><strong>BASES DE INSPECCIÓN</strong></a></p>

          <div style="margin-top:25px;text-align:justify">
            <p class="p1" style="font-size: 17px">
              {{$reportData['information_extinguisher']['inspection_basis']['description']}}
            </p>
  
            <ul style="margin-top:15px;">
              @foreach ($reportData['information_extinguisher']['inspection_basis']['data'] as $item)
                <li style="margin-bottom:8px">{{$item['word']}} - {{$item['description']}}</li>
              @endforeach
            </ul>
  
            <p class="p1" style="font-size: 17px">
              Las actividades desarrolladas se registraron en el software de gestión de mantenimiento IPM-X(desarrollado por Only Fire Security)
            </p>
          </div>
        </div>
      @endif
    
    <!--- END BASES DE INSPECCION ---->


      <!---- IPM ---->

      <ol class="custom-counter">
        @foreach ($reportData['subsystems'] as $subsystem )
          <li style="page-break-inside: avoid;">
            <h1>
              <a id="{{ $subsystem['name'] }}" style="text-transform: uppercase"><b>{{ $subsystem['name'] }}</b></a>
            </h1>
      
            @if(!empty($subsystem['description']))
            <p class="description">{{ $subsystem['description'] }}</p>
            @endif
      
            @foreach ($subsystem['reports'] as $reportActivity)
              <div style="margin-top: 10px;">
                <div style="page-break-inside: avoid;">
                  <p style="font-size: 15px; text-transform: uppercase;"><b>TABLA {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }}</b></p>
                  @foreach ($reportActivity['reports_equipment'] as $activities)
                    <!-- Aplicar 'page-break-inside: avoid;' para evitar que la tabla se parta entre páginas -->
                    <table class="report-table" align="center" style="page-break-inside: avoid;">
                      <tr>
                        <th colspan="{{ count($activities['equipments']) + 2 }}">
                          <b style="text-transform: uppercase">ACTIVIDADES REALIZADAS {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }} {{ $subsystem['name'] }}</b>
                        </th>
                      </tr>
                      
                      <tr>
                        <th rowspan="2" style="width:40%"><b>Ítem</b></th>
                        <th rowspan="2"><b>Descripción de la actividad</b></th>
                        <th colspan="{{ count($activities['equipments']) }}"><b>EQUIPOS</b></th>
                      </tr>
      
                      <tr>
                        @foreach ($activities['equipments'] as $equipment)
                          <th style="width:auto">
                            <label for="" style="white-space:break-spaces;">{{ $equipment }}</label>
                          </th>
                        @endforeach
                      </tr>
      
                      @foreach ($activities['data'] as $key => $data)
                        <tr align="center" style="white-space:break-spaces;">
                          <td style="width:40%">{{ ++$key }}</td>    
                          <td>{{ $data['name'] }}</td>
                          @foreach ($data['datos'] as $dato)
                            @if ($dato == 'Conforme')
                              <td style="color: green">{{ $dato }}</td>
                            @elseif($dato == 'No Conforme')
                              <td style="color: red">{{ $dato }}</td>
                            @elseif (\DateTime::createFromFormat('Y-m-d', $dato) !== false || \DateTime::createFromFormat('Y-m-d H:i:s', $dato) !== false || \DateTime::createFromFormat('Y-m-d\TH:i:sP', $dato) !== false)                              
                              <?php
                                $dateFormats = [
                                  'Y-m-d', 
                                  'Y-m-d H:i:s', 
                                  'Y-m-d\TH:i:sP'
                                ];
                                foreach ($dateFormats as $format) {
                                  $date = \DateTime::createFromFormat($format, $dato);
                                  if ($date !== false) {
                                    break;
                                  }
                                }
                              ?>
                              <td>{{ $date->format('d/m/Y') }}</td>
                            @else
                              <td>{{ $dato }}</td>
                            @endif 
                          @endforeach
                        </tr>
                      @endforeach
                    </table>
                    <div style="margin-bottom: 30px;"></div> <!-- Esta línea añade el espacio -->
                  @endforeach
                </div>
                
                @foreach ($reportActivity['images'] as $images)
                  <div class="images-container">
                    {{-- @foreach ($images as $image)
                    @foreach ($images as $index => $image)
                    <div class="image-wrapper">
                        <img src="{{ $image['evidence'] }}" class="img">
                        <br>
                        <b style="font-size: 8px; display: block;"> {{ $index + 1 }}. Equipo: {{ $image['code'] }}</b>
                        <b style="font-size: 7px; display: block;">{{ $image['name'] }}</b>
                      </div>
                    @endforeach
                  </div>   
                @endforeach 
              </div> 
            @endforeach 
          </li>   
        @endforeach
      </ol>


          <!---- CORRECTIVES ---->

            @if (!empty($reportData['correctives']))

                      
              <li style="text-align:center; page-break-before:always; margin-top: 25px">

                <h1 class="letter"><a id="correctives">CORRECTIVOS REALIZADOS</a></h2>                          

                <p class="letter" style="font-size:15px;">
                  En esta dependencia se encuentran las descripciones de las actividades que fueron corregidas junto con la fecha de ejecución. 
                </p>

                <ol class="sublist" style="margin-top:10px; text-align:left;">
                  
                    @foreach ($reportData['correctives'] as $corrective)

                      <li style="list-style-type: circle;page-break-inside: avoid;"> 
                        <h2 style="list-style-type: disc;">Novedad:</h2> 
                        <label>{{ $corrective['novelty'] }}</label>
                        <br>
                        <br>
                        <b style="margin-top:20px">Fecha de Corrección:</b> {{ $corrective['date_executed'] }} 
                        <br>
                        <br>
                        <b style="margin-top:20px">Actividad Corregida:</b> {{ $corrective['description'] }}
                        <br>
                        <br>
                        @if (!empty($corrective['subsystem']) && !empty($corrective['equipment']))
                          <b>Subsistema:</b> <label>{{$corrective['subsystem']}}</label>
                          <br><br>
                          <b>Equipo:</b> <label>{{$corrective['equipment']}}</label>
                          <br><br>
                        @endif
                        <b>Imagenes:</b>
                        <br>
                        <br>

                        <div  class="card-body" style="margin-top:15px;">

                          <div class="row row-cols-2 row-cols-md-3" align="center">
                            
                              <div class="card h-20">
                                @foreach ($corrective['images'] as $image )
                                <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                @endforeach
                              </div>
                            
                          </div>
                        </div>
                      </li>
                      <br>                    
                    @endforeach
                  
                </ol>

              </li>

            @endif
          
          <!---- RECOMENDATION ---->


            @if ( !empty($reportData['corrective']['alta']) ||!empty($reportData['preventive']['alta']) ||!empty($reportData['still_install']['alta']) ||!empty($reportData['corrective']['media']) ||!empty($reportData['preventive']['media']) ||!empty($reportData['still_install']['media'])||!empty($reportData['corrective']['baja']) ||!empty($reportData['preventive']['baja']) ||!empty($reportData['still_install']['baja']))

              <li style="text-align:center; page-break-before:always;">

                {{-- <b class="letter" style="text-align:center;">.&nbsp;<a id="recomendations">RECOMENDACIONES</a></b> 
                <h1 class="letter"><a id="recomendations">RECOMENDACIONES</a></h1>

                <p class="letter description" style="text-align:justify;">
                  En esta dependencia se encuentran pendientes que son requeridos para poner operativo los equipos: 
                </p>

                <ol class="sublist" style="text-align:justify; ">

                  @if (count($reportData['corrective']['alta'])!= 0|| count($reportData['corrective']['media']) != 0 || count($reportData['corrective']['baja']) != 0)

                    <li>
                      
                      {{-- <b class="letter">.&nbsp; RECOMENDACIONES POR FALLAS:</b> 
                      <h2 style="text-align:left;">RECOMENDACIONES POR FALLAS:</h2>

                      <ol class="sub-sublist" >

                        @if (count($reportData['corrective']['alta'])!= 0)
                          <b style="text-align:left; margin-top:20px">PRIORIDAD ALTA:</b>
                          @foreach ($reportData['corrective']['alta'] as $novelty_corrective)                      
                            <li style="margin-top:15px; page-break-inside: avoid;">
                              <label>{{$novelty_corrective['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_corrective['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_corrective['subsystem']) && !empty($novelty_corrective['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_corrective['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_corrective['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_corrective['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach                          

                        @endif

                        @if (count($reportData['corrective']['media'])!= 0)

                          <b class="letter">PRIORIDAD MEDIA:</b>
                          @foreach ($reportData['corrective']['media'] as $novelty_corrective)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_corrective['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_corrective['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_corrective['subsystem']) && !empty($novelty_corrective['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_corrective['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_corrective['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_corrective['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach                        

                        @endif

                        @if (count($reportData['corrective']['baja'])!= 0)

                          <b class="letter">PRIORIDAD BAJA:</b>
                          @foreach ($reportData['corrective']['baja'] as $novelty_corrective)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_corrective['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_corrective['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_corrective['subsystem']) && !empty($novelty_corrective['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_corrective['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_corrective['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_corrective['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach
                        @endif
                      </ol>
                    </li>
                  @endif


                  @if (count($reportData['preventive']['alta'])!= 0|| count($reportData['preventive']['media']) != 0 || count($reportData['preventive']['baja']) != 0)

                    <li>
                      
                      {{-- <b class="letter">.&nbsp; RECOMENDACIONES POR CONSUMIBLES:</b> 
                      <h2 style="text-align:left;">RECOMENDACIONES POR CONSUMIBLES:</h2>

                      <ol class="sub-sublist" >

                        @if (count($reportData['preventive']['alta'])!= 0)

                          <b class="letter">PRIORIDAD ALTA:</b>
                          @foreach ($reportData['preventive']['alta'] as $novelty_preventive)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_preventive['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_preventive['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_preventive['subsystem']) && !empty($novelty_preventive['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_preventive['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_preventive['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_preventive['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach
                          
                        @endif

                        @if (count($reportData['preventive']['media'])!= 0)
                          <b class="letter"> PRIORIDAD MEDIA:</b>
                          @foreach ($reportData['preventive']['media'] as $novelty_preventive)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_preventive['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_preventive['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_preventive['subsystem']) && !empty($novelty_preventive['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_preventive['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_preventive['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_preventive['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach

                        @endif

                        @if (count($reportData['preventive']['baja'])!= 0)
                          <b class="letter">PRIORIDAD BAJA:</b>
                          @foreach ($reportData['preventive']['baja'] as $novelty_preventive)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_preventive['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_preventive['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_preventive['subsystem']) && !empty($novelty_preventive['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_preventive['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_preventive['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_preventive['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach
                        @endif
                      </ol>
                    </li>
                  @endif

                  @if (count($reportData['still_install']['alta'])!= 0|| count($reportData['still_install']['media']) != 0 || count($reportData['still_install']['baja']) != 0)

                    <li>
                      
                      {{-- <b class="letter">.&nbsp; RECOMENDACIONES POR REPUESTOS:</b>
                      <h2 style="text-align:left;">RECOMENDACIONES POR REPUESTOS:</h2>

                      <ol class="sub-sublist" >

                        @if (count($reportData['still_install']['alta'])!= 0)
                          <b class="letter">PRIORIDAD ALTA:</b>
                          @foreach ($reportData['still_install']['alta'] as $novelty_still_install)
                            <li style="margin-top:15px; page-break-inside: avoid; ">
                              <label>{{$novelty_still_install['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_still_install['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_still_install['subsystem']) && !empty($novelty_still_install['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_still_install['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_still_install['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_still_install['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach

                        @endif

                        @if (count($reportData['still_install']['media'])!= 0)
                          <b class="letter">PRIORIDAD MEDIA:</b>
                          @foreach ($reportData['still_install']['media'] as $novelty_still_install)                        
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_still_install['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_still_install['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_still_install['subsystem']) && !empty($novelty_still_install['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_still_install['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_still_install['equipment']}}</label>
                                  </div>
                                  
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_still_install['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>
                          @endforeach

                        @endif

                        @if (count($reportData['still_install']['baja'])!= 0)
                          <b class="letter">PRIORIDAD BAJA:</b>
                          @foreach ($reportData['still_install']['baja'] as $novelty_still_install)
                            <li style="margin-top:15px; page-break-inside: avoid">
                              <label>{{$novelty_still_install['description']}}</label>
                              <div style="font-size:12px">
                                <b>Registrada el dia:</b> &nbsp; <label for="">{{$novelty_still_install['date_register']}}</label>
                              </div>
                              @if (!empty($novelty_still_install['subsystem']) && !empty($novelty_still_install['equipment']))
                                  <div style="font-size:12px;">
                                      <b>Subsistema:</b> <label>{{$novelty_still_install['subsystem']}}</label>
                                  </div>
                                  <div style="font-size:12px;">
                                      <b>Equipo:</b> <label>{{$novelty_still_install['equipment']}}</label>
                                  </div>
                                  <br><br>
                                    <b>Imagenes:</b>
                                    <br>
                                    <br>
                
                                    <div  class="card-body" style="margin-top:15px;">
                                      <div class="row row-cols-2 row-cols-md-3" align="center">
                                        
                                          <div class="card h-20">
                                            @foreach ($novelty_still_install['images'] as $image )
                                            <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                            @endforeach
                                          </div>
                                        
                                      </div>
                                    </div>
                              @endif
                            </li>         
                          @endforeach
                          
                        @endif

                      </ol>

                    </li>
                    
                  @endif

                </ol>

              </li>
                
            @endif

          <!---- END RECOMENDATION ---->

        </ol>

      <!---- END IPM ---->
                              
  </body>

</html>


 --}}
