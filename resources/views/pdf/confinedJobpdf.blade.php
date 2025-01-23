<!DOCTYPE html>
<html>

  <head>
    <title></title>
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
        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">
            <tr>
              <th class="tg-s6z2" colspan="2" rowspan="4"><span>
               
               <br> <img src="https://ipm-visits.s3.amazonaws.com/report/5ea824214c9cc37636984457/5ea824d54c9cc3f636984456/logo-interfire.png" width="100px">
              </span></th>
              <th class="tg-hgcj" colspan="8" rowspan="4"><span style='font-size: 13px;'>PERMISO DE TRABAJO EN ESPACIOS CONFINADOS</label> </th>
              <th class="tg-amwm" colspan="2"><span>F-SST-08</span></th>
            </tr>
            <tr>
                <br>
              <td class="tg-amwm" colspan="2"><span>v.2</span></td>
            </tr>
              <tr>
                
                <td class="tg-amwm" colspan="2" ><strong>Página 1 de 1</strong></td>
                
              </tr>
            <tr>
              <td class="tg-amwm" colspan="2"><span>Fecha: 6/01/21 </span></td>
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















     

<!-- END BODY -->

    
   
<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

  <tr>

      <th class="soul"><b>FECHA DE EXPEDICION</b></th>
     
      <th class="soul"><b>LOCALIZACION EXACTA DEL TRABAJO</b></th>
  </tr>


  
      <tr style="text-align: center; font-size:5px;">
        
         
          <td width="100px">{{$confinedJob['expeditionDate']}}</td>
          <td width="100px">
           
           {{ $confinedJob["locationJob"]["value"]}}
          
          </td>
      </tr>
  


</table>

<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

  <tr>

      <th class="soul"><b>VALIDO DESDE LAS </b></th>
      <th class="soul"><b>HASTA LAS </b></th>
  
  </tr>


  
      <tr style="text-align: center">
        
         
          <td width="100px">{{ $confinedJob["Headboard"]["validDate"]["value"]}}</td>
          <td width="100px">{{ $confinedJob["Headboard"]["untilDate"]["value"]}}</td>
      </tr>
  


</table>
<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

  <tr>

    
      <th class="soul"><b>PROCESO/AREA </b></th>
  
  </tr>


  
      <tr style="text-align: center">
        
         
          
          <td width="100px">{{$confinedJob["Headboard"]["place"]["value"]}}</td>
      </tr>
  
  

</table>


<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

  <tr>

    
      <th class="soul"><b>DESCRIPCION DEL TRABAJO A REALIZAR </b></th>
      <th class="soul"><b>RIESGOS ASOCIADOS  </b></th>
  </tr>


  
      <tr style="text-align: center">
        
         
          
          <td width="100px">{{$confinedJob["DescriptionJob"]["value"]}}</td>
          <td width="100px">{{$confinedJob["risk"]["value"]}}</td>
      </tr>
  
  

</table>
<br>



<br>
<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; " >
  <caption style="font-size: 10px;  "> COMPROBACIONES PREVIAS AL INICIO DEL TRABAJO (REALIZADAS POR EL RESPONSABLE DE LA TAREA )</caption>
  <br>
  <br>
  <caption style="font-size: 10px;  ">Requisitos Exigibles siempre</caption>
  <tr>
    <th class="soul">N°</th>
    <th class="soul">PREGUNTA</th>

    <th class="soul">RESPUESTA</th>

  

  </tr>

  <tr>
    

    
    <td>1 </td>
    <td>Presencia de recursos preventivos</td>

    <td> 
      
  {{$question[0]}}
        
  
     
     
    </td>

   
  
  </tr>

  <tr>
    <td>2 </td>
    <td>Existe supervisión y comunicación permanente desde el exterior</td>

    <td> {{$question[1]}} </td>

   

  </tr>
  <tr>

    <td>3 </td>
    <td>Se ha verificado la atmósfera interior (CO2, O2, Exposividad) </td>

    <td>  {{$question[2]}} </td>

   

  </tr>
  <tr>
    <td>4 </td>
    <td> Los trabajadores cuentan con equipo de protección respiratoria</td>

    <td>{{$question[3]}} </td>

   

  </tr>
  <tr>
    <td>5 </td>
    <td>Riesgos y medidas de prevención y protección </td>

    <td>{{$question[4]}} </td>

   

  </tr>
  <tr>
    <td>6</td>
    <td>Uso de equipos de medición</td>

    <td>{{$question[5]}} </td>

   

  </tr>
  <tr>
    <td>7</td>
    <td>Procedimientos de rescate y evacuación </td>

    <td> {{$question[6]}}</td>

   

  </tr>
  <tr>
    <td>8</td>
    <td>Sistema de comunicación interior / exterior</td>

    <td> {{$question[7]}}  </td>

   

  </tr>
  <tr>
    <td>9 </td>
    <td>Área de Trabajo señalizada</td>

    <td>{{$question[8]}} </td>

   

  </tr>
  <tr>
    <td>10</td>
    <td>Equipos de extinción de incendios próximos y en buen estado</td>

    <td> {{$question[9]}} </td>

   

  </tr>
 

 
 
