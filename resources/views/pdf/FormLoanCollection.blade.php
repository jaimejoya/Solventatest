<!DOCTYPE html>
<html lang="es">

  <head>
    <title>{{$loanForm['data_sucursal']['client']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <meta charset="utf-8">  

  <style>

    @page { margin-top: 150;margin-bottom: 90}
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

      :root {
        --total-pages: 0;
      }

      ol { font-family: Arial, Helvetica, sans-serif; counter-reset: item; font-size: 14px; margin-top: -25px; }
        ol li{ display: block }
        ol li:before { content: counters(item, ".") " "; counter-increment: item }

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

      body {
        counter-reset: page-counter 0;
      }

      .page::before {
        counter-increment: page-counter 1;
        content: "Página " counter(page-counter);
      }

      footer {
        position: fixed;
        top: 820px;
        display: inline-block;
        width:100%     
      }
    
      .a1{
        color:black;
        top: 40px;
        margin-top:35px;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
        font-size: 15px;
      }

      .title{
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;
      }

      .letter{
        font-family: 'Arial, Helvetica, sans-serif';
      }

      .letter-size {
        font-size: 17px;
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
          background-image: url({$report_generate['information_maintenance']['bullet_point']['image']});
          background-repeat: no-repeat;
          background-position: left center;
          background-size: 15px;
          margin: 0;
          padding: 3px 0px 10px 25px;
          list-style: none;
      }
      
      .img{

        width: 120px;
        height: 140px;
        border: 2px 
        solid #DF7401;
        margin-left: 20px;
        margin-top:8px;
      }

      .footer-title{
          text-align: center;
          //display: inline-grid;
          width:100%;
          margin-top:0px;
          
      }
     

  </style>

  <body style="font-family: Arial, Helvetica, sans-serif;font-size:12px">

    
    <!-- HEADER -->

        <header>
            <table class="table" style="max-width: 1200px; width: 100%; background: white;page-break-before:auto;">
                <tr>
                    <th class="tg-s6z2"> 
                        <img src="{{$loanForm['information']['logo']}}" width="100px">
                    </th>
                    @if($loanForm['form_extinguisher']['title']['status'])
                      <th class="tg-hgcj">
                          <span style='font-size: 13px; text-transform: uppercase;'><br>{{$loanForm['form_extinguisher']['title']['description']}}</span>
                      </th>
                    @endif
                    <th>
                      <span style='font-size: 13px; text-transform: uppercase;'><br>{{$loanForm['consecutive']}}</span>
                    </th>
                </tr>            
            </table>
            <br>
            <br>
        </header>

      
    <!-- END HEADER -->

    <!-- BODY -->
    
    <div class="title" style="margin-top:-50px">
      
      <table class="table">

        <tr>
          <th>
            <b>FECHA:</b> &nbsp;&nbsp; {{$loanForm['date_pickup']}}
          </th>
          <th>
            <b>DIRECCIÓN:</b> &nbsp;&nbsp; {{$loanForm['data_sucursal']['address']}}
          </th>
          <th>
            <b>CLIENTE:</b> &nbsp;&nbsp; {{$loanForm['data_sucursal']['client']}}
          </th>
        </tr>

        <tr>
          <th>
            <b>TELEFONO:</b> &nbsp;&nbsp; {{$loanForm['data_sucursal']['phone']}}
          </th>
          <th>
            <b>RESPONSABLE:</b> &nbsp;&nbsp; {{$loanForm['data_sucursal']['responsible']}}
          </th>
          <th>
            <b>CANT. EXTINTORES:</b> &nbsp;&nbsp; {{$loanForm['data_sucursal']['quantityExtinguisherPickup']}}
          </th>
        </tr>

      </table>

      <br>

      <table class="table">

        <tr>
          <th colspan="3">EN PRÉSTAMO</th>
        </tr>

        <tr align="center">
          <th>
            <b>CLASE-TIPO</b>
          </th>
          <th>
            <b>CAPACIDAD</b>
          </th>
          <th>
            <b>CANT.</b>
          </th>
        </tr>

        @foreach ($loanForm['lend_lease'] as $LendLease)
          <tr align="center">
            <td>{{$LendLease['subsystem_id']}}</td>
            <td>{{$LendLease['capacity']}}</td>
            <td>{{$LendLease['equipments']}}</td>
          </tr>    
        @endforeach

      </table>

      <br>

      <table class="table">

        <tr>
          <th colspan="3">RECOGIDA</th>
        </tr>

        <tr align="center">
          <th>
            <b>CLASE-TIPO</b>
          </th>
          <th>
            <b>CAPACIDAD</b>
          </th>
          <th>
            <b>CANT.</b>
          </th>
        </tr>

        @foreach ($loanForm['pickup_equipments'] as $pickupEquipment)
          <tr align="center">
            <td>{{$pickupEquipment['subsystem_id']}}</td>
            <td>{{$pickupEquipment['capacity']}}</td>
            <td>{{count($pickupEquipment['equipments'])}}</td>
          </tr>    
        @endforeach

      </table>

      <br>

      <table class="table">
        <tr align="center">
          @if($loanForm['information_note'] != null)
            <td><b>OBSERVACIONES:</b>&nbsp;&nbsp;{{$loanForm['information_note']}}</td>
            @else
            <td><b>OBSERVACIONES:</b></td>
          @endif
        </tr>
      </table>

      <br>

      <table class="table">
        <tr>
          @if($loanForm['form_extinguisher']['note']['status'])
            <th>
              <b>NOTA:</b>&nbsp;&nbsp;{{$loanForm['form_extinguisher']['note']['description']}}
            </th>
          @endif
          <th>
            <b>FECHA DE DEVOLUCIÓN</b>&nbsp;&nbsp;{{$loanForm['date_return']}}
          </th>
        </tr>
      </table>

      <br>
     
      <table class="table">
     
        <tr>
          <th><b>AUTORIZA SALIDA DE LOS EQUIPOS</b></th>
        </tr>
        <tr>
          <th><b>Nombre:</b>&nbsp; {{$loanForm['data_approve_pickup']['name']}}</th>
        </tr>
        <tr>
          <th><b>Identifiación:</b>&nbsp; {{$loanForm['data_approve_pickup']['identification']}}</th>
        </tr>
        <tr>
          <th><b>Cargo:</b>&nbsp; {{$loanForm['data_approve_pickup']['charge']}}</th>
        </tr>
        @if(!empty($loanForm['data_approve_pickup']['email']))
        <tr>
          <th><b>Email:</b>&nbsp; {{$loanForm['data_approve_pickup']['email']}}</th>
        </tr>
        @endif
        @if(!empty($loanForm['data_approve_pickup']['mobile']))
        <tr>
          <th><b>Telefono:</b>&nbsp; {{$loanForm['data_approve_pickup']['mobile']}}</th>
        </tr>
        @endif
        <tr>
          <th>
            <br><br>
            <b>Firma:</b>&nbsp; <img src="https://ipm-visits.s3.amazonaws.com/{{$loanForm['data_approve_pickup']['signature']}}" alt="" width="100px" height="80px">
            <br><br>
          </th>
        </tr>
          </th>
        </tr>
                         
      </table>
      

      <br>

      <table class="table">
        <tr>
          <th><b>RECIBE LOS EQUIPOS</b></th>
        </tr>
        <tr>
          <th><b>Nombre:</b>&nbsp; {{$loanForm['data_receive_pickup']['name']}}</th>
        </tr>
        <tr>
          <th><b>Identifiación:</b>&nbsp; {{$loanForm['data_receive_pickup']['identification']}}</th>
        </tr>
        <tr>
          <th><b>Cargo:</b>&nbsp; {{$loanForm['data_receive_pickup']['charge']}}</th>
        </tr>
        <tr>
          <th>
            <br><br>
            <b>Firma:</b>&nbsp; <img src="https://ipm-visits.s3.amazonaws.com/{{$loanForm['data_receive_pickup']['signature']}}" alt="" width="100px" height="80px">
            <br><br>
          </th>
        </tr>
      </table>

    </div>
    

  <!-- END BODY -->

    <!-- FOOTER -->

      <footer>

        @if($loanForm['form_extinguisher']['footer']['status'])
          <table class="table">
            <tr>
              <th>
                <p>
                  {{$loanForm['form_extinguisher']['footer']['description']}}
                </p>
              </th>
            </tr>
          </table>
        @endif


        {{-- @if(!empty($loanForm['information']['certification']))
            <img src="{{$loanForm['information']['certification']}}" alt="" width="100" height="100" align="right" style="margin-top:830px;margin-right:-30px;" >
        @endif --}}
        
      </footer>

    <!--- END FOOTER ---->

    

    

    

  </body>

</html>
