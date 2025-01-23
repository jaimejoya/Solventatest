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

        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:36px;margin-right: 25px; ">

          <tr>
            <th class="tg-s6z2" colspan="2" rowspan="{{$workingInHeight['count']}}"><br> <img src="{{$workingInHeight['logo']}}" width="100px"></th>
            @if($workingInHeight['heights_work']['title']['status'])
              <th class="tg-amwm" colspan="8" rowspan="{{$workingInHeight['count']}}"><span style='font-size: 13px;'>{{$workingInHeight['heights_work']['title']['description']}}</label> </th>
            @endif
            <th class="tg-amwm" colspan="2">Página 1 de 1</th>
          </tr>

          @if($workingInHeight['heights_work']['format_version']['status'])
            <tr>
              <br>
              <td class="tg-amwm" colspan="2"><span>{{$workingInHeight['heights_work']['format_version']['description']}}</span></td>
            </tr>
          @endif

          @if($workingInHeight['heights_work']['code_quality']['status'])
            <tr>              
              <td class="tg-amwm" colspan="2"><span>{{$workingInHeight['heights_work']['code_quality']['description']}}</span></td>
            </tr>
          @endif            

          @if($workingInHeight['heights_work']['format_date']['status'])
            <tr>
              <td class="tg-amwm" colspan="2"><span>{{$workingInHeight['heights_work']['format_date']['description']}}</span></td>
            </tr>
          @endif

        </table>

        <br><br>
        <br>
      </header>
  
    <!-- END HEADER -->

    <!-- FOOTER -->

      <footer>
        @if($workingInHeight['statusCertification'] == true)
          <img src="{{$workingInHeight['certification']}}" alt="" width="100" height="100" align="right" style="margin-top:830px;margin-right:-30px;" >
        @endif
      </footer>

    <!--- END FOOTER ---->
    
   
    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

      <tr>
        <th class="soul"><b>FECHA DE EXPEDICION</b></th>        
        <th class="soul"><b>PROYECTO/EMPRESA</b></th>
      </tr>

      <tr style="text-align: center; font-size:5px;">            
        <td width="100px">{{$workingInHeight['expeditionDate']['value']}}</td>
        <td width="100px">{{$workingInHeight["nameCompany"]}} &nbsp; {{$workingInHeight["nameSucursals"]}}</td>
      </tr>

    </table>

    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

      <tr>
        <th class="soul"><b>VALIDO DESDE LAS </b></th>
        <th class="soul"><b>HASTA LAS </b></th>      
      </tr>
      
      <tr style="text-align: center">
        <td width="100px">{{$workingInHeight['validDate']}}</td>
        <td width="100px">{{$workingInHeight['untilDate']}}</td>
      </tr>

    </table>
    
    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

      <tr>    
        <th class="soul"><b>AREA/LUGAR </b></th>  
      </tr>

      <tr style="text-align: center">
        <td width="100px">{{$workingInHeight['Headboard']['place']["value"]}}</td>         
      </tr>

    </table>


    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

      <tr>
        <th class="soul"><b>DESCRIPCION DEL TRABAJO A REALIZAR </b></th>
        <th class="soul"><b>LISTADO DE MAQUINARIA, EQUIPOS Y HERRAMIENTAS A UTILIZAR </b></th>
      </tr>

      <tr style="text-align: center">        
          <td width="100px">{{$workingInHeight["DescriptionJob"]["value"]}}</td>
          <td width="100px">{{$workingInHeight["equipmentJob"]["value"]}}</td>
      </tr>

    </table>

    <br>

    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; " >

      <tr>
        <th class="soul">N°</th>
        <th class="soul">PREGUNTA</th>
        <th class="soul">RESPUESTA</th>
      </tr>

      <tr>
        <td>1 </td>
        <td>¿Se han analizado las condiciones de seguridad para la ejecución del trabajo? </td>
        <td>           
          {{$question[0]["value"]}}     
        </td>
      </tr>

      <tr>
        <td>2 </td>
        <td>¿ Esta labor esta asociada con otros trabajos de alto riesgo como eléctrico, Espacios confinados u otro que requiere otro permiso de trabajo? </td>
        <td> {{$question[1]["value"]}} </td>
      </tr>

      <tr>
        <td>3 </td>
        <td>¿El área de trabajo fue inspeccionada de que no haya presencia de animales peligrosos u otro peligro asociado al trabajo y se ha señalizado y demarcado? </td>
        <td>  {{$question[2]["value"]}} </td>
      </tr>

      <tr>
        <td>4 </td>
        <td> ¿Se cuenta con los elementos de protección personal específicos para el trabajo y estos fueron inspeccionados? (Arnes, casco, eslinga, mosqueton, guantes)</td>
        <td>{{$question[3]["value"]}} </td>
      </tr>

      <tr>
        <td>5 </td>
        <td>¿Cuenta con el Sistema de detención de caidas planeado? </td>
        <td>{{$question[4]["value"]}} </td>
      </tr>

      <tr>
        <td>6</td>
        <td>¿Cuenta con un punto fijo de anclaje o elemento estructural para que sea usado como punto de fijación? </td>
        <td>{{$question[5]["value"]}} </td>
      </tr>

      <tr>
        <td>7</td>
        <td>¿Se cuenta con un anclaje portatil tipo inyección o adaptador - banda TIE-OFF o cordon de posicionamiento? </td>
        <td> {{$question[6]["value"]}}</td>   
      </tr>

      <tr>
        <td>8</td>
        <td>¿Se cuenta con: cuerda de linea de vida y arnes de cuerpo entero certificados?  Se realizo inspección previa a la labor?</td>
        <td> {{$question[7]["value"]}}  </td>
      </tr>

      <tr>
        <td>9 </td>
        <td>¿Se cuenta con eslinga, mosquetones con cierre automático y con bloqueador o freno, Estos se inpesccionaron antes de iniciar la labor?</td>
        <td>{{$question[8]["value"]}} </td>
      </tr>

      <tr>
        <td>10</td>
        <td>¿Técnicamente, el sistema de protección activa está bien montado y cumple con los requerimientos de seguridad?</td>
        <td> {{$question[9]["value"]}} </td>
      </tr>

      <tr>
        <td>11 </td>
        <td>¿Los equipos y herramientas para realizar la labor son portados de forma segura?</td>
        <td>
          {{$question[10]["value"]}}
        </td>
      </tr>

      <tr>
        <td>12 </td>
        <td>¿Se ha divulgado el ATS a todas las personas que desarrollaran la tarea?</td>
        <td>
          {{$question[11]["value"]}}
        </td>
      </tr>

      <tr>
        <td>13</td>
        <td>¿Se cuenta con un sistema de acceso para realizar el trabajo en alturas? (Escaleras, adamios, canasta para transporte de personal Etc)</td>
        <td>
          {{$question[12]["value"]}}
        </td>
      </tr>

      <tr>
        <td>14 </td>
        <td>¿Se inspecciono el sistema de acceso para realizar el trabajo en alturas?</td>
        <td>
          {{$question[13]["value"]}}
        </td>
      </tr>

      <tr>
        <td>15 </td>
        <td>¿Se cuenta con los EPP necesarios para poder utilizar los sistemas de acceso?</td>
        <td>
          {{$question[14]["value"]}}
        </td>
      </tr>

      <tr>
        <td>16 </td>
        <td>¿Cuenta con elementos de señaliación (cinta reflectiva, conos, polisombras) para asegurar el área?</td>
        <td>
          {{$question[15]["value"]}}
        </td>
      </tr>
      
      <tr>
        <td>17 </td>
        <td>¿Verificadas las condiciones de seguridad, incluyendo el clima, es indicado realizar o continuar con la ejecución del trabajo?</td>
        <td>
          {{$question[16]["value"]}}
        </td>
      </tr>

      <tr>
        <td>18 </td>
        <td>¿Esta apto el personal para ejecutar la labor libre de sustancias sicoactivas, alcohol y drogas?</td>
        <td>
          {{$question[17]["value"]}}
        </td>
      </tr>

      <tr>
        <td>19 </td>
        <td>¿Conoce el plan de evacuación de la empresa donde se ejecuta el trabajo?</td>
        <td>
          {{$question[18]["value"]}}
        </td>
      </tr>

      <tr>
        <td>20 </td>
        <td>¿Se siente en capacidad fisica y mental para ejecutar la labor?</td>
        <td>
          {{$question[19]["value"]}}
        </td>
      </tr>
    
    </table>

    <div class="page-break"></div>

    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; margin-top:3px; " >

      <tr>
        <th colspan="6" align="center"><caption style="font-size: 10px;"><b>DATOS BASICOS DE LAS PERSONAS AUTORIZADAS PARA REALIZAR EL TRABAJO</b></caption></th>
      </tr>
      
      <tr style="margin-top:20px">
        <th class="soul">NOMBRE</th>
        <th class="soul">CC</th>
        <th class="soul">ARL</th>
        <th class="soul">EPS</th>
        <th class="soul">CARGO</th>
        <th class="soul">FIRMA</th>
      </tr>

      @foreach ($workingInHeight["allUser"] as $item)    
        <tr>
          <td>{{$item["name_user"]}} </td>
          <td>{{$item["identification"]}} </td>
          <td>{{$item["arl"]}} </td>
          <td>{{$item["eps"]}} </td>
          <td>{{$item["name_role"]}} </td>

          <td>
            @if ($item["status"]===true)
            <img src="{{$item["signature"]}}" width="85px" height="60px">
            @endif
          </td>

        

        </tr>
      @endforeach
      <br>
    </table>

    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; " >
      <tr>
        <th colspan="4" align="center"><caption style="font-size: 10px;"><b>AUTORIDAD DE AREA  (Responsables en la ejecucion de la tarea)</b></caption></th>
      </tr>
      
      <tr>
        <th class="soul">NOMBRE</th>
        <th class="soul">CC</th>
        <th class="soul">CARGO</th>
        <th class="soul">FIRMA</th>
      

      </tr>
      
      <tr>
        <td>{{$workingInHeight["responsableUser"]["name_user"]}} </td>
        <td>{{$workingInHeight["responsableUser"]["identification"]}} </td>
        <td>{{$workingInHeight["responsableUser"]["name_role"]}} </td>

        <td>
          @if ($workingInHeight["responsableUser"]["status"]===true)
          <img src="{{$workingInHeight['responsableUser']['signature']}}" width="85px" height="60px">
          @endif
        </td>

      </tr>
    

      

      
    
    </table>

    <br>

    <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

      <tr>            
        <th class="soul"><b>OBSERVACIONES ADICIONALES</b></th>
      </tr>

      <tr style="text-align: center; font-size:5px;">
        <td width="100px">{{$workingInHeight["observation"]["value"]}}</td>
      </tr>

    </table>

  </body>



      

</html>