</table>

<br>

<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; " >
  <caption style="font-size: 10px;  ">REQUISITOS EXIGIBLES EN DETERMINADAS CIRCUSTANCIAS </caption>

  <tr>
    <th class="soul">N°</th>
    <th class="soul">PREGUNTA</th>

    <th class="soul">RESPUESTA</th>

  

  </tr>

  <tr>
    <td>1 </td>
    <td>Medición de contaminantes específicos</td>

    <td>
      {{$confinedJob["specifyMeasure"]}}
  </td>

   

  </tr>

  <tr>
    <td>2 </td>
    <td>Ventilación forzada</td>

    <td>
      {{$question[11]}}
  </td>

   

  </tr>
  <tr>
    <td>3</td>
    <td>Aspiración forzada</td>

    <td>
      {{$question[12]}}
  </td>

   

  </tr>
  <tr>
    <td>4 </td>
    <td>Iluminación portátil (antiexplosión)</td>

    <td>
      {{$question[13]}}
  </td>

   

  </tr>
  <tr>
    <td>5 </td>
    <td>Desconexión y enclavamiento eléctrico</td>

    <td>
      {{$question[14]}}
  </td>

   

  </tr>
  <tr>
    <td>6 </td>
    <td>Válvulas cerradasa</td>

    <td>
      {{$question[15]}}
  </td>

   

  </tr>
  <tr>
    <td>7 </td>
    <td>Arnés de seguridad y cuerda</td>

    <td>
      {{$question[16]}}
  </td>

   

  </tr>
  <tr>
    <td>8 </td>
    <td>Otras medidas de Prevención</td>

    <td>
      {{$confinedJob["preventionMeasure"]}}
  </td>

   

  </tr>

 
 
</table>


<br>
<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; margin-top:3px; " >
  <caption style="font-size: 10px;  ">DATOS BASICOS DE LAS PERSONAS AUTORIZADAS PARA REALIZAR EL TRABAJO</caption>
  <tr>
    <th class="soul">NOMBRE</th>
    <th class="soul"> CC O NIT</th>
    <th class="soul">ARL</th>
    <th class="soul">EPS</th>
   
    <th class="soul">FIRMA</th>
  

  </tr>

  
@foreach ($confinedJob["allUser"] as $item)
    

  <tr>
    <td>{{$item["name_user"]}} </td>
    <td>{{$item["identification"]}} </td>
    <td>{{$item["arl"]}} </td>
    <td>{{$item["eps"]}} </td>


    <td>
      @if ($item["status"]===true)
      <img src="{{ asset('https://ipm-visits.s3.amazonaws.com/'.$item["signature"]) }}" width="75px" height="50px">
      @endif
    </td>

   

  </tr>
  @endforeach

   

  
 
</table>
<br>
<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; " >
  <caption style="font-size: 10px;">AUTORIDAD DE AREA  ( RESPONSEBLE EN LA EJECUCION DE LA TAREA )</caption>
  <tr>
    <th class="soul">NOMBRE</th>
    <th class="soul">CC</th>

    <th class="soul">CARGO</th>
    <th class="soul">FIRMA</th>
  

  </tr>

  

    

  <tr>
    <td>{{$confinedJob["responsableUser"]["name_user"]}} </td>
    <td>{{$confinedJob["responsableUser"]["identification"]}} </td>
    <td>{{$confinedJob["responsableUser"]["name_rol"]}} </td>

    <td>
      @if ($confinedJob["responsableUser"]["status"]===true)
      <img src="{{ asset('https://ipm-visits.s3.amazonaws.com/'.$confinedJob["responsableUser"]["signature"]) }}" width="75px" height="50px">
      @endif
    </td>

   

    
  </tr>


   

  
 
</table>

<br>

<br>
<div style="font-size:10px; float: left; margin-left:50px;">
  <p> 
    {{-- @foreach ($item['userName'] as $visitUser)

  
     
     

      @if ($visitUser['signature']!="")
     
       Nombre:{{$visitUser['name_user']}} <br><br>
       firma:  <img src="{{ asset('https://ipm-visits.s3.amazonaws.com/'.$visitUser['signature']) }}" width="85px" height="60px">
   
      @endif
     
    
   
    <br>
    
    @endforeach  --}}
    
    
     </p> 

</div>
    

    
  </body>



      

</html>
