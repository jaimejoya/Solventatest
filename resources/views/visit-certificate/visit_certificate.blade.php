<!DOCTYPE html>
<html>

  <head>
    <title>{{$visit_certificate['nameSucursal']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


  <meta charset="utf-8"> 
  <style>
    @page { margin-bottom: 0px; margin-top: 168px; margin-left: 50px;margin-right: 50px; }
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

        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px;border-radius:35px;">
          <tr>
            
            @if(!empty($visit_certificate['partner']['logo']))
              <th class="tg-s6z2" width="20%" rowspan="4" style="margin-top:10px">
                <br>
                <br>
                <span>                
                  <img src="{{$visit_certificate['partner']['logo']}}" width="65%" height="110%">
                </span>
              </th>
            @endif

            @if($visit_certificate['partner']['visit_certificate']['title']['status'] == true)
              <th class="tg-hgcj" colspan="8" rowspan="4" style="border-radius:12px">
                @if($visit_certificate['partner']['statusCertification'] == true)
                  <img src="{{$visit_certificate['partner']['certification']}}" alt="" width="60" height="60" align="right" >
                  <br><br>
                  <br>
                @endif
                <span style='font-size: 15px;margin-left:40px'>{{$visit_certificate['partner']['visit_certificate']['title']['description']}}</span>
                <br><br>
                <label style='color:red'>{{$visit_certificate['consecutive']}} </label>
              </th>
            @endif
            @if($visit_certificate['partner']['visit_certificate']['code_quality']['status'] == true)
              <th class="tg-amwm" colspan="2"><span>{{$visit_certificate['partner']['visit_certificate']['code_quality']['description']}}</span></th>
              @else
              <th class="tg-amwm" colspan="2"></th>
            @endif
          </tr>
          <tr>
            @if($visit_certificate['partner']['visit_certificate']['format_version']['status'] == true)
              <td class="tg-amwm" colspan="2"><span>{{$visit_certificate['partner']['visit_certificate']['format_version']['description']}}</span></td>
              @else                
              <th class="tg-amwm" colspan="2"></th>
            @endif
          </tr>
            <tr>                
              <td class="tg-amwm" colspan="2" ><strong>Página 1 de 1</strong></td>                
            </tr>
          <tr>
            @if($visit_certificate['partner']['visit_certificate']['format_date']['status'] == true)
              <td class="tg-amwm" colspan="2"><span>{{$visit_certificate['partner']['visit_certificate']['format_date']['description']}}</span></td>
              @else
              <th class="tg-amwm" colspan="2"></th>
            @endif
          </tr>

      </table>
      
      </header>  
    <!-- END HEADER -->

      
      

      <div style="margin-top:-5px">

        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px;font-size:12px">
          <tr>
            <th><b>DD</b></th>
            <th><b>MM</b></th>
            <th><b>AA</b></th>
            <th><b>CIUDAD</b></th>            
            <th><b>SEDE</b></th>            
            <th><b>CLIENTE</b></th>
          </tr>
          <tr style="text-align:center;">
                            
            <td>{{ $visit_certificate['day'] }}</td>                                    
            <td>{{ $visit_certificate['month'] }}</td>                                    
            <td>{{ $visit_certificate['year'] }}</td>                                    
            <td>{{ $visit_certificate['data_sucursal']['city'] }}</td>            
            <td>{{ $visit_certificate['data_sucursal']['sucursal'] }}</td>
            <td>{{ $visit_certificate['data_sucursal']['client'] }}</td>
                  
          </tr>
        </table>
                
        
        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px;font-size:12px;margin-top:20px">
          <tr style="text-align:left;">                        
            <th width="300px" style="text-align:left;"><b>DIRECCIÓN SEDE :</b></th>            
            <th style="text-align:left;">{{ $visit_certificate['data_sucursal']['address'] }}</th>                              
          </tr>   
          <tr style="text-align:left;">                                    
            <th width="300px" style="text-align:left;"><b>NOMBRES TECNICOS :</b></th>
            <th style="text-align:left;">              
              <ul>
                @foreach ($visit_certificate['user_technical'] as $user)
                    <li>{{$user}}</li>                    
                @endforeach
              </ul>            
            </th>
          </tr>         
        </table>
      
        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px;margin-top:20px">
          <tr>
            <th style="background-color:#f8dec3;text-align:left" colspan="6"><b>ESTADO INICIAL SISTEMA DE PROTECCIÓN CONTRA INCENDIOS</b></th>
          </tr>
          <tr>
            @if(count($visit_certificate['visit_data']))
              <td  colspan="6">{{ $visit_certificate['visit_data'][0]['status_start'] }}</td>              
            @endif
          
          </tr>

          <tr>
            
            <th style="background-color:#f8dec3;text-align:left"  colspan="6"><b>DESCRIPCIÓN ACTIVIDADES DESARROLLADAS</b></th>
          </tr>
          <tr>
            
            <td  colspan="6">
              @foreach ($visit_certificate['data_system'] as $system)
                <ul>
                  <li>
                     @if(!empty($system['name']))
                    <b>{{ $system['name'] }}</b>:&nbsp;
                    @else
                    <b>{{ $system['name_system'] }}</b>:&nbsp;
                    @endif                    

                    @if (isset($system['activities']) && count($system['activities']) > 0)
                       @foreach ($system['activities'] as $activity)

                                                
                          {{-- INSPECTION --}}

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'daily')
                            <label>Inspección</label> &nbsp; <label>Diario</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'weekly')
                            <label>Inspección</label> &nbsp; <label>Semanal</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'monthly')
                            <label>Inspección</label> &nbsp; <label>Mensual</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'bimonthly')
                            <label>Inspección</label> &nbsp; <label>Bimensual</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'quarterly')
                            <label>Inspección</label> &nbsp; <label>Trimestral</label>
                          @endif
                          
                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'fourthly_months')
                            <label>Inspección</label> &nbsp; <label>Cuatrimestral</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'biannual')
                            <label>Inspección</label> &nbsp; <label>Semestral</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'annual')
                            <label>Inspección</label> &nbsp; <label>Anual</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'two_years')
                            <label>Inspección</label> &nbsp; <label>Dos Años</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'triennial')
                            <label>Inspección</label> &nbsp; <label>Tres Años</label>
                          @endif

                          @if($activity['type'] == 'inspection' && $activity['frequency'] == 'five_years')
                            <label>Inspección</label> &nbsp; <label>Cinco Años</label>
                          @endif

                          {{-- TESTING --}}

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'daily')
                            <label>Prueba</label> &nbsp; <label>Diario</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'weekly')
                            <label>Prueba</label> &nbsp; <label>Semanal</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'monthly')
                            <label>Prueba</label> &nbsp; <label>Mensual</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'bimonthly')
                            <label>Prueba</label> &nbsp; <label>Bimensual</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'quarterly')
                            <label>Prueba</label> &nbsp; <label>Trimestral</label>
                          @endif
                          
                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'fourthly_months')
                            <label>Prueba</label> &nbsp; <label>Cuatrimestral</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'biannual')
                            <label>Prueba</label> &nbsp; <label>Semestral</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'annual')
                            <label>Prueba</label> &nbsp; <label>Anual</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'two_years')
                            <label>Prueba</label> &nbsp; <label>Dos Años</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'triennial')
                            <label>Prueba</label> &nbsp; <label>Tres Años</label>
                          @endif

                          @if($activity['type'] == 'testing' && $activity['frequency'] == 'five_years')
                            <label>Prueba</label> &nbsp; <label>Cinco Años</label>
                          @endif

                          {{-- MAINTENANCE --}}

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'daily')
                            <label>Mantenimiento</label> &nbsp; <label>Diario</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'weekly')
                            <label>Mantenimiento</label> &nbsp; <label>Semanal</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'monthly')
                            <label>Mantenimiento</label> &nbsp; <label>Mensual</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'bimonthly')
                            <label>Mantenimiento</label> &nbsp; <label>Bimensual</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'quarterly')
                            <label>Mantenimiento</label> &nbsp; <label>Trimestral</label>
                          @endif
                          
                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'fourthly_months')
                            <label>Mantenimiento</label> &nbsp; <label>Cuatrimestral</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'biannual')
                            <label>Mantenimiento</label> &nbsp; <label>Semestral</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'annual')
                            <label>Mantenimiento</label> &nbsp; <label>Anual</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'two_years')
                            <label>Mantenimiento</label> &nbsp; <label>Dos Años</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'triennial')
                            <label>Mantenimiento</label> &nbsp; <label>Tres Años</label>
                          @endif

                          @if($activity['type'] == 'maintenance' && $activity['frequency'] == 'five_years')
                            <label>Mantenimiento</label> &nbsp; <label>Cinco Años</label>
                          @endif
                        
                      @endforeach 

                    @else

                      @if(!empty($system['types']) && count($system['types']) > 0)
                        @foreach ($system['types'] as $type)
                          @if ($type == 'inspection')
                              <label>Inspección</label>,&nbsp;
                            @elseif($type == 'testing')
                              <label>Prueba</label>,&nbsp;
                            @elseif($type == 'maintenance')
                              <label>Mantenimiento</label>,&nbsp;
                          @endif
                        @endforeach
                      @endif

                      @if(!empty($system['frequencys']) && count($system['frequencys']) > 0)
                        @foreach ($system['frequencys'] as $type)
                          @if ($type == 'weekly')
                            <label>Semanal</label>,&nbsp;
                          @endif
                          @if($type == 'monthly')
                            <label>Mensual</label>,&nbsp;
                          @endif
                          @if($type == 'bimonthly')
                            <label>Bi Mensual</label>,&nbsp;
                          @endif
                          @if($type == 'quarterly')
                            <label>Trimestral</label>,&nbsp;
                          @endif
                          @if($type == 'biannual')
                            <label>Semestral</label>,&nbsp;
                          @endif
                          @if($type == 'annual')
                            <label>Anual</label>,&nbsp;
                          @endif
                        @endforeach
                      @endif
                    @endif
                  </li>
                </ul>
              @endforeach
            </td>
          </tr>
          <tr>
            <th style="background-color:#f8dec3;text-align:left"  colspan="6"><b>CONDICIONES FINALES DE ENTREGA</b></th>
          </tr>
          <tr>

            @if(count($visit_certificate['visit_data']))
              <td  colspan="6">{{ $visit_certificate['visit_data'][0]['status_end'] }}</td>
            @endif            
          </tr>
          <tr>
            <th style="background-color:#f8dec3;text-align:left"  colspan="6"><b>SUGERENCIAS Y RECOMENDACIONES</b></th>
          </tr>
          

            @if(count($visit_certificate['visit_data']))

              @if(count($visit_certificate['visit_data'][0]['recomendations'] ) > 0)

                @foreach ($visit_certificate['visit_data'][0]['recomendations'] as $recomendation)
                <tr>
                  <td colspan="6" style="border-left: 1px solid #DF7401">
                    
                      @if (!empty($recomendation['description']))                      
                      <div style="font-size:12px;">
                        <b>Descripción:</b> &nbsp; <label for="">{{$recomendation['description']}}</label>
                      </div>
                      @else
                      <div style="font-size:12px;">
                        <b>Descripción:</b> &nbsp; <label for="">{{$recomendation}}</label>
                      </div
                      @endif
                      @if (!empty($recomendation['subsystem']) && !empty($recomendation['equipment']))                      
                        <div style="font-size:12px;">
                          <b>Subsistema:</b> &nbsp; <label for="">{{$recomendation['subsystem']}}</label>
                        </div>                          
                        <div style="font-size:12px;">
                          <b>Equipo:</b> &nbsp; <label for="">{{$recomendation['equipment']}}</label>
                        </div>
                      @endif
                    </td>                      
                  @endforeach                                       
                </tr>
              @endif
                
            @else

              @if(count($visit_certificate['visit_data']['recomendations'] ) > 0)
                @foreach ($visit_certificate['visit_data']['recomendations'] as $recomendation)
                  <tr>
                    <td>{{ $recomendation}}</td>
                  </tr>
                @endforeach
              @endif

            @endif                                    
          
          <tr>
            <th style="background-color:#f8dec3;text-align:left"  colspan="6"><b>CORRECTIVOS REALIZADOS</b></th>
          </tr>
          @if(count($visit_certificate['visit_data']))
            @if(!empty($visit_certificate['visit_data'][0]['correctives']) && count($visit_certificate['visit_data'][0]['correctives'] ) > 0)
              <tr>
                <td colspan="6">
                  <ul>                  
                    @foreach ($visit_certificate['visit_data'][0]['correctives'] as $corretive)
                      <li>{{ $corretive}}</li>
                    @endforeach                  
                  </ul>
                </td>
              </tr>
            @endif
          @else

            @if(!empty($visit_certificate['visit_data']['correctives']) && count($visit_certificate['visit_data']['correctives'] ) > 0)
              <tr>
                <td colspan="6">
                  <ul>                  
                    @foreach ($visit_certificate['visit_data']['correctives'] as $corretive)
                      <li>{{ $corretive['description']}}</li>
                    @endforeach                  
                  </ul>
                </td>
              </tr>
            @endif

          @endif
          <tr>
            <td colspan="3">
              <b>HORA INICIO ACTIVIDADES:</b>
              @if(count($visit_certificate['visit_data']))
                <label>{{ $visit_certificate['visit_data'][0]['time_start']}}</label>              
              @endif
            </td>

            <td colspan="3">
              <b>HORA FINAL ACTIVIDADES:</b>
              @if(count($visit_certificate['visit_data']))
                <label>{{ $visit_certificate['visit_data'][0]['time_end']}}</label>              
              @endif              
            </td>
          </tr>
        </table>
        
        <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px;margin-top:10px">
          <tr>
            <th style="background-color:#f8dec3;text-align:center" width="300px">
              <b>FIRMA FUNCIONARIO CLIENTE</b>
            </th>
            <th style="background-color:#f8dec3;text-align:center" width="300px">
              <b>FIRMA FUNCIONARIO QUE REALIZA MANTENIMIENTO</b>
            </th>
          </tr>

          <tr>
            @if(count($visit_certificate['visit_data']))
            <td><b>NOMBRE:</b><label>&nbsp;{{ $visit_certificate['visit_data'][0]['name_client'] }}</label></td>            
            @endif
            <td><b>NOMBRE:</b><label>&nbsp;{{ $visit_certificate['user_visit']['name'] }}</label></td>
            
          </tr>

          <tr>
            @if(count($visit_certificate['visit_data']))
            <td><b>CEDULA:</b><label>&nbsp;{{ $visit_certificate['visit_data'][0]['identification_client'] }}</label></td>
            @endif
            <td><b>CEDULA:</b><label>&nbsp;{{ $visit_certificate['user_visit']['identification'] }}</label></td>
          </tr>

          <tr>
            @if(count($visit_certificate['visit_data']))            
            <td><b>EMAIL:</b><label>&nbsp;{{ $visit_certificate['visit_data'][0]['email_client'] }}</label></td>
            @endif
            <td><b>EMAIL:</b><label>&nbsp;{{ $visit_certificate['user_visit']['email'] }}</label></td>
          </tr>

          <tr>
            <td>
              <b>CELULAR:</b>    
              @if(count($visit_certificate['visit_data']))        
                @if (!empty($visit_certificate['visit_data'][0]['phone_client']))
                  <label>&nbsp;{{ $visit_certificate['visit_data'][0]['phone_client'] }}</label>
                @endif               
              @endif
            </td>
            <td><b>CELULAR:</b><label>&nbsp;{{ $visit_certificate['user_visit']['phone'] }}</label></td>
          </tr>

          <tr>
            @if(count($visit_certificate['visit_data']))
            <td><b>CARGO:</b><label>&nbsp;{{ $visit_certificate['visit_data'][0]['charge_client'] }}</label></td>
            @endif
            <td><b>CARGO:</b><label>&nbsp;{{ $visit_certificate['user_visit']['charge'] }}</label></td>
          </tr>
          

          <tr>
            <td>
              <b>FIRMA:</b>
              <br>
              <br>
              <img src="https://s3.amazonaws.com/ipm-visits/{{$visit_certificate['signature']}}" width="100px"  max-width="100px">
            </td> 
            <td>
              <b>FIRMA:</b>
              <br>
              <br>
              <img src="{{$visit_certificate['user_visit']['signature']}}" width="100px"  max-width="100px">
            </td>
          </tr>
                   
        </table>

        @if($visit_certificate['partner']['visit_certificate']['footer']['status'] == true)
        
          <table class="tg" style="max-width: 1200px; width: 100%; background: white; margin-right: 25px;margin-top:20px">
            <tr>
              <td style="text-align: center"><b>{{$visit_certificate['partner']['visit_certificate']['footer']['description']}}</b></td>
            </tr>
          </table>
         
        @endif
               
      </div>

    
  </body>


</html>
