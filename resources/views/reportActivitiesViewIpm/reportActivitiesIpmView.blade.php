<!DOCTYPE html>
<html lang="es">

  <head>
    <title>{{$information['sucursal']['name']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <meta charset="utf-8">
  

  <style>
    @page { margin-top: 150;margin-bottom: 90}
      .tg  {border-collapse:collapse;border-spacing:8;}
      .tg td{font-family:Arial, sans-serif;font-size:8px;padding:2px 15px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#DF7401;}
      .tg th{font-family:Arial, sans-serif;font-size:8px;font-weight:normal;padding:2px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#DF7401;}
      .tg .tg-s6z2{text-align:center}
      .tg .tg-baqh{text-align:center;vertical-align:top}
      .tg .tg-lqy6{text-align:right;vertical-align:top}
      .tg .tg-hgcj{font-weight:bold;text-align:center}
      .tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:middle}
      .tg .tg-yw4l{vertical-align:top}
      .tg .tg-ssyz{font-weight:bold;background-color:#ffce93;color:#000000;text-align:center;vertical-align:top}
      .tg .tg-9hbo{font-weight:bold;vertical-align:top}
      .tg .tg-5qfb{font-weight:bold;background-color:#ffce93;text-align:center;vertical-align:top}
      .tg table{text-transform: uppercase;font-size:20px}
        
      table, td, th {
        border: 1px solid #DF7401;
        page-break-inside: always;
        border-collapse: collapse;
        font-size: 10px;   
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
            margin-bottom: 50px
      }

      footer {

        position: fixed;
        top: 0;
        bottom: 35px;
        left: 0px;
        right: 0px;

      }

      .text {
        font-family:Arial, sans-serif
      }


  </style>

  <body style="font-family:'Times New Roman', Times, serif">

    
    <!-- HEADER -->
    <header>

        <table class="tg" style="max-width: 1200px; width: 100%; background: white;margin-right:55px">

          <tr>
            @if($information['logo'] != '')
                <th class="tg-s6z2" rowspan="4"><img src="{{$information['logo']}}" width="100px" height="80px"></th>
                @else
                <th></th>
            @endif

            @if($information['partnerInformationMaintenance']['title']['status'])
                <th class="tg-amwm"  rowspan="4" style="width:50%;"><span style='font-size: 13px;text-transform:uppercase'>REPORTE DE ACTIVIDADES DE {{count($information['equipments'])}}  EQUIPOS <br> DE {{$information['sucursal']['company_name']}} {{$information['sucursal']['name']}}</label> </th>
                @if(!empty($information['sucursal']['logo']) && $information['sucursal']['logo'] != '')
                  <th class="tg-amwm" rowspan="4"><img src="{{$information['sucursal']['logo']}}" alt="" width="80px"></th>
                  @else
                  <th class="tg-amwm" rowspan="4"></th>
                @endif
                @else
                <th class="tg-amwm" rowspan="4" style="width:50%;"><span style='width:40%;font-size: 13px;text-transform:uppercase'>REPORTE DE ACTIVIDADES DE {{count($information['equipments'])}}  EQUIPOS <br> DE {{$information['sucursal']['company_name']}} {{$information['sucursal']['name']}}</label> </th>
                  @if(!empty($information['sucursal']['logo']) && $information['sucursal']['logo'] != '')
                    <th class="tg-amwm" rowspan="4"><img src="{{$information['sucursal']['logo']}}" alt="" width="80px"></th>
                  @else
                    <th class="tg-amwm" rowspan="4"></th>
                  @endif
            @endif
            <th class="tg-amwm" colspan="2">Página<div class="pagenum"></th>
          </tr>

          @if($information['partnerInformationMaintenance']['format_version']['status'])
            <tr>
              <td class="tg-amwm" colspan="2"><span style="margin-top:7px">{{$information['partnerInformationMaintenance']['format_version']['description']}}</span></td>
            </tr>
            @else
            <tr>
                <td class="tg-amwm" colspan="2"></td>
            </tr>
          @endif

          @if($information['partnerInformationMaintenance']['code_quality']['status'])
            <tr>              
              <td class="tg-amwm" colspan="2"><span>{{$information['partnerInformationMaintenance']['code_quality']['description']}}</span></td>
            </tr>
            @else
            <tr>
                <td class="tg-amwm" colspan="2"></td>
            </tr>
          @endif            

          @if($information['partnerInformationMaintenance']['format_date']['status'])
            <tr>
              <td class="tg-amwm" colspan="2"><span>{{$information['partnerInformationMaintenance']['format_date']['description']}}</span></td>
            </tr>
            @else
            <tr>
                <td class="tg-amwm" colspan="2"></td>
            </tr>
          @endif

        </table>

      </header>
      
    <!-- END HEADER -->

    <!-- FOOTER -->

      @if(!empty($information['certification']))

        <footer>
          <img src="{{$information['certification']}}" alt="" width="100" height="100" align="right" style="margin-top:815px;" >
        </footer>

      @endif

    <!--- END FOOTER ---->
    <main>
        <div class="card-body" style="margin-top:30px">

            <div class="row">

                <table style="width:100%; font-size: 20px">
                    <tr>
                        @foreach ($information['usersReport'] as $user)                                    
                                        
                            <td class="text" align="left" style="width:50%">  

                                <div class="col">
                                    <div class="row">
                                        <b>Mantenimiento Realizado por: </b>
                                    </div>                   
                                    <div class="row">
                                        <b style="text-transform: uppercase">{{$user['name']}}</b>
                                    </div>
                                    <div class="row">
                                        <b style="text-transform: uppercase">{{$user['charge']}}</b>
                                    </div>  
                                </div> 
                                                          
                            </td>

                            <td align="center">
                                <div class="col">
                                    <div class="row">
                                        <img src="{{$user['signature']}}" alt="" width="70px">
                                    </div>
                                </div> 
                            </td>
                            
                        @endforeach
                    </tr>
                </table>
                <br><br>
                @foreach ($information['equipments'] as $equipment)
                                        
                    @foreach ($equipment['reports'] as $report)    

                        <table style="page-break-before: auto; width:100%">
                            
                            <tr>
                                <th class="text" colspan="3"><b>EQUIPO <label for="" style="text-transform: uppercase">{{$equipment['name']}}</label></b></th>
                            </tr> 

                            <tr>
                                <th class="text" colspan="3" align="left">
                                    <b style="text-transform: uppercase">
                                        {{$information['system']['name']}} - {{$information['subsystem']['name']}}
                                    </b>
                                </th>
                            </tr>

                            <tr>
                                <th class="text" colspan="3" align="left">
                                    <b>
                                        <label for="" style="text-transform: uppercase;">{{$report['type']}} <label for="" style="text-transform: uppercase">{{$report['frequency']}}</label>                                        
                                        
                                    </b>
                                </th>
                            </tr>                                                                                 
                            
                            <tr>
                                <th class="text"><b>Descripción de la Actividad</b></th>
                                <th class="text"><b>Dato</b></th>
                                <th class="text"><b>Imagen</b></th>
                            </tr>

                            @foreach ($report['data'] as $item)
                                <tr>
                                    <td class="text" align="center"><b>{{$item['name']}}</b></td>
                                    <td class="text" align="center">
                                        @if($item['dato'] == 'Conforme')
                                            <b class="text"><label for="" style="color: green">{{$item['dato']}}</label></b>
                                            @elseif($item['dato'] == 'No Conforme')
                                                <b class="text"><label for="" style="color: red">{{$item['dato']}}</label></b>
                                            @else
                                                <b class="text"><label for="">{{$item['dato']}}</label></b>
                                        @endif
                                    </td>
                                    @if($item['evidence']['show'])
                                        <td align="center"><img src="https://s3.amazonaws.com/ipm-visits/{{$item['evidence']['url']}}" alt="" width="60px"></td>
                                        @else
                                        <td></td>
                                    @endif
                                </tr>    
                            @endforeach
                        </table>
                        <br>
                    @endforeach                     
                    
                @endforeach

            </div>

        </div>

    </main>       

  </body>

</html>