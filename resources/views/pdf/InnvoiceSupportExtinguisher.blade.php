<!DOCTYPE html>
<html lang="es">

  <head>
    <title>{{$innvoice['data_sucursal']['name']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <meta charset="utf-8">  

  <style>

    @page { margin-top: 150;margin-bottom: 90}
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
          page-break-inside: always;
          border-collapse: collapse;
          font-size: 10px;   
          width:100%     
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

      ol { font-family: Arial, Helvetica, sans-serif; counter-reset: item; font-size: 14px; margin-top: -25px; }
        ol li{ display: block }
        ol li:before { content: counters(item, ".") " "; counter-increment: item }

      header {
        position: fixed;
        top: -150px;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        color: rgb(14, 13, 13);
        text-align: center;
        line-height: 15px;
      }

      body {
        counter-reset: page-counter 0;
      }

      .page::before {
        counter-increment: page-counter 1;
        content: "Página " counter(page-counter);
      }

      footer {
        position: fixed;
        top: 820px;
        bottom: 55px;
        display: inline-block;
        width:100%     
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
          margin: 0;
          padding: 3px 0px 10px 25px;
          list-style: none;
      }
      
      .img{

        width: 120px;
        height: 140px;
        border: 2px 
        solid #DF7401;
        margin-left: 20px;
        margin-top:8px;
      }

      .footer-title{
          text-align: center;
          //display: inline-grid;
          width:100%;
          margin-top:0px;
          
      }
     

  </style>

  <body style="font-family: Arial, Helvetica, sans-serif;font-size:12px">

    
    <!-- HEADER -->

        <header>
            <table class="table" style="max-width: 1200px; width: 100%; background: white;page-break-before:auto;">
                <tr>
                    <th class="tg-s6z2"> 
                        <img src="{{$innvoice['information']['logo']}}" width="100px">
                    </th>
                    @if($innvoice['innvoice_extinguisher']['title']['status'])
                      <th class="tg-hgcj">
                          <span style='font-size: 13px; text-transform: uppercase;'><br>{{$innvoice['innvoice_extinguisher']['title']['description']}}</span>
                      </th>
                    @endif
                    <th>
                      <span style='font-size: 13px; text-transform: uppercase;'><br>{{$innvoice['consecutive']}}</span>
                    </th>
                </tr>            
            </table>
            <br>
            <br>
        </header>

      
    <!-- END HEADER -->

    <!-- BODY -->
    
    <div class="title" style="margin-top:-50px">
            
      <table class="table">        
        
        <tr>
            <th>CIUDAD:</th>
            <th>{{$innvoice['data_sucursal']['city']}}</th>
            <th>NIT:</th>
            <th>{{$innvoice['data_sucursal']['nit']}}</th>
        </tr>

        <tr>
            <th>RAZÓN SOCIAL:</th>
            <th>{{$innvoice['data_sucursal']['company_name']}}</th>
            <th>CENTRO DE COSTOS:</th>
            <th></th>
        </tr>

        <tr>
            <th>DIRECCIÓN:</th>
            <th>{{$innvoice['data_sucursal']['address']}}</th>
            <th>SEDE:</th>
            <th>{{$innvoice['data_sucursal']['name']}}</th>
        </tr>

        <tr>
          <th>FECHA:</th>
          <th>
            
            @if(!empty($innvoice['date_delivery'] ))
              {{$innvoice['date_delivery']}}
            @endif
          </th>
          <th>TELEFONO:</th>
          <th>
            @if(!empty($innvoice['data_sucursal']['phone_contact']))
              {{$innvoice['data_sucursal']['phone_contact']}}
            @endif
          </th>
        </tr>

      </table>

      <br>

      <table class="table">

        <tr align="center">
          <th colspan="1" style="width:30px">
            <b>ITÉM</b>
          </th>
          <th>
            <b>CONCEPTO</b>
          </th>
          <th>
            <b>CAPACIDAD</b>
          </th>
          <th>
            <b>CANT.</b>
          </th>
          <th>
            <b>CODIGO</b>
          </th>
        </tr>

        @foreach ($innvoice['activities'] as $key => $activity)
          <tr align="center">
            <td colspan="1">{{++$key}}</td>
            <td>{{$activity['description']}}</td>
            @if(!empty($activity['capacity']))
              <td>{{$activity['capacity']}}</td>
              @else
              <td></td>
            @endif
            <td>{{$activity['quantity']}}</td>
            <td>{{$activity['code_material']}}</td>
          </tr>    
        @endforeach

      </table>

      <br>
   
      <br>
      @if(!empty($innvoice['observations']) && count($innvoice['observations']) > 0)
        <table style="width: 100%;border-collapse: collapse;">
          <tr>
            <th colspan="7"><b>OBSERVACIONES:</b>&nbsp;{{$innvoice['observation']}}</th>
          </tr>
          <tr>
            <th>Item</th>
            <th>Equipo</th>
            <th>Tipo de Extintor</th>
            <th>Descripción de la Novedad</th>
            <th>Tipo de Novedad</th>
            <th>Prioridad</th>                  
            <th>Descripción del Correctivo</th>                  
          </tr>
          @foreach ($innvoice['observations'] as $key=> $observation)
            <tr align="center">
              <td>
                {{$key+1}}
              </td>
              <td>
                {{$observation['equipment']}}
              </td>
              <td>
                {{$observation['subsystem_id']}}
              </td>
              <td>
                {{$observation['novelty_description']}}
              </td>
              <td>
                {{$observation['type_novelty']}}
              </td>
              <td>
                {{$observation['priority']}}
              </td>
              @if($observation['status_corrective'] == '1')
                <td>
                  {{$observation['corrective_description']}}
                </td>
              @else
                <td>
                  <label for="" style="color:red">No se realizo correctivo</label>
                </td>
              @endif
            </tr>
          @endforeach
        </table>
        @elseif($innvoice['observation'] != null)
          <table class="table">
            <tr align="center">
              <td><b>OBSERVACIONES:</b>&nbsp;&nbsp;{{$innvoice['observation']}}</td>
            </tr>
          </table>
        @else
          <table class="table">
            <tr align="center">
              <td><b>OBSERVACIONES:</b></td>
            </tr>
          </table>
      @endif
      
      <br>


      <table class="table">

        <tr>
          <th><b>ACEPTADO:</b></th>
        </tr>
        <tr>
          @if(!empty($innvoice['user_approve']['name_user']))
            <th><b>Nombre:</b>&nbsp; {{$innvoice['user_approve']['name_user']}}</th>
            @else
            <th><b>Nombre:</b>&nbsp; Sin Entregar
          @endif
        </tr>
        <tr>
          @if(!empty($innvoice['user_approve']['identification']))
            <th><b>Identifiación:</b>&nbsp; {{$innvoice['user_approve']['identification']}}</th>
            @else
            <th><b>Identifiación:</b>&nbsp; Sin Entregar
          @endif
        </tr>
        <tr>
          @if(!empty($innvoice['user_approve']['charge']))
            <th><b>Cargo:</b>&nbsp; {{$innvoice['user_approve']['charge']}}</th>
            @else
            <th><b>Cargo:</b>&nbsp; Sin Entregar
          @endif
        </tr>
        @if(!empty($innvoice['user_approve']['email']))
        <tr>
            <th><b>Email:</b>&nbsp; {{$innvoice['user_approve']['email']}}</th>       
        </tr>
        @endif
        @if(!empty($innvoice['user_approve']['phone']))
        <tr>        
            <th><b>Telefono:</b>&nbsp; {{$innvoice['user_approve']['phone']}}</th>                 
        </tr>
        @endif
        <tr>
            <th>
                <br>
                <br>
                @if(!empty($innvoice['user_approve']['signature']))
                  <b>Firma:</b>&nbsp; <img src="{{$innvoice['user_approve']['signature']}}" alt="" width="100px" height="80px">
                  @else
                  <b>Firma:</b>&nbsp; Sin Entregar
                @endif
                <br>
                <br>
            </th>
        </tr>
          </th>
        </tr>
                         
      </table>

      <br>

      <table class="table">
        <tr>
          <th><b>RECIBE LOS EQUIPOS</b></th>
        </tr>
        <tr>
          @if(!empty($innvoice['user_delivery']['name_user']))
            <th><b>Nombre:</b>&nbsp; {{$innvoice['user_delivery']['name_user']}}</th>
            @else
            <th><b>Nombre:</b>&nbsp; Sin Entregar
          @endif
        </tr>
        <tr>
          @if(!empty($innvoice['user_delivery']['identification']))
            <th><b>Identifiación:</b>&nbsp; {{$innvoice['user_delivery']['identification']}}</th>
            @else
            <th><b>Identifiación:</b>&nbsp; Sin Entregar
          @endif
        </tr>
        <tr>
          @if(!empty($innvoice['user_delivery']['name_role']))
            <th><b>Cargo:</b>&nbsp; {{$innvoice['user_delivery']['name_role']}}</th>
            @else
            <th><b>Cargo:</b>&nbsp; Sin Entregar
          @endif
        </tr>
        <tr>
            <th>
                <br>
                <br>
                @if(!empty($innvoice['user_delivery']['signature']))
                  <b>Firma:</b>&nbsp; <img src="{{$innvoice['user_delivery']['signature']}}" alt="" width="100px" height="80px">
                  @else
                  <b>Firma:</b>&nbsp; Sin Entregar
                @endif
                <br>
                <br>
            </th>
        </tr>
      </table>

    </div>
    

  <!-- END BODY -->

    <!-- FOOTER -->

      <footer>

        @if(!empty($innvoice['innvoice_extinguisher']['footer']['status']))
          <table class="table" align="center">
            <th>
              <p>
                {{$innvoice['innvoice_extinguisher']['footer']['description']}}
              </p>
            </th>
          </table>
        @endif

        {{-- @if(!empty($innvoice['information']['certification']))
            <img src="{{$innvoice['information']['certification']}}" alt="" width="100" height="100" align="right" style="margin-top:830px;margin-right:-30px;" >
        @endif --}}
        
      </footer>

    <!--- END FOOTER ---->

    

    

    

  </body>

</html>
