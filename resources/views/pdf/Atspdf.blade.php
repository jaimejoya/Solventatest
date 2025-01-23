<!DOCTYPE html>
<html>

  <head>
    <title>{{$format['nameSucursal']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


  <meta charset="utf-8"> 
  <style>
    @page { margin: 180px 50px; }
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

      .page-break {
        page-break-before: always;
      }

      .pagenum:before{
        content: counter(page);
      }

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

      footer {

        position: fixed;
        top: 0;
        bottom: 55px;
        left: 0px;
        right: 0px;

      }

      ol { font-family: Arial, Helvetica, sans-serif; counter-reset: item; font-size: 14px; margin-top: -25px; }
      ol li{ display: block }
      ol li:before { content: counters(item, ".") " "; counter-increment: item }
      

      .a1{
        color:black;
        top: 40px;
        margin-top:35px;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
        font-size: 15px;
      }

      .title{
        margin-top:20px;
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;
      }

      .letter{
        font-family: 'Arial, Helvetica, sans-serif';
      }

      .letter-size {
        font-size: 13px;
      }

      .justify{
        text-align: justify;
      }

      .li{
        margin-left: 0px;
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
        list-style-image: url("https://ipm-visits.s3.amazonaws.com/report/5ea824214c9cc37636984457/5ea824d54c9cc3f636984456/logo-interfire.png");
        margin-left: 50px;
        margin-right: 60px
      }

      .img{

        width: 120px;
        height: 140px;
        border: 2px 
        solid #DF7401;
        margin-left: 30px;
      }

      .footer-title{
          text-align: center;
          //display: inline-grid;
          width:100%;
          margin-top:0px;
          
      }

      .soul{
        background-color:#ffce93;
      }
      .more{
        font-size: 10px;
      }

      body{
        font-family: Arial, Helvetica, sans-serif;
      }

      .img{

        width: 120px;
        height: 140px;
        border: 2px 
        solid #DF7401;
        margin-left: 20px;
        margin-top:8px;
      }

  </style>


  <body>

    <!-- HEADER -->
      <header>

        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">

            <tr>
              <th class="tg-s6z2" colspan="1" rowspan="4">
                <span>
                  <br> <img src="{{ $format['logo'] }}" width="100px">
                </span>
              </th>

              @if($format['information_ats']['title']['status'])
                <th class="tg-hgcj" rowspan="4"><span style='font-size: 13px;'>{{$format['information_ats']['title']['description']}}</label> </th>                             
              @endif

              @if($format['information_ats']['code_quality']['status'])
                <th class="tg-amwm"><span>{{$format['information_ats']['code_quality']['description']}}</span></th>
                @else                
                  <th class="tg-amwm"></th>                
              @endif
              
            </tr>

            @if($format['information_ats']['format_version']['status'])
              <tr>
                <td class="tg-amwm"><span>{{$format['information_ats']['format_version']['description']}}</span></td>
              </tr>
              @else
              <tr>
                <td class="tg-amwm"></td>
              </tr>
            @endif

            <tr>  
              <td class="tg-amwm" ><strong>Página 1 de 1</strong></td>
            </tr>

            @if($format['information_ats']['format_date']['status'])
              <tr>
                <td class="tg-amwm"><span>{{$format['information_ats']['format_date']['description']}}</span></td>
              </tr>
              @else
              <tr>
                <td class="tg-amwm"></td>
              </tr>
            @endif

        </table>
        <br><br><br>

      </header>  
    <!-- END HEADER -->

    <!-- FOOTER -->

      @if (isset($format['certification']))
        <footer>
          <img src="{{ $format['certification'] }}" alt="" width="100" height="100" align="right" style="margin-top:830px;margin-right:-30px;" >
        </footer>
      @endif

      <!--- END FOOTER ---->
      
      <div style="margin-top:-15px">

        @if($format['hour'] != '')

          <table style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <tr>
              <td style="font-size: 10px">
                <b>Fecha de elaboracion:</b> 
                &nbsp; {{-- {{ date("d/m/Y", strtotime($format['updated_at']))}} --}}{{$format['date_schedule']}}
              </td>
              @if($format['hour'] != '')
                <td style="font-size: 10px">
                  <p> <b>Hora:</b>&nbsp;{{$format['hour']}} </p> 
                </td>
              @endif
            </tr>
            <tr>
              <td style="font-size: 10px">
                <p> <b>Cliente:</b>&nbsp;{{$format['client']}} </p> 
              </td>

              <td style="font-size: 10px">
                <p> <b>Sede donde se ejecuta la actividad:</b>&nbsp;{{$format['nameSucursal']}} </p> 
              </td>
                
            </tr>
          </table>
          
        @else

          <div class="textlowercase" style="font-size:10px; float: left; margin-right: 10px">
            <p> <b>Fecha de elaboracion:</b> &nbsp; {{ date("d/m/Y", strtotime($format['updated_at']))}} </p>
          </div>

          <div style="font-size:10px; float: left; margin-left:50px;">
            <p> <b>Empresa donde se ejecuta la actividad:</b>&nbsp;{{$format['nameSucursal']}} </p> 
          </div>

        @endif

        <br>
        
        <!-- BODY -->
        <div>
          <br>
          @foreach ($format['items'] as $item)
            <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px">
              <tr>
                <th class="soul" width="20%">
                  <span>{{$item['name']}}</span>
                </th>
                <th>
                    @if(is_array($item['value']))
                        @foreach ($item['value'] as $value)
                          {{$value}}
                        @endforeach 
                      @else
                        {{$item['value']}}
                    @endif
                  @if($item['evidence']['url'] != '' && $item['evidence']['show'])
                      <a href="{{$item['evidence']['url']}}" target="_blank">Imagen</a>                     
                  @endif
                  
                </th>              
              </tr>        
            </table>
          @endforeach

          <br>
          <br>

          <table class="tg" style="max-width: 1200px; width: 100%; background: white;margin-right: 25px; ">
            <tr>
              <th class="soul" class="tg" colspan="8"  width="120px">
                <b>Equipo que elabora el ATS</b>
              </th>
          </table>

          <br>

          <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px;">

            @foreach($format['visitUser_id'] as $user)
              <tr>
                <th colspan="2" align="left">
                  <div class="col-10" >
                    <b>Nombre:</b> &nbsp; {{$user['name_user']}}
                    <br>
                    <b>Identificación:</b> &nbsp; {{$user['identification']}}
                    <br>
                    <b>Correo:</b> &nbsp; {{$user['email']}}
                  </div>
                </th>
                <th colspan="4">
                  <div class="col-4">
                    @if($user['approvated'])
                      Firma: 
                      <br>
                      <img src="{{$user['signature']}}" alt="" width="100px" height="80px">
                      @else
                      Firma: 
                      <br>
                      <b>No ha sido firmado el Ats</b>
                    @endif
                  </div>
                </th>
              </tr>
            @endforeach

          </table>

          <br>
          <br>
          <br>

          @if($format['diligenceFormatStatus'])

            <div class="row">

              <div class="col">
                <div style="font-size:10px; float: left; margin-right: 10px; margin-left:32px;">
                    <p ><b>Responsable del sistema SGSST :</b> <br><br> {{$format['approvingUser']['name_user']}}</p> 
                </div>
              </div>

              <div class="col">
                <div style="font-size:10px; float: left; margin-left:50px;">
                    <p><b>Cargo:</b> <br><br> {{$format['approvingUser']['name_role']}}</p> 
                </div>
              </div>
              
              <div class="col">
                <div style="font-size:10px; float: left; margin-left:50px;top:10px">
                  <p>
                    <b>firma:</b> <br><br>
                    @if ($format['approvingUser']['status']) 
                        <img src="{{$format['approvingUser']['signature']}}" width="75px" height="30px">
                    @else
                        <label style="font-size: 10px">No a sido aprobado el ATS</label>
                    @endif
                  </p>
                </div> 
              </div>

            </div>
            
          @endif
        </div>

      </div>

    
  </body>


</html>
