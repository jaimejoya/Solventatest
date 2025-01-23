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
               
               <br> <img src="http://interfire.co/wp-content/uploads/2019/11/logo.png" width="100px">
              </span></th>
              <th class="tg-hgcj" colspan="8" rowspan="4"><span style='font-size: 13px;'>INSPECCION BOTIQUIN</label> </th>
              <th class="tg-amwm" colspan="2"><span>F-SGI-08</span></th>
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
     
      <th class="soul"><b>RESPONSABLE</b></th>
  </tr>


  
      <tr style="text-align: center; font-size:5px;">
        
         
          <td width="100px">{{$firstAidKit['expeditionDate']}}</td>
          <td width="100px"> {{$user["name_user"]}} </td>
      </tr>
  


</table>
   

<br>
<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; " >

  <tr>
    <th class="soul">N°</th>
    <th class="soul">DESCRIPCION</th>

    <th class="soul">UNIDADES</th>
    <th class="soul">CANTIDAD</th>
    <th class="soul">CUMPLE</th>
    <th class="soul">OBSERVACIONES</th>
  </tr>
@foreach ($question as $key =>$item)
{{$key++}}
  <tr>
    <td>{{$key}} </td>
    <td>Gasa Limpias paquete</td>

    <td> 
      
    
      {{$item["units"]}}
     
    </td>

    <td> 
      
    
      {{$item["quantity"]}}
     
    </td>
    <td> 
      
    
      {{$item["comply"]}}
     
    </td>
    <td> 
      
    
      {{$item["observation"]}}
     
    </td>


  </tr>
  @endforeach
  
 
</table>


<br>
<table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-left:32px;margin-right: 25px; ">

  <tr>

      <th class="soul"><b>OBSERVACIONES</b></th>
     
     
  </tr>


  
      <tr style="text-align: center; font-size:5px;">
        
         
          <td width="100px">{{$firstAidKit['observation']}}</td>
         
      </tr>
  


</table>


<br>
<div style="font-size:10px; float: left; margin-left:50px;">
  <p> 


  
     
     

      @if ($user["status"]==true)
     
       Nombre:{{$user["name_user"]}} <br><br>
       firma:  <img src="{{ asset('https://ipm-visits.s3.amazonaws.com/'.$user["signature"]) }}" width="85px" height="60px">
   
      @endif
     
    
   
    <br>
    
 
    
    
     </p> 

</div>
    

    
  </body>



      

</html>
