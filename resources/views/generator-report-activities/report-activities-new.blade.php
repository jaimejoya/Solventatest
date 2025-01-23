<!DOCTYPE html>
<html lang="es">

  <head>
    <title>{{$report_generate['sucursal_name']}}</title>
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
          page-break-inside: avoid;
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
        /* margin-top: 30px; */
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

      /* footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 30px;       
        text-align: right;        
        box-sizing: border-box;     
      } */

      footer img {
        width: 100px;
        height: 100px;
        /* Puedes agregar estilos adicionales para la imagen según tus necesidades */
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
          margin-top:50px        
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
      .td{ 
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
          page-break-inside: auto;
      }
      .report-table th, .report-table td {
        word-wrap: break-word;
        min-width: 50px;
        overflow-wrap: break-word;
        page-break-inside: auto;
      }
      /* .report-table th {
        white-space: nowrap;  
        overflow: hidden;    
        text-align: center;
      } */

      /* .report-table td {
        overflow: hidden;          
        text-overflow: ellipsis;  
        word-wrap: break-word;    
      } */
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
        padding-top: 100px;
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

  @php
  $counter = 1;
  @endphp

  <body class="letter">

    
    <!-- HEADER -->
      {{-- <header id="mainHeader" style="position: fixed; top: 0; width: 100%; height: auto;">
        <table class="tg" style="width: 100%; background: white;border-radius:35px;">
          <tr>
            <th class="tg-s6z2" rowspan="4" style="width:100px">
              <img src="{{$report_generate['logo']}}" width="80px">
            </th>
            @if($report_generate['information_maintenance']['title']['status'])
              <th class="tg-hgcj" rowspan="4" style="border-radius:12px">
                <span style='font-size: 15px'>{{$report_generate['information_maintenance']['title']['description']}} {{$report_generate['company_name']}} {{$report_generate['sucursal_name']}}</span> 
              </th>
            @endif
            <th class="tg-amwm" style="width:50%"><span class="page"></span></th>
          </tr>
          @if($report_generate['information_maintenance']['format_version']['status'])
            <tr>
              <th class="tg-amwm" style="width:50%"><span>{{$report_generate['information_maintenance']['format_version']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <td lass="tg-amwm" width="50px"></td>
            </tr>
          @endif
          @if($report_generate['information_maintenance']['code_quality']['status'])
            <tr>              
              <th class="tg-amwm" style="width:50%"><span>{{$report_generate['information_maintenance']['code_quality']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <td lass="tg-amwm" width="50px"></td>
            </tr>
          @endif            
          @if($report_generate['information_maintenance']['format_date']['status'])
            <tr>
              <th class="tg-amwm" style="width:50%"><span>{{$report_generate['information_maintenance']['format_date']['description']}}</span></td>
            </tr>
          @else
            <tr>
              <th class="tg-amwm" style="width:50%"></td>
            </tr>
          @endif
        </table>
      </header>    
    <!-- END HEADER -->

    <br>
    <br>
    <br>
     --}}
    <!-- HEADER -->
    <header id="mainHeader" style="position: fixed; top: 0; width: 100%; height: auto;">
      <table class="tg" style="width: 100%; background: white; border-radius: 35px;">
          <tr>
              <th class="tg-s6z2" rowspan="4" style="width:100px">
                  @if(!empty($report_generate['logo']))
                      <img src="{{$report_generate['logo']}}" width="80px">
                  @endif
              </th>
              @if($report_generate['information_maintenance']['title']['status'])
                  <th class="tg-hgcj" rowspan="4" style="border-radius:12px">
                      <span style='font-size: 15px'>
                          {{$report_generate['information_maintenance']['title']['description']}} 
                          {{$report_generate['company_name']}} {{$report_generate['sucursal_name']}}
                      </span> 
                  </th>
              @endif
              <th class="tg-amwm" style="width:50%">
                  <span class="page"></span>
              </th>
          </tr>

          @if($report_generate['information_maintenance']['format_version']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$report_generate['information_maintenance']['format_version']['description']}}</span>
                  </td>
              </tr>
          @else
              <tr>
                  <td class="tg-amwm" width="50px"></td>
              </tr>
          @endif

          @if($report_generate['information_maintenance']['code_quality']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$report_generate['information_maintenance']['code_quality']['description']}}</span>
                  </td>
              </tr>
          @else
              <tr>
                  <td class="tg-amwm" width="50px"></td>
              </tr>
          @endif

          @if($report_generate['information_maintenance']['format_date']['status'])
              <tr>
                  <td class="tg-amwm" style="width:50%">
                      <span>{{$report_generate['information_maintenance']['format_date']['description']}}</span>
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

     <!-- FOOTER -->

      @if (!empty($report_generate['certification']))
                
        <footer>
          <div class="footer-content">        
            <img src="{{ $report_generate['certification'] }}" alt="" width="100" height="100">
          </div>
        </footer>        
      
      @endif

    <!--- END FOOTER ---->

    <!-- BODY -->
      <div class="main-content-one-page">

        <p><strong>{{$report_generate['information_maintenance']['title']['description']}}
            <br>
            <b style="text-transform: uppercase">{{$report_generate['company_name']}}</b>
            <br>
            <b style="text-transform: uppercase">{{$report_generate['sucursal_name']}}</b></strong>
        </p>
            
            
        <p class="present-to"><strong>
            Presentado a:
            <br>
            <b class="company-name">{{$report_generate['company_name']}}</b>
          </strong>
        </p>
        
        @if ($report_generate['company_logo'] != '')
          <div class='logo-client'>
              <img src="https://ipm-visits.s3.amazonaws.com/{{$report_generate['company_logo']}}" width="20%"  max-width="20%">
              <br>
          </div>
          @else
          <div class='logo-client' style="margin-top:60px;">
          </div>
        @endif


        <div class="content">
            <b>{{ $report_generate['partner'] }}</b>
            <br>
            <b>{{$report_generate['month_generate']}}</b>
        </div>
        
        
        <div  class="footer-title">
          <table class="tg" style="width: 100%; background: white;border-radius:35px;margin-top:100px">            
            <tr>
              <td width="100px" style="margin-top:8px"> <strong>ELABORO:</strong>
                <div style="text-align:center;">
                  @if(count($report_generate['users_who_activities'])>1)
                    @foreach ($report_generate['users_who_activities'] as $userWho)
                      <div class="row" style="margin-top:2px">
                        <div class="row"><label for="" style="text-transform:uppercase;">{{ $userWho['name_user'] }}</label></div>
                        <div class="row"><label for="" style="text-transform:uppercase;">{{ $userWho['charge']}}</label></div>
                        <div class="row"><img src="{{ $userWho['signature'] }}" width="100px"></div>                          
                      </div>
                    @endforeach
                    <div class="row" style="margin-top:8px"><label>{{$report_generate['users_who_activities_date']}}</label></div>                      
                    @else
                    <div style="text-align:center;margin-top:5px">
                      @foreach ($report_generate['users_who_activities'] as $userWho)
                        
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
                        <label>{{$report_generate['users_who_activities_date']}}</label>
                      </div>
                    </div>
                  @endif
                </div>
                
              </td>

              @if($report_generate['information_maintenance']['default_signatures']['revised']['status'])
                <td width="100px" style="margin-top:8px"> <strong>REVISO:</strong>
                    <div style="text-align:center;margin-top:5px">
                      <div class="row">
                        <img src="{{$report_generate['userRevised']['signature']}}" width="100px">
                      </div>
                      <div class="row">
                        <label for="" style="text-transform:uppercase;">{{$report_generate['userRevised']['name_user']}}</label>
                      </div>
                      <div class="">
                        <label for="" style="text-transform:uppercase;">{{$report_generate['userRevised']['charge']}}</label>
                      </div>
                      <div class="row" style="margin-top:8px;margin-bottom:8px">
                        <label>{{$report_generate['dateRevised']}}</label>                            
                      </div>
                    </div>
                </td>
              @endif
              
              @if($report_generate['information_maintenance']['default_signatures']['approved']['status'])
                <td width="100px" style="margin-top:8px"> <strong>APROBADO:</strong>
                  <div style="text-align:center;margin-top:5px">                   
                    <div class="row">
                      <img src="{{ $report_generate['information_maintenance']['default_signatures']['approved']['signature'] }}" width="100px">
                    </div>                      
                    <div class="row">
                      <label for="" style="text-transform: uppercase;">{{ $report_generate['information_maintenance']['default_signatures']['approved']['name'] }}</label>
                    </div>
                    <div class="row">
                      <label for="" style="text-transform: uppercase;">{{ $report_generate['information_maintenance']['default_signatures']['approved']['charge'] }}</label>
                    </div>
                    <div class="row" style="margin-top:8px;margin-bottom:8px">
                      @if($report_generate['information_maintenance']['default_signatures']['approved']['status'] == true)
                        <label>{{$report_generate['dateApproved']}}</label>
                      @endif
                    </div>
                  </div>
                </td>
              @endif

            </tr>

          </table>
        </div>

      </div>
    <!-- END BODY -->

                          
    <!--- TABLE CONTENT --->

      <div class="main-content" style="page-break-before:always;">
        
        <p class="title">
          <strong >CONTENIDO</strong>
        </p>
                                  
        <ol style="margin-top:30px;text-align:justify;">          

          @if($report_generate['information_maintenance']['glossary']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#glosario">{{$report_generate['information_maintenance']['glossary']['title']}}</a>
            </div>            
          @endif

          @if($report_generate['information_maintenance']['introduction']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#introduccion">{{$report_generate['information_maintenance']['introduction']['title']}}</a>
            </div>
          @endif

          @if($report_generate['information_maintenance']['inspection_basis']['status'])
            <div style="margin-bottom:8px">
              <a class="a1" href="#bases">{{$report_generate['information_maintenance']['inspection_basis']['title']}}</a>
            </div>
          @endif

          @foreach ($report_generate['systems'] as $key => $system)
            <li class="li" style="margin-top:15px;"><a class="a1" href="#{{$system['name']}}" style="text-transform:uppercase">. &nbsp;&nbsp;&nbsp; {{ $system['name'] }}</a>
              <ol style="margin-top:10px;margin-bottom:8px;">
              @foreach ($system['subsystems'] as $key => $subsystem)
                <li style="text-transform: uppercase;"><a  class="a1" href="#{{$subsystem['name']}}">. &nbsp;{{$subsystem['name']}}</a></li>  
              @endforeach
              </ol>
            </li>
          @endforeach
          
          @if(!empty($report_generate['information_maintenance']['correctives']['status'] === true) )
            
                @if (!empty($report_generate['correctives']))
                  <li class="li"><a class="a1" href="#correctives">.&nbsp;{{$report_generate['information_maintenance']['correctives']['title']}}</a></li>    
                @endif
            
          @endif
          @if(!empty($report_generate['information_maintenance']['recomendations']['status']===true )) 
            
                @if ( !empty($report_generate['corrective']['alta']) ||!empty($report_generate['preventive']['alta']) ||!empty($report_generate['still_install']['alta']) ||!empty($report_generate['corrective']['media']) ||!empty($report_generate['preventive']['media']) ||!empty($report_generate['still_install']['media'])||!empty($report_generate['corrective']['baja']) ||!empty($report_generate['preventive']['baja']) ||!empty($report_generate['still_install']['baja']))
                  <li class="li"><a class="a1" href="#recomendations">.&nbsp;{{$report_generate['information_maintenance']['recomendations']['title']}}</a></li>
                @endif
             
          @endif

          @if (!empty($report_generate['information_maintenance']['conclution']['status']))
            <li class="li"><a class="a1" href="#conclution">.&nbsp;{{$report_generate['information_maintenance']['conclution']['title']}}</a></li>                    
          @endif
          
          
        </ol>        

      </div>
      
    <!--- END TABLE CONTENT --->

    <!--- GLOSARIO ---->

      @if($report_generate['information_maintenance']['glossary']['status'])

        <div class="main-content" style="page-break-before:always;">
                      
          <p class="title"><a id="glosario"><strong>{{$report_generate['information_maintenance']['glossary']['title']}}</strong></a></p>
          @if(!empty($report_generate['information_maintenance']['glossary']['description']))
            <p style="text-align:justify; margin-top:35px;">
              {{$report_generate['information_maintenance']['glossary']['description']}}
            </p>
          @endif

          <ul>
            @foreach ($report_generate['information_maintenance']['glossary']['data'] as $item)
              @if($report_generate['information_maintenance']['bullet_point']['status'])
                
                <li class="ul" style="margin-top:12px;text-align:justify">
                  <b>{{$item['word']}}</b> &nbsp;<label for="">{{$item['description']}}</label>
                </li>                  

                @else
                
                <li style="margin-top:5px;text-align:justify">
                  <b>{{$item['word']}}</b> &nbsp;<label for="">{{$item['description']}}</label>
                </li>                  

              @endif
                                
            @endforeach        
          </ul>            

        </div>
        
      @endif

    <!--- END GLOSARIO --->

    <!--- INTRODUCCION ---->

      @if($report_generate['information_maintenance']['introduction']['status'] == true)

        <div class="main-content" style="page-break-before:always;">
              
          <p class="title"><a id="introduccion"><strong>{{$report_generate['information_maintenance']['introduction']['title']}}</strong></a></p>
          
          <br>

          <p style="text-align:justify;">

            {{$report_generate['information_maintenance']['introduction']['description']}} &nbsp; {{$report_generate['partner']}}.

            {{-- @foreach ($report_generate['systems'] as $systems)

            Inspección, Prueba y Mantenimiento al sistema de <label for="" style="text-transform: uppercase">{{ $systems['name'] }}</label> , 
                  
            @endforeach 
                
            Estos trabajos se desarrollaron bajo la coordinación y logística del departamento de mantenimiento de <b class="letter">{{$report_generate['company_name']}}</b>. Las	actividades	de	inspección,	prueba	y mantenimiento fueron desarrollas por el área de ingeniería de  --}}
            
          </p>
          
        </div>

      @endif

    <!--- END INTRODUCCION ---->

    <!---- BASES DE INSPECCION ----> 

      @if($report_generate['information_maintenance']['inspection_basis']['status'])
        <div class="main-content" style="page-break-before: always; margin: 0; padding-top: 10px; box-sizing: border-box; font-family: 'Arial, Helvetica, sans-serif'; min-height: 100vh; display: flex; flex-direction: column; justify-content: space-between;">
        
          <p class="title"><a id="bases"><strong>{{$report_generate['information_maintenance']['inspection_basis']['title']}}</strong></a></p>          

          <div style="margin-top:25px;text-align:justify">
            <p class="p1" style="font-size: 17px;">
              {{$report_generate['information_maintenance']['inspection_basis']['description']}}
            </p>

            <ul style="margin-top:15px;">              
              @foreach ($report_generate['information_maintenance']['inspection_basis']['data'] as $item)
                <li style="margin-bottom:8px">
                  @if($item['word'] != '')
                    <p style="text-align:justify;">{{$item['word']}} -
                  @endif
                  {{$item['description']}}</p>
                </li>
              @endforeach        
            </ul>

            <p class="p1" style="font-size: 17px;">
              Las actividades desarrolladas se registraron en el software de gestión de mantenimiento IPM-X (desarrollado por Only Fire Security).
            </p>
          </div>
        </div>
      @endif
    
    <!--- END BASES DE INSPECCION ---->
      
    <!---- IPM ---->        
    <ol class="custom-counter">
      @foreach ($report_generate['systems'] as $system)
      <li>
        <h1><a id="{{ $system['name'] }}" style="text-transform: uppercase; page-break-inside: avoid;">{{ $system['name'] }}</a></h1>
        @if(!empty($system['description']))
          <p class="description">{{ $system['description'] }}</p>
        @endif
        <ol class="sublist">
          @foreach ($system['subsystems'] as $subsystem)
          <li>
            <h2><a id="{{ $subsystem['name'] }}" style="text-transform: uppercase"><b>{{ $subsystem['name'] }}</b></a></h2>
            @if(!empty($subsystem['description']))
            <p class="description">{{ $subsystem['description'] }}</p>
            @endif
            @foreach ($subsystem['reports'] as $reportActivity)
                {{-- @php
                  // Inicializa el contador de <td>
                  $totalTdCount = 0;

                  // Recorre las actividades y cuenta los <td> basados en los datos de $data['name']
                  foreach ($reportActivity['reports_equipment'] as $activities) {
                      foreach ($activities['data'] as $data) {
                          // Sumar 1 por cada $data['name'] que generará un <td>
                          $totalTdCount += 1; // Cada nombre cuenta como un <td>
                      }
                  }
                @endphp --}}


                <div style="margin-top: 10px;">
                    {{-- <div {{ $totalTdCount <= 5 ? 'style=page-break-inside:avoid;' : '' }}> --}}
                    <div>
                      {{-- <p>Total Td Count: {{ $totalTdCount }}</p> --}}

                        <p style="font-size: 15px; text-transform: uppercase;" align="left"><b>TABLA {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }}</b></p>
                        @foreach ($reportActivity['reports_equipment'] as $activities)
                          @if(isset($activities['data']) && is_array($activities['data']))
                              @php
                                  $maxDatosCount = 1;
                                  $totalTdCount = 0; // Inicializa el contador de <td>

                                  // Calcula el máximo número de datos y cuenta los <td> para cada $data['name']
                                  foreach ($activities['data'] as $activity) {
                                      if (isset($activity['datos']) && count($activity['datos']) > $maxDatosCount) {
                                          $maxDatosCount = count($activity['datos']);
                                      }

                                      // Sumar 1 por cada $data['name'] que generará un <td>
                                      $totalTdCount += 1;
                                  }
                              @endphp

                              <!-- Colocar el div justo antes de la tabla -->
                              <div {{ $totalTdCount <= 5 ? 'style=page-break-inside:avoid;' : '' }}>
                                  {{-- <p>Total Td Count: {{ $totalTdCount }}</p> --}}
                                  <!-- Inicio de la tabla -->
                                  <table class="report-table" align="center">
                                      <tr>
                                          @if($maxDatosCount > count($activities['equipments']))
                                              <th colspan="{{$maxDatosCount + 2}}"><b style="text-transform: uppercase">ACTIVIDADES REALIZADAS {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }} {{ $subsystem['name'] }}</b></th>
                                          @else
                                              <th colspan="{{count($activities['equipments']) + 2}}"><b style="text-transform: uppercase">ACTIVIDADES REALIZADAS {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }} {{ $subsystem['name'] }}</b></th>
                                          @endif
                                      </tr>
                                      <tr>
                                          <th rowspan="2" style="width: 40%; text-align: center;"><b>Ítem</b></th>
                                          <th rowspan="2"><b>Descripción de la actividad</b></th>
                                          @if($maxDatosCount > count($activities['equipments']))
                                              <th colspan="{{$maxDatosCount}}"><b>EQUIPOS</b></th>
                                          @else
                                              <th colspan="{{count($activities['equipments'])}}"><b>EQUIPOS</b></th>
                                          @endif
                                      </tr>
                                      <tr>
                                          @if($maxDatosCount > count($activities['equipments']))
                                              @foreach ($activities['equipments'] as $equipment)
                                                  @for ($i = 0; $i < $maxDatosCount; $i++)
                                                      <th style="width:auto"><label for="" style="white-space: break-spaces;">{{ $equipment }}</label></th>
                                                  @endfor
                                              @endforeach
                                          @else
                                              @foreach ($activities['equipments'] as $equipment)
                                                  <th style="width:auto"><label for="" style="white-space: break-spaces;">{{ $equipment }}</label></th>
                                              @endforeach
                                          @endif
                                      </tr>
                                      @foreach ($activities['data'] as $key => $data)
                                          <tr align="center" style="white-space: break-spaces;">
                                              <td style="width: 15%">{{ $loop->iteration }}</td>
                                              <td>{{ $data['name'] }}</td>
                                              @foreach ($data['datos'] as $dato)
                                                  @php
                                                      $output = '';
                                                      $color = '';
                                                      switch (true) {
                                                          case $dato === null || $dato === '' || $dato === 0:
                                                              $output = '0';
                                                              break;
                                                          case $dato == 'Conforme':
                                                              $output = $dato;
                                                              $color = 'green';
                                                              break;
                                                          case $dato == 'No Conforme':
                                                              $output = $dato;
                                                              $color = 'red';
                                                              break;
                                                          default:
                                                              $output = $dato;
                                                              break;
                                                      }
                                                  @endphp
                                                  <td style="color: {{ $color }}">{{ $output }}</td>
                                              @endforeach
                                          </tr>
                                      @endforeach
                                  </table>
                                  <div style="margin-bottom: 30px;"></div>
                              </div>
                          @endif
                        @endforeach

                    </div>
                    @foreach ($reportActivity['images'] as $images)
                      <div class="images-container">
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

            {{-- @foreach ($subsystem['reports'] as $reportActivity)
            <div style="margin-top: 10px;">
              <div style="page-break-inside: avoid;">
                <p style="font-size: 15px; text-transform: uppercase;" align="left"><b>TABLA {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }}</b></p>                
                @foreach ($reportActivity['reports_equipment'] as $activities)
                @if(isset($activities['data']) && is_array($activities['data']))
                    @php
                      $maxDatosCount = 1;
                      foreach ($activities['data'] as $activity) {
                        if (isset($activity['datos']) && count($activity['datos']) > $maxDatosCount) {
                          $maxDatosCount = count($activity['datos']);
                        }
                      }
                    @endphp
                  @endif  
                <table class="report-table" align="center" >
                  <tr>
                    @if($maxDatosCount > count($activities['equipments']))
                    <th colspan="{{$maxDatosCount + 2}}"><b style="text-transform: uppercase">ACTIVIDADES REALIZADAS {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }} {{ $subsystem['name'] }}</b></th>
                    @else
                    <th colspan="{{count($activities['equipments']) + 2}}"><b style="text-transform: uppercase">ACTIVIDADES REALIZADAS {{ $reportActivity['type'] }} {{ $reportActivity['frequency'] }} {{ $subsystem['name'] }}</b></th> 
                    @endif
                  </tr>
                  <tr>
                    <th rowspan="2" style="width: 40%; text-align: center;"><b>Ítem</b></th>
                    <th rowspan="2"><b>Descripción de la actividad</b></th>
                    @if($maxDatosCount > count($activities['equipments']))
                    <th colspan="{{$maxDatosCount}}"><b>EQUIPOS</b></th>
                    @else
                    <th colspan="{{count($activities['equipments'])}}"><b>EQUIPOS</b></th>
                    @endif                   
                  </tr>
                  <tr>
                      @if($maxDatosCount > count($activities['equipments']))
                        @foreach ($activities['equipments'] as $equipment)
                          @for ($i = 0; $i < $maxDatosCount; $i++)
                            <th style="width:auto"><label for="" style="white-space: break-spaces;">{{ $equipment }}</label></th>
                          @endfor
                        @endforeach
                      @else
                        @foreach ($activities['equipments'] as $equipment)
                          <th style="width:auto"><label for="" style="white-space: break-spaces;">{{ $equipment }}</label></th>
                        @endforeach
                      @endif
                  </tr>
                  @foreach ($activities['data'] as $key => $data)
                  <tr align="center" style="white-space: break-spaces;">
                    <td style="width: 15%">{{ $loop->iteration }}</td>
                    <td>{{ $data['name'] }}</td>
                    @foreach ($data['datos'] as $dato)
                    @php
                    $output = '';
                    $color = '';
                    switch (true) {
                      case $dato === null || $dato === '' || $dato === 0:
                        $output = '0';
                        break;
                      case $dato == 'Conforme':
                        $output = $dato;
                        $color = 'green';
                        break;
                      case $dato == 'No Conforme':
                        $output = $dato;
                        $color = 'red';
                        break;
                      default:
                        $output = $dato;
                        break;
                    }
                    @endphp
                    <td style="color: {{ $color }}">{{ $output }}</td>
                    @endforeach
                  </tr>
                  @endforeach
                </table>
                <div style="margin-bottom: 30px;"></div>
                </div>
                @endforeach
              </div>
              @foreach ($reportActivity['images'] as $images)
                <div class="images-container">
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
            @endforeach --}}
          </li>
          @endforeach
        </ol>
      </li>
      @endforeach
        
      <!---- END IPM ---->

      <!---- CORRECTIVES ---->

      @if(!empty($report_generate['information_maintenance']['correctives']['status'] === true) )
       
       
            @if (!empty($report_generate['correctives']))

                
                <li style="text-align:center; page-break-before:always; margin-top: 25px">
                  <h1 class="letter"><a id="correctives">{{$report_generate['information_maintenance']['correctives']['title']}}</a></h2>                          

                  <p class="letter" style="font-size:15px;">
                    En esta dependencia se encuentran las descripciones de las actividades que fueron corregidas junto con la fecha de ejecución. 
                  </p>

                  <ol class="sublist" style="margin-top:10px; text-align:left;">
                      @foreach ($report_generate['correctives'] as $corrective)

                      <li style="list-style-type: circle;page-break-inside: avoid;"> 
                          <h2 style="list-style-type: disc;">Novedad:</h2> 
                          <label>{{ $corrective['novelty'] }}</label>
                          <br>
                          <br>
                          <b style="margin-top:20px">Fecha de Corrección:</b> {{ $corrective['date_executed'] }}                           
                          <br>
                          <br>
                          <b style="margin-top:20px">Actividad Corregida:</b> {{ $corrective['description'] }}
                          <br><br>
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
        
      @endif
      <!-- RECOMMENDATION -->
      @if(!empty($report_generate['information_maintenance']['recomendations']['status']===true )) 
        
        @if ( !empty($report_generate['corrective']['alta']) ||!empty($report_generate['preventive']['alta']) ||!empty($report_generate['still_install']['alta']) ||!empty($report_generate['corrective']['media']) ||!empty($report_generate['preventive']['media']) ||!empty($report_generate['still_install']['media'])||!empty($report_generate['corrective']['baja']) ||!empty($report_generate['preventive']['baja']) ||!empty($report_generate['still_install']['baja']))

          <li style="text-align:center; page-break-before:always;">
              <h1 class="letter"><a id="recomendations">{{$report_generate['information_maintenance']['recomendations']['title']}}</a></h1>
              <p class="letter description" style="text-align:justify;">
                  {{$report_generate['information_maintenance']['recomendations']['description']}}
              </p>
              
              <ol class="sublist" style="text-align:justify; ">
                  @if (count($report_generate['corrective']['alta'])!= 0|| count($report_generate['corrective']['media']) != 0 || count($report_generate['corrective']['baja']) != 0)
                      <li>
                          <h2 style="text-align:left;">RECOMENDACIONES POR CORRECTIVOS:</h2>
                          <ol class="sub-sublist" >
                              @if (count($report_generate['corrective']['alta'])!= 0)
                                <b style="text-align:left; margin-top:20px">PRIORIDAD ALTA:</b>
                                  @foreach ($report_generate['corrective']['alta'] as $novelty_corrective)
                                      <li style="margin-top:15px;">
                                          <label>{{$novelty_corrective['description']}}</label>
                                          <div style="font-size:12px;">
                                              <b>Registrada el día:</b> <label>{{$novelty_corrective['date_register']}}</label>
                                          </div>
                                          @if(isset($novelty_corrective['subsystem']))
                                            <div style="font-size:12px;">
                                                <b>Subsistema:</b> <label>{{ $novelty_corrective['subsystem'] }}</label>
                                            </div>
                                          @endif

                                          @if(isset($novelty_corrective['equipment']))
                                              <div style="font-size:12px;">
                                                  <b>Equipo:</b> <label>{{ $novelty_corrective['equipment'] }}</label>
                                              </div>
                                          @endif
                                          @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
                                            
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
                              @if (count($report_generate['corrective']['media'])!= 0)
                                <b style="text-align:left; margin-top:20px">PRIORIDAD MEDIA:</b>
                                    @foreach ($report_generate['corrective']['media'] as $novelty_corrective)
                                        <li style="margin-top:15px;">
                                          <label>{{$novelty_corrective['description']}}</label>
                                          <div style="font-size:12px;">
                                              <b>Registrada el día:</b> <label>{{$novelty_corrective['date_register']}}</label>
                                          </div>
                                          @if(isset($novelty_corrective['subsystem']))
                                            <div style="font-size:12px;">
                                                <b>Subsistema:</b> <label>{{ $novelty_corrective['subsystem'] }}</label>
                                            </div>
                                          @endif

                                          @if(isset($novelty_corrective['equipment']))
                                            <div style="font-size:12px;">
                                                <b>Equipo:</b> <label>{{ $novelty_corrective['equipment'] }}</label>
                                            </div>
                                          @endif
                                          @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
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
                              @if (count($report_generate['corrective']['baja'])!= 0)
                                <b style="text-align:left; margin-top:20px">PRIORIDAD BAJA:</b>
                                    @foreach ($report_generate['corrective']['baja'] as $novelty_corrective)
                                        <li style="margin-top:15px;">
                                          <label>{{$novelty_corrective['description']}}</label>
                                          <div style="font-size:12px;">
                                              <b>Registrada el día:</b> <label>{{$novelty_corrective['date_register']}}</label>
                                          </div>
                                          @if(isset($novelty_corrective['subsystem']))
                                            <div style="font-size:12px;">
                                                <b>Subsistema:</b> <label>{{ $novelty_corrective['subsystem'] }}</label>
                                            </div>
                                          @endif

                                          @if(isset($novelty_corrective['equipment']))
                                              <div style="font-size:12px;">
                                                  <b>Equipo:</b> <label>{{ $novelty_corrective['equipment'] }}</label>
                                              </div>
                                          @endif
                                          @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
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
                  @if (count($report_generate['preventive']['alta'])!= 0|| count($report_generate['preventive']['media']) != 0 || count($report_generate['preventive']['baja']) != 0)
                      <li>
                          <h2 style="text-align:left;">RECOMENDACIONES POR PREVENTIVOS:</h2>
                          <ol class="sub-sublist">
                              @if (count($report_generate['preventive']['alta'])!= 0)
                                <b style="text-align:left; margin-top:20px">PRIORIDAD ALTA:</b>
                                    @foreach ($report_generate['preventive']['alta'] as $novelty_preventive)
                                        <li style="margin-top:15px;">
                                          <label>{{$novelty_preventive['description']}}</label>
                                          <div style="font-size:12px;">
                                              <b>Registrada el día:</b> <label>{{$novelty_preventive['date_register']}}</label>
                                          </div>
                                          @if(isset($novelty_preventive['subsystem']))
                                              <div style="font-size:12px;">
                                                  <b>Subsistema:</b> <label>{{ $novelty_preventive['subsystem'] }}</label>
                                              </div>
                                          @endif

                                          @if(isset($novelty_preventive['equipment']))
                                              <div style="font-size:12px;">
                                                  <b>Equipo:</b> <label>{{ $novelty_preventive['equipment'] }}</label>
                                              </div>
                                          @endif
                                          @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
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
                              @if (count($report_generate['preventive']['media'])!= 0)
                                <b style="text-align:left; margin-top:20px">PRIORIDAD MEDIA:</b>
                                  @foreach ($report_generate['preventive']['media'] as $novelty_preventive)
                                      <li style="margin-top:15px;">
                                        <label>{{$novelty_preventive['description']}}</label>
                                        <div style="font-size:12px;">
                                            <b>Registrada el día:</b> <label>{{$novelty_preventive['date_register']}}</label>
                                        </div>
                                        @if(isset($novelty_preventive['subsystem']))
                                            <div style="font-size:12px;">
                                                <b>Subsistema:</b> <label>{{ $novelty_preventive['subsystem'] }}</label>
                                            </div>
                                        @endif

                                        @if(isset($novelty_preventive['equipment']))
                                            <div style="font-size:12px;">
                                                <b>Equipo:</b> <label>{{ $novelty_preventive['equipment'] }}</label>
                                            </div>
                                        @endif
                                        @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
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
                              @if (count($report_generate['preventive']['baja'])!= 0)
                                <b style="text-align:left; margin-top:20px">PRIORIDAD BAJA:</b>
                                    @foreach ($report_generate['preventive']['baja'] as $novelty_preventive)
                                        <li style="margin-top:15px;">
                                          <label>{{$novelty_preventive['description']}}</label>
                                          <div style="font-size:12px;">
                                              <b>Registrada el día:</b> <label>{{$novelty_preventive['date_register']}}</label>
                                          </div>
                                          @if(isset($novelty_preventive['subsystem']))
                                              <div style="font-size:12px;">
                                                  <b>Subsistema:</b> <label>{{ $novelty_preventive['subsystem'] }}</label>
                                              </div>
                                          @endif

                                          @if(isset($novelty_preventive['equipment']))
                                              <div style="font-size:12px;">
                                                  <b>Equipo:</b> <label>{{ $novelty_preventive['equipment'] }}</label>
                                              </div>
                                          @endif                                                <div style="font-size:12px;">
                                          @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
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
                  @if (count($report_generate['still_install']['alta'])!= 0|| count($report_generate['still_install']['media']) != 0 || count($report_generate['still_install']['baja']) != 0)
                    <li>
                      <h2 style="text-align:left;">RECOMENDACIONES POR FALTA DE INSTALAR:</h2>
                      <ol class="sub-sublist">
                          @if (count($report_generate['still_install']['alta'])!= 0)
                            <b style="text-align:left; margin-top:20px">PRIORIDAD ALTA:</b>
                                @foreach ($report_generate['still_install']['alta'] as $novelty_still_install)
                                    <li style="margin-top:15px;">
                                      <label>{{$novelty_still_install['description']}}</label>
                                      <div style="font-size:12px;">
                                          <b>Registrada el día:</b> <label>{{$novelty_still_install['date_register']}}</label>
                                      </div>
                                      @if(isset($novelty_still_install['subsystem']))
                                          <div style="font-size:12px;">
                                              <b>Subsistema:</b> <label>{{ $novelty_still_install['subsystem'] }}</label>
                                          </div>
                                      @endif

                                      @if(isset($novelty_still_install['equipment']))
                                          <div style="font-size:12px;">
                                              <b>Equipo:</b> <label>{{ $novelty_still_install['equipment'] }}</label>
                                          </div>
                                      @endif
                                      @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
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
                          @if (count($report_generate['still_install']['media'])!= 0)
                            <b style="text-align:left; margin-top:20px">PRIORIDAD MEDIA:</b>
                                @foreach ($report_generate['still_install']['media'] as $novelty_still_install)
                                    <li style="margin-top:15px;">
                                      <label>{{$novelty_still_install['description']}}</label>
                                      <div style="font-size:12px;">
                                          <b>Registrada el día:</b> <label>{{$novelty_still_install['date_register']}}</label>
                                      </div>
                                      @if(isset($novelty_still_install['subsystem']))
                                          <div style="font-size:12px;">
                                              <b>Subsistema:</b> <label>{{ $novelty_still_install['subsystem'] }}</label>
                                          </div>
                                      @endif

                                      @if(isset($novelty_still_install['equipment']))
                                          <div style="font-size:12px;">
                                              <b>Equipo:</b> <label>{{ $novelty_still_install['equipment'] }}</label>
                                          </div>
                                      @endif
                                      @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
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
                          @if (count($report_generate['still_install']['baja'])!= 0)
                            <b style="text-align:left; margin-top:20px">PRIORIDAD BAJA:</b>
                              @foreach ($report_generate['still_install']['baja'] as $novelty_still_install)
                                  <li style="margin-top:15px;">
                                    <label>{{$novelty_still_install['description']}}</label>
                                    <div style="font-size:12px;">
                                        <b>Registrada el día:</b> <label>{{$novelty_still_install['date_register']}}</label>
                                    </div>

                                    @if(isset($novelty_still_install['subsystem']))
                                        <div style="font-size:12px;">
                                            <b>Subsistema:</b> <label>{{ $novelty_still_install['subsystem'] }}</label>
                                        </div>
                                    @endif

                                    @if(isset($novelty_still_install['equipment']))
                                        <div style="font-size:12px;">
                                            <b>Equipo:</b> <label>{{ $novelty_still_install['equipment'] }}</label>
                                        </div>
                                    @endif
                                    @if(!empty($report_generate['information_maintenance']['recomendations']['imagestatus']=== true ))
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
    
      @endif

      <!---- END RECOMENDATION ---->


      <!---- CONCLUTION ---->

        @if($report_generate['information_maintenance']['conclution']['status'])

                              
            <li style="text-align:center; page-break-before:always; margin-top:30px"><h1><a id="conclution"> CONCLUSIÓN</a></h1></li>
                              
            <p class="letter" style="font-size:15px;" align="justify">
              {{$report_generate['information_maintenance']['conclution']['description']}}
              <b>{{$report_generate['conclution']}}</b>
            </p>
            <br>
            <br>
            <div style="text-align:center">
              <b class="letter">-- Fin del Documento --</b>
            </div>

        
        @endif

      <!---- END CONCLUTION ---->
      
    </ol>
                                

  </body>

</html>
