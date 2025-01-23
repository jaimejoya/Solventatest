<!DOCTYPE html>
<html>

  <head>
    <title>Formularios de Reporte de Actividades</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta charset="UTF-8">

  <style>
    @page { margin: 180px 50px; }
      .tg  {border-collapse:collapse;border-spacing:10;}
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
        list-style-image: url("http://interfire.co/wp-content/uploads/2019/11/llama-2.jpg");
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
  </style>

  <body>

    
    <!-- HEADER -->
      
      <header>
        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px;">
            <tr>
              <th class="tg-s6z2" rowspan="4" colspan="2">
                <span>
                  <br> 
                  <img src="{{$data['partner']['logo']}}" width="80px">
                </span>
              </th>                   
              <th class="tg-hgcj" colspan="8" rowspan="4"><span style='font-size: 13px;'>FORMULARIOS DE ACTIVIDADES</th>
              <th class="tg-amwm" colspan="2"><span>F-EXT-01</span></th>
            </tr>
            <tr>
              <td class="tg-amwm" colspan="2"><span>v.1</span></td>
            </tr>              
            <tr>
              <td class="tg-amwm" colspan="2"><span>Fecha: {{date('d-m-Y')}} </span></td>
            </tr>

            <tr>
              <td lass="tg-amwm" colspan="2"></td>
            </tr>

        </table>
        <br><br>
      </header>

      
    <!-- END HEADER -->

    <!-- FOOTER -->

      @if($data['partner']['statusCertification'])

        <footer>
          <img src="{{$data['partner']['certification']}}" alt="" width="100" height="100" align="right" style="margin-top:815px; margin-right:-30px;" >
        </footer>

      @endif
   
    <!--- END FOOTER ---->

    <!-- BODY -->
      <ol>
        @foreach ($data['subsystem_id'] as $system)
          <li style="page-break-before: avoid;">
            <b>{{ $system }}</b>
            <br><br>
            <br>
            <ol>
              @foreach ($data['form_equipment_report'][$system] as $form_equipment)
                <li>
                  <b>{{ $form_equipment['capacity'] }}</b>
                  <br>
                  <table class="tg" style="width:100%;margin-left:-20px;margin-top:5px;page-break-before: avoid;">
                    <tr>
                      <th colspan="2"><b style="text-transform: uppercase">ACTIVIDADES DE 
                      @if ($form_equipment['type']=="inspection")
                        INSPECCION   
                      @elseif ($form_equipment['type']=="maintenance")
                        MANTENIMIENTO
                      @else
                        PRUEBA
                      @endif 
                      @if ($form_equipment["frequency"]=="monthly")
                        MENSUAL  
                      @elseif($form_equipment["frequency"]=="annual")
                        ANUAL
                      @else
                        CINCO AÑOS
                      @endif
                      </b></th>
                    </tr>
                    @foreach ($form_equipment["sections"] as $section)
                      <tr style="text-align: center">
                        <td><b>item</b></td>
                        <td><b>Descripción de la Actividad</b></td>
                      </tr>
                      @foreach ($section["items"] as $key => $item)
                        <tr style="text-align: center">
                          <td width="100px">{{ $key+1 }}</td>
                          <td width="100px">{{ $item["data"]["name"] }}</td>
                        </tr>
                      @endforeach
                    @endforeach
                  </table>
                </li>
                <br>
              @endforeach
            </ol>
          </li>
        @endforeach
      </ol>    
    <!-- END BODY -->
  </body>

</html>
