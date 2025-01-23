<!DOCTYPE html>
<html>

  <head>
    <title>{{$curriculum_equipment_system['name_sucursal']}}</title>
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
                <img src="https://ipm-visits.s3.amazonaws.com/{{$curriculum_equipment_system['logo_company']}}" width="100px">
              </span></th>
              <th class="tg-hgcj" rowspan="4"><span style='font-size: 13px;'><br>EQUIPOS DE LA SEDE {{$curriculum_equipment_system['name_sucursal']}} <br> DEL SISTEMA <br><br><label for="" style="text-transform: uppercase">{{$curriculum_equipment_system['name_system'] }}<br><br></label> </span></th>
              <th class="tg-amwm"><span>{{$curriculum_equipment_system['name_company']}}</span></th>
            </tr>
            <tr>
              <td class="tg-amwm"><span>v.3</span></td>
            </tr>
              <tr>
                
                <td class="tg-amwm"><strong>Cantidad Total de Equipos: {{$curriculum_equipment_system['total_equipments']}}</strong></td>
                
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

        <img src="https://ipm-plataform.s3.us-east-2.amazonaws.com/logos/certificacion.jpg" alt="" width="100" height="100" align="right" style="margin-top:830px;margin-right:-30px;" >
        
      </footer>

    <!--- END FOOTER ---->

    <!-- BODY -->

      @foreach ($curriculum_equipment_system['subsystems'] as $subsystem)

        <ul style="margin-top:10px;margin-left:20px;">
          <li><b class="letter" style="font-size:16px">{{$subsystem['name']}} - Equipos: {{$subsystem['quantity']}}</b></li>

          @foreach ($subsystem['equipments'] as $equipment)

                <table class="tg" style="margin-top:15px;width:90%;margin-left:-10px;margin-rigth:60px;">

                  <tr>   
                    <th><b>Descripción </b></th>
                    <th><b>Dato</b></th>

                  </tr>

                  @foreach ($equipment['data'] as $key => $data )
                    @if ($data['dato'] != '')
                      <tr style="text-align: center">
                        <td width="100px">{{$data['name']}}</td>
                        <td width="100px">{{$data['dato']}}</td>
                      </tr>
                    @endif
                  @endforeach
                </table>
                <br>
                  
          @endforeach

        </ul>
          
      @endforeach

    <!-- END BODY -->

    

    

  </body>

</html>
