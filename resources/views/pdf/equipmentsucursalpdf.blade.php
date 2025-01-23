<!DOCTYPE html>
<html>

  <head>
    <title>{{$curriculum_equipments_sucursal['name_sucursal']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta charset="UTF-8">

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

  </style>

  <body>

    
    <!-- HEADER -->

      <header>
        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">
            <tr>
              <th class="tg-s6z2" rowspan="4"><span>
                <br>
                <img src="https://ipm-visits.s3.amazonaws.com/{{$curriculum_equipments_sucursal['logo_company']}}" width="80px">
              </span></th>
              <th class="tg-hgcj" rowspan="4"><span style='font-size: 15px;'>HOJAS DE VIDA DE LOS EQUIPOS DE LA SEDE <br> <br> {{$curriculum_equipments_sucursal['name_sucursal']}}</span></th>
              <th class="tg-amwm"><span>{{$curriculum_equipments_sucursal['name_company']}}</span></th>
            </tr>
            <tr>
              <td class="tg-amwm"><span>v.3</span></td>
            </tr>
              <tr>
                
                <td class="tg-amwm"><strong>Cantidad Total de Equipos: {{$curriculum_equipments_sucursal['total_equipments']}}</strong></td>
                
              </tr>
            <tr>
              <td class="tg-amwm"><span>Fecha: {{date('Y-m-d ')}} </span></td>
            </tr>

        </table>
        <br><br>
        <br>
      </header>

      
    <!-- END HEADER -->

    <!-- FOOTER -->

      <footer>

        @if($curriculum_equipments_sucursal['partner']['statusCertification'] == true)
          <img src="{{$curriculum_equipments_sucursal['partner']['certification']}}" alt="" width="100" height="100" align="right" style="margin-top:830px;margin-right:-30px;" >
        @endif
        
      </footer>

    <!--- END FOOTER ---->

    <!-- BODY -->

      @foreach ($curriculum_equipments_sucursal['systems'] as $system)

        <ul style="margin-top:20px">
          <li><b class="letter" style="font-size:16px">{{$system['name']}}</b></li>

          @foreach ($system['subsystems'] as $subsystem)

            <ul style="margin-top:20px">
              <li class="letter letter-size"><b>{{$subsystem['name']}} - Equipos: {{$subsystem['quantity']}}</b>
                <br><br>
              </li>

              @foreach ($subsystem['equipments'] as $equipment)

                <table class="tg" style="margin-top:15px;width:90%;margin-left:-10px;margin-rigth:60px;">

                  <tr>

                    <th><b>item</b></th>
                    <th><b>Descripción de Dato</b></th>
                    <th><b>Dato</b></th>

                  </tr>

                  @foreach ($equipment['data'] as $key => $data )
                    @if ($data['dato'] != '')
                      <tr style="text-align: center">
                        <td><b>{{$key+1}}</b></td>
                        <td><label>{{$data['name']}}</label></td>
                        <td><label>{{$data['dato']}}</label></td>
                      </tr>
                    @endif
                  @endforeach
                </table>
                <br>
                <br>
              @endforeach

            </ul>
              
          @endforeach

        </ul>
          
      @endforeach



    <!-- END BODY -->

    

    

  </body>

</html>
