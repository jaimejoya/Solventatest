<!DOCTYPE html>
<html>

  <head>
    <title>Pausas Activas</title>
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
    @foreach ($activeBreaks as $item)

      <header>

        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; ">

          <tr>
            <th class="tg-s6z2" rowspan="{{$item['count']}}"><br> <img src="{{$item['logo']}}" width="100px"></th>
            @if($item['information_active_breaks']['title']['status'])
              <th class="tg-amwm" colspan="8" rowspan="{{$item['count']}}"><span style='font-size: 13px;'>{{$item['information_active_breaks']['title']['description']}}</label> </th>
            @endif
            <th class="tg-amwm" colspan="2">Página 1 de 1</th>
          </tr>

          @if($item['information_active_breaks']['format_version']['status'])
            <tr>
              <br>
              <td class="tg-amwm" colspan="2"><span>{{$item['information_active_breaks']['format_version']['description']}}</span></td>
            </tr>
          @endif

          @if($item['information_active_breaks']['code_quality']['status'])
            <tr>              
              <td class="tg-amwm" colspan="2"><span>{{$item['information_active_breaks']['code_quality']['description']}}</span></td>
            </tr>
          @endif            

          @if($item['information_active_breaks']['format_date']['status'])
            <tr>
              <td class="tg-amwm" colspan="2"><span>{{$item['information_active_breaks']['format_date']['description']}}</span></td>
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
          <p> Fecha de elaboracion: &nbsp;{{ date("d/m/Y", strtotime($item['dateactiveBreak']))}}
            @if ($item['activeBreakTime'])
              Hora de elaboracion:{{ $item['activeBreakTime']}}   
            @endif 
          </p>  
        </div>

        <div style="font-size:10px; float: left; margin-left:50px;">
          <p>   
            @foreach ( $item['userName'] as $user)
              Nombre:&nbsp;{{ $user['name_user']}}
              <br>  
            @endforeach          
            <br>              
          </p> 
        </div>

        <br>
        <br>


        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px; " >

          <tr>
            <th class="soul">DESCRIPCION</th>
            <th class="soul">RESPUESTA</th>
          </tr>

          <tr>
            <td>{{ $item['questionOne']["title"] }} </td>
            <td style="text-align:center;">{{ $item['questionOne']["value"] }}</td>
          </tr>

        </table>

        <br>
        <br>
        
        <div style="font-size:10px; float: left;">
          <p> 
            @foreach ( $item['userName'] as $user)
              @if (!empty($user['signature']))
                Nombre:{{$user['name_user']}} <br><br>
                firma:  <img src="{{ asset('https://ipm-visits.s3.amazonaws.com/'.$user['signature']) }}" width="85px" height="60px">  
                <br>       
              @endif
            @endforeach
            <br>  
          </p> 
        </div>
    
    @endforeach

  </body>

</html>
