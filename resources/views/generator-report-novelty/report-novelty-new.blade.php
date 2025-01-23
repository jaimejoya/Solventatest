<!DOCTYPE html>
<html lang="es">

  <head>
    <title>{{$report_generate['sucursal_name']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <meta charset="utf-8">  

  <style>

    @page { margin: 3.5cm 0cm 2cm}
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
          
      header {
        position:fixed;
        top: -100px;
        left: 0;
        width: 100%;        
        z-index: 1000;
        margin-bottom: 20px;                         
      }

      body {
        counter-reset: page-counter 0;               
      }

      .main-content-one-page{             
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;

      }

      .main-content{    
        margin-top:40px;     
        margin-bottom: 40px; /* Ajusta según sea necesario para dejar espacio para el footer */        
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

      footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 30px; /* Ajusta según sea necesario */        
        text-align: right;        
        box-sizing: border-box;     
      }

      footer img {
        width: 100px;
        height: 100px;
        /* Puedes agregar estilos adicionales para la imagen según tus necesidades */
      }

      .footer-content img {
        max-width: 100%;
        height: auto;
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
      
      .img{

        width: 120px;
        height: 140px;
        border: 2px 
        solid #DF7401;
        margin-top:8px;
      }

      .footer-title{
          text-align: center;
          //display: inline-grid;
          width:100%;
          margin-top:0px;
          
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
      .td{ 
          display: table-cell;
      }

     

  </style>

  <body class="letter">

    
    <!-- HEADER -->
      <header id="mainHeader">
        <table class="tg" style="width: 100%; background: white;border-radius:35px;">
          <tr>
            <th class="tg-s6z2" rowspan="4" style="width:100px">
              <img src="{{$report_generate['logo']}}" width="80px">
            </th>
            @if($report_generate['information_maintenance']['title']['status'])
              <th class="tg-hgcj" rowspan="4" style="border-radius:12px">
                <span style='font-size: 15px'>INFORME DE NOVEDADES Y CORRECTIVOS {{$report_generate['company_name']}} {{$report_generate['sucursal_name']}}</span> 
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

        <p><strong>INFORME DE NOVEDADES Y CORRECTIVOS
            <br>
            <b style="text-transform: uppercase">{{$report_generate['company_name']}}</b>
            <br>
            <b style="text-transform: uppercase">{{$report_generate['sucursal_name']}}</b></strong>
        </p>
            
            
        <p style="margin-top:95px;"class="present-to"><strong>
            Presentado a:
            <br>
            <b>{{$report_generate['company_name']}}</b>
          </strong>
        </p>
        
        @if ($report_generate['company_logo'] != '')
          <div class='logo-client' style="margin-top:60px;">
              <img src="https://ipm-visits.s3.amazonaws.com/{{$report_generate['company_logo']}}" width="20%"  max-width="20%">
              <br>
          </div>
          @else
          <div class='logo-client' style="margin-top:60px;">
          </div>
        @endif


        <div class="content" style="margin-top:10%;">
            <b>{{ $report_generate['partner'] }}</b>
            <br>
            <b>{{$report_generate['month_generate']}}</b>
            <br>
        </div>
        
        <br>
        
        <div  class="footer-title"  style="margin-top:-15px">
          
          <table class="tg" style="width: 100%; background: white;border-radius:35px;margin-top:90px">            
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

    <!--- INTRODUCCION ---->

      @if($report_generate['information_maintenance']['introduction']['status'] == true && $report_generate['information_maintenance']['introduction']['title'] != '')

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

      <!---- CORRECTIVES ---->

        @if (!empty($report_generate['correctives']))

            
          <div class="main-content" style="page-break-before:always;">
            
            <ol>
                <li style="text-align:center;"><b class="letter">.&nbsp; {{$report_generate['information_maintenance']['correctives']['title']}}</b>                          
    
                <p class="letter" style="font-size:15px;">
                  En esta dependencia se encuentran las descripciones de las actividades que fueron corregidas junto con la fecha de ejecución. 
                </p>
    
                <ol align="justify" style="margin-top:30px;">
                  <ul>
                    @foreach ($report_generate['correctives'] as $corrective)
                                              
                      <div style="text-align: justify;">
                        <li style="font-weight: bold;margin-left:15px"> <b>Equipo:</b> <label>{{ $corrective['equipment'] }}</label> </li>
                        <br>
                        <br>
                        <b style="margin-top:10px;margin-left:15px">Subsistema:</b> {{ $corrective['subsystem'] }}                           
                        <br>
                        <p style="margin-top:10px;margin-left:15px; margin-right:15px"><b>Novedad:</b> {{ $corrective['novelty'] }}</p>                 
                        <br>
                        <b style="margin-top:10px;margin-left:15px">Imagenes Novedades:</b>
                        <br>
                            <div  class="card-body" style="margin-top:15px;">
                                <div class="row row-cols-2 row-cols-md-3" align="center">
                                  <br>
                                  <br>
                                    <div class="card h-20">
                                    @foreach ($corrective['images_novelty'] as $image )
                                    <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        <br>
                        <b style="margin-left:15px">Fecha de Corrección:</b> {{ $corrective['date_executed'] }}                           
                        <br>
                        <p style="margin-top:10px;margin-left:15px; margin-right:15px"><b>Actividad Corregida:</b>{{ $corrective['description_corrective'] }}</p>
                        <br>
                        <b style="margin-left:10px;margin-left:15px;">Imagenes Correctivos:</b>
                        <br>    
                        <div  class="card-body" style="margin-top:15px;">
                          <div class="row row-cols-2 row-cols-md-3" align="center">
                            <br>
                            <br>
                              <div class="card h-20">
                                @foreach ($corrective['images_corrective'] as $image )
                                <img src="https://s3.amazonaws.com/ipm-visits/{{$image}}" class="img">
                                @endforeach
                              </div>
                            
                          </div>
                        </div>
    
                      </div>                                              
                      <br>                    
                    @endforeach
                  </ul>
                </ol>
                </li> 
            </ol>
          </div>

        @endif
      
    </ol>
                                

  </body>

</html>
