<!DOCTYPE html>
<html>

  <head>
    <title>Covid19</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta charset="UTF-8">

  <style>
    @page { margin: 180px 50px; }
      .tg  {border-collapse:collapse;border-spacing:8;}
      .tg .tg-s6z2{text-align:center}
      .tg .tg-baqh{text-align:center;vertical-align:top}
      .tg .tg-lqy6{text-align:right;vertical-align:top}
      .tg .tg-hgcj{font-weight:bold;text-align:center}
      .tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:middle}
      .tg .tg-yw4l{vertical-align:top}
      .tg .tg-ssyz{font-weight:bold;background-color:#ffce93;color:#000000;text-align:center;vertical-align:top}
      .tg .tg-9hbo{font-weight:bold;vertical-align:top}
      .tg .tg-5qfb{font-weight:bold;background-color:#ffce93;text-align:center;vertical-align:top}        


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

  <body
    @foreach ($covid as $item)

    <!-- HEADER -->
          <header>

            <table class="tg" style="max-width: 1200px; width: 100%; background: white;margin-right: 25px; ">

              <tr>
                <th class="tg-s6z2" colspan="2" rowspan="{{$item['count']}}"><br> <img src="{{$item['logo']}}" width="100px"></th>
                @if($item['information_covid19']['title']['status'])
                  <th class="tg-amwm" colspan="8" rowspan="{{$item['count']}}"><span style='font-size: 13px;'>{{$item['information_covid19']['title']['description']}}</label> </th>
                @endif
                <th class="tg-amwm" colspan="2">Página 1 de 1</th>
              </tr>

              @if($item['information_covid19']['format_version']['status'])
                <tr>
                  <td class="tg-amwm" colspan="2"><span>{{$item['information_covid19']['format_version']['description']}}</span></td>
                </tr>
              @endif

              @if($item['information_covid19']['code_quality']['status'])
                <tr>              
                  <td class="tg-amwm" colspan="2"><span>{{$item['information_covid19']['code_quality']['description']}}</span></td>
                </tr>
              @endif            

              @if($item['information_covid19']['format_date']['status'])
                <tr>
                  <td class="tg-amwm" colspan="2"><span>{{$item['information_covid19']['format_date']['description']}}</span></td>
                </tr>
              @endif

            </table>

            <br><br>
            <br>
          </header>
    <!-- END HEADER -->

      <!-- FOOTER -->
        @if (isset($item['certification']))        
          <footer>
            <img src="{{ $item['certification'] }}" alt="" width="100" height="100" align="right" style="margin-top:830px;margin-right:-30px;" >
          </footer>
        @endif
      <!--- END FOOTER ---->

      <div class="textlowercase" style="font-size:10px; float: left; margin-right: 10px; margin-left:32px;">
        <p> Fecha de elaboracion:&nbsp;{{ date("d/m/Y", strtotime($item['dateCovid19']))}} </p>
      </div>

      <div style="font-size:10px; float: left; margin-left:50px;">
        <p> 
          Nombre:&nbsp;{{$item['userName'][0]['name_user']}}<br>
          <br>  
        </p> 
      </div>

      <br>
      <br>
      <br>
      <!-- BODY -->
      <!-- END BODY -->

    

      <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; " >

        <tr>
          <th class="soul">DESCRIPCION</th>
          <th class="soul">RESPUESTA</th>
        </tr>

        <tr>
          <td>¿Presenta dificultad al respirar ? </td>
          <td style="text-align:center;">{{ $item['questionOne']["value"] }}</td>
        </tr>

        <tr>
          <td>¿Ha presentado fiebre de    + 37.3°C en los ultimos   3 dias ? </td>
          <td style="text-align:center;"> {{$item['questionTwo']["value"] }}</td>
        </tr>

        <tr>
          <td>Toma Temperatura Corporal ºC </td>
          <td style="text-align:center;">   {{ $item['questionEight']["value"] }}</td>
        </tr>

        <tr>
          <td> ¿Tienes tos seca y persistente?</td>
          <td style="text-align:center;"> {{ $item['questionThree']["value"]}}</td>
        </tr>

        <tr>
          <td>¿Tienes sensación de fatiga o cansancio muscular? </td>
          <td style="text-align:center;"> {{  $item['questionFour']["value"] }}</td>
        </tr>

        <tr>
          <td>¿Tienes secreciones nasales?</td>
          <td style="text-align:center;"> {{  $item['questionFive']["value"] }}</td>
        </tr>
        
        <tr>
          <td>¿Tienes dolor de garganta o dolor de cabeza? </td>
          <td style="text-align:center;"> {{  $item['questionSix']["value"] }}</td>
        </tr>


        <tr>
          <td>¿Tienes pérdida del olfato y/o el gusto?</td>
          <td style="text-align:center;">  {{  $item['questionSeven']["value"] }} </td>
        </tr>

        <tr>
          <td>¿Tienes sensación de malestar general?</td>
          <td style="text-align:center;"> {{  $item['questionNine']["value"] }}</td>
        </tr>

        <tr>
          <td>¿Tienes trastornos gástricos o intestinales (náuseas, vómito, diarrea) ?</td>
          <td style="text-align:center;">  {{  $item['questionTen']["value"] }}</td>
        </tr>
  
        <tr>
          <td>¿Limpia ,desinfectar los objetos y la superficies que toca frecuentemente en su puesto de trabajo. ?</td>
          <td style="text-align:center;">  {{  $item['questionfourTeen']["value"] }}</td>
        </tr>

        <tr>
          <td>Ventila frecuentemente su puesto y área de trabajo.</td>
          <td style="text-align:center;">  {{  $item['questionFifteen']["value"] }}</td>
        </tr>

        <tr>
          <td>¿Cuenta con los Elementos de Protección Covid 19?</td>
          <td>
            <ul>
              <li>
              <span>Tapabocas:</span> {{  $item['questionEleven']["value"] }}
              </li>
              <li>
              <span> Alcohol:</span> {{  $item['questionTwelve']["value"] }}
              </li>
              <li>
              <span> Gel:</span>{{  $item['questionThirteen']["value"] }}
              </li>
            </ul>
          </td>
        </tr>

 
      </table>

      <br>

      <div style="font-size:10px; float: left; margin-left:50px;">
        <p> 
          @if ($item['userName'][0]['signature']!="")    
            Nombre:{{$item['userName'][0]['name_user']}} 
            <br>
            <br>
            <br>
            firma:&nbsp;&nbsp;<img src="{{ asset($item['userName'][0]['signature']) }}" width="85px" height="60px">
          @endif
          <br>
        </p> 
      </div>
    
    @endforeach
  </body>
 
</html>
