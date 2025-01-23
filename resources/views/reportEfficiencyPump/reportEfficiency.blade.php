<!DOCTYPE html>
<html>

  <head>
    <title>{{$data['sucursal_name']}}</title>
  </head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta charset="utf-8">  

  <style>
    @page { margin: 160px 55px;}
    /* Estilos para la primera página (orientación vertical) */    
        /* Estilos para la segunda página (orientación horizontal) */
    @page :first {
      size: landscape;
    }
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
        position:fixed;
        top: -110px;
        left: 0;
        width: 100%;        
        z-index: 1000;
        margin-bottom: 20px;
      }

      footer {

        position: fixed;
        top: 0;
        bottom: 55px;
        left: 0px;
        right: 0px;

      }

      ol { padding:0;font-family: Arial, Helvetica, sans-serif; counter-reset: item; font-size: 14px; margin-top: -25px; }
      ol li{ display: block }
      ol li:before { content: counters(item, ".") " "; counter-increment: item }
      
      ul{
        padding: 0;
      }
      ul li {margin-left: 14px}

      .main-content-one-page{             
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;

      }

      .main-content{    
        margin-top:40px;     
        margin-bottom: 40px; /* Ajusta según sea necesario para dejar espacio para el footer */        
        box-sizing: border-box;
        font-family: 'Arial, Helvetica, sans-serif';
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
        margin-top:20px;
        font-family: 'Arial, Helvetica, sans-serif';
        text-align:center;
      }

      .letter{
        font-family: 'Arial, Helvetica, sans-serif';
        font-size: 17px;
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

      .img_data{
        width: 220px;
        height: 280px;
        border: 4px 
        solid #DF7401;
        margin-bottom: 10px
      }

      .img_plaquet{
        width: 480px;
        height: 230px;
        border: 4px 
        solid #DF7401;
        margin-bottom: 10px
      }

      .footer-content{
        position: fixed;
        bottom: -120px;
        right: 0;
        width: 100px; /* Ajusta el ancho según el tamaño de tu imagen */
        height: auto;        
      }

      .footer-title{
          text-align: center;
          //display: inline-grid;
          width:100%;
          margin-top:0px;
          
      }

      body {
        counter-reset: page-counter 0;               
      }

      @page :first {
        size: landscape;
      }
      
      /* MODULO DE EFICIENCIA DE BOMBAS
      Prueba Eficiencia Bombas */

  </style>


  <body class="letter">

    @foreach ($data['pages'] as $key => $page)
        
      @if($key == 0 && $page['status'])

        @foreach ($page['data']['objects'] as $keyObject =>  $object)
                              
            @if($keyObject == 0)

              <header>
                
                <table style="width: {{$page['data']['objects'][0]['width']}}%;border-collapse:collapse;border-spacing:8;">
                  @if (isset($page['data']['objects'][0]['rows']))
                    @foreach ($page['data']['objects'][0]['rows'] as $row)
                      <tr>                  
                        @if (isset($row['cols']))
                          @foreach ($row['cols'] as $col)
                              
                            @if($page['data']['objects'][0]['statusMargin'])  
                              <th style="border:1px solid {{$page['data']['objects'][0]['margin']['color']}};border-radius:{{$page['data']['objects'][0]['margin']['border']}};position:{{$col['position']}}; padding: 4px;">
                                @if($col['typeData'] == 'image' || $col['typeData'] == 'image_register')
                                  @if(!empty($col['dato']))
                                    <img src="{{$col['dato']}}" alt="" width="140px" height="100px">
                                  @endif
                                  @elseif($col['typeData'] == 'text'|| $col['typeData'] == 'text_register')
                                  @if(!empty($col['dato']))
                                    <b class="letter"  style="text-align: center">{{$col['dato']}}</b>
                                  @endif
                                @endif
                              </th>
                              @else
                              <th style="text-align:{{$col['position']}}; padding: 4px;">
                                @if($col['typeData'] == 'image' ||$col['typeData'] == 'image_register')
                                  @if(!empty($col['dato']))
                                    <img src="{{$col['dato']}}" alt="" width="140px" height="100px">
                                  @endif
                                @elseif($col['typeData'] == 'text' || $col['typeData'] == 'text_register')
                                  @if(!empty($col['dato']))
                                    <b class="letter"  style="text-align: center">{{$col['dato']}}</b>
                                  @endif
                                @endif
                              </th>
                            @endif
                            
                          @endforeach
                        @endif
                      </tr>
                    @endforeach
                  @endif

                  
                </table>

              </header>

              @elseif(!empty($object['cols']))
                <div class="main-content-one-page">

                  @if($object['statusMargin'])
                    
                    @if(count($object['cols']) > 0)
                      <table style="width:{{$object['width']}}%;margin-top:{{$object['top']}}px;">
                        <tr style="width:{{$object['width']}}%;margin-top:{{$object['top']}}px;border:1px solid {{$object['margin']['color']}};border-radius:{{$object['margin']['border']}}px">
                          @foreach ($object['cols'] as $col)
                            
                            @if($col['typeData'] == 'image' || $col['typeData'] == 'image_register' || $col['typeData'] == 'logo_sucursal')
                              <th style="text-align: {{$col['position']}};border:1px solid {{$object['margin']['color']}};border-radius:{{$object['margin']['border']}}px;width:{{$object['width']}}%; padding: 4px;">
                                @if(!empty($col['dato']))
                                  <img src="{{$col['dato']}}" alt="" width="280px" height="160px">
                                @endif
                              </th>
                            @elseif($col['typeData'] == 'text' || $col['typeData'] == 'text_register' || $col['typeData'] == 'name_client' || $col['typeData'] == 'name_sucursal' || $col['typeData'] == 'date_test' || $col['typeData'] == 'month_test' || $col['typeData'] == 'address_sucursal')
                              <th style="text-align: {{$col['position']}};border:1px solid {{$object['margin']['color']}};border-radius:{{$object['margin']['border']}}px;width:{{$object['width']}}%; padding: 4px;">
                                @if(!empty($col['dato']))
                                  <b class="letter"  style="text-align: center">{{$col['dato']}}</b>
                                @endif
                              </th>
                            @endif
                            
                          @endforeach
                        </tr>
                      </table>
                      @else
                      <table style="width:{{$object['width']}}%;margin-top:{{$object['top']}}px;">
                        <tr style="width:{{$object['width']}}%;margin-top:{{$object['top']}}px;border:1px solid {{$object['margin']['color']}};border-radius:{{$object['margin']['border']}}px">
                          @foreach ($object['cols'] as $col)
                            
                            @if($col['typeData'] == 'image' || $col['typeData'] == 'image_register' || $col['typeData'] == 'logo_sucursal' )
                              <th style="text-align: {{$col['position']}};width:{{$object['width']}}%;">
                                @if(!empty($col['dato']))
                                  <img src="{{$col['dato']}}" alt="" width="280px" height="160px">
                                @endif
                              </th>
                              @elseif($col['typeData'] == 'text' || $col['typeData'] == 'text_register' || $col['typeData'] == 'name_client' || $col['typeData'] == 'name_sucursal' || $col['typeData'] == 'date_test' || $col['typeData'] == 'month_test' || $col['typeData'] == 'address_sucursal')
                              <th style="text-align: {{$col['position']}};width:{{$object['width']}}%">
                                @if(!empty($col['dato']))
                                  <b class="letter"  style="text-align: center">{{$col['dato']}}</b>
                                @endif
                              </th>
                            @endif
                            
                          @endforeach
                        </tr>
                      </table>
                    @endif                    

                  @else

                    <table style="width:{{$object['width']}}%;margin-top:{{$object['top']}}px;">

                      <tr style="width:{{$object['width']}}%;margin-top:{{$object['top']}}px;">
                        @foreach ($object['cols'] as $col)
                          
                          @if($col['typeData'] == 'image' || $col['typeData'] == 'image_register' || $col['typeData'] == 'logo_sucursal' )
                            <th style="text-align: {{$col['position']}};width:{{$object['width']}}%">
                              @if(!empty($col['dato']))
                                <img src="{{$col['dato']}}" alt="" width="280px" height="160px">
                              @endif
                            </th>
                            @elseif($col['typeData'] == 'text' || $col['typeData'] == 'text_register' || $col['typeData'] == 'name_client' || $col['typeData'] == 'name_sucursal' || $col['typeData'] == 'date_test' || $col['typeData'] == 'month_test' || $col['typeData'] == 'address_sucursal')
                            <th style="text-align: {{$col['position']}};width:{{$object['width']}}%">
                              @if(!empty($col['dato']))
                                <b class="letter"  style="text-align: center">{{$col['dato']}}</b>
                              @endif
                            </th>
                          @endif
                          
                        @endforeach
                      </tr>
                    </table>

                  @endif

                </div>

            @endif
          
        @endforeach

        <div  class="footer-title"  style="margin-top:170px">
          
          <table class="tg" style="width: 100%; background: white;border-radius:35px;margin-top:90px">            
            <tr>

              <td width="100px" style="margin-top:8px"> <strong>ELABORO:</strong>
                <div style="text-align:center;">
                  @if(count($data['users_elaborate'])>1)
                    @foreach ($data['users_elaborate'] as $userWho)
                      <div class="row" style="margin-top:2px">
                        <div class="row"><label for="" style="text-transform:uppercase;">{{ $userWho['name_user'] }}</label></div>
                        <div class="row"><label for="" style="text-transform:uppercase;">{{ $userWho['charge']}}</label></div>
                        <div class="row"><img src="{{ $userWho['signature'] }}" width="100px"></div>                          
                      </div>
                    @endforeach
                    <div class="row" style="margin-top:8px"><label>{{$data['date_elaborate']}}</label></div>
                    @else
                    <div style="text-align:center;margin-top:5px">
                      @foreach ($data['users_elaborate'] as $userWho)
                        
                        <div class="row">
                          <img src="{{ $userWho['signature'] }}" width="100px">
                        </div>
                        <div class="row">
                          <label for="" style="text-transform:uppercase;">{{ $userWho['name_user'] }}</label>
                        </div>
                        <div class="row">
                          <label for="" style="text-transform:uppercase;">{{ $userWho['charge']}}</label>
                        </div>                          
                      @endforeach
                      <div class="row" style="margin-top:8px;margin-bottom:8px">
                        <label>{{$data['date_elaborate']}}</label>
                      </div>
                    </div>
                  @endif
                </div>
                
              </td>

              @if($data['user_revised'])
                <td width="100px" style="margin-top:8px"> <strong>REVISO:</strong>
                    <div style="text-align:center;margin-top:5px">
                      <div class="row">
                        <img src="{{$data['user_revised']['signature']}}" width="100px">
                      </div>
                      <div class="row">
                        <label for="" style="text-transform:uppercase;">{{$data['user_revised']['name_user']}}</label>
                      </div>
                      <div class="">
                        <label for="" style="text-transform:uppercase;">{{$data['user_revised']['charge']}}</label>
                      </div>
                      <div class="row" style="margin-top:8px;margin-bottom:8px">
                        <label>{{$data['date_revised']}}</label>
                      </div>
                    </div>
                </td>
              @endif
              
              @if($data['user_approved']['status'])
                <td width="100px" style="margin-top:8px"> <strong>APROBADO:</strong>
                  <div style="text-align:center;margin-top:5px">                   
                    <div class="row">
                      <img src="{{ $data['user_approved']['signature'] }}" width="100px">
                    </div>                      
                    <div class="row">
                      <label for="" style="text-transform: uppercase;">{{ $data['user_approved']['name'] }}</label>
                    </div>
                    <div class="row">
                      <label for="" style="text-transform: uppercase;">{{ $data['user_approved']['charge'] }}</label>
                    </div>
                    <div class="row" style="margin-top:8px;margin-bottom:8px">
                      @if($data['user_approved']['status'] == true)
                        <label>{{$data['date_approved']}}</label>
                      @endif
                    </div>
                  </div>
                </td>
              @endif

            </tr>

          </table>
        </div>
        
      @else
        <div class="main-content" style="page-break-before:always;">

          @foreach ($page['data']['objects'] as $keyObject =>  $object)

            @if($object['value'] == 'row')            
              <table style="margin-top:{{$object['top']}}px;width:100%">                
                  
                @if(count($object['cols']) >= 2)
                  <tr style="text-align: center">
                    @foreach ($object['cols'] as $col)
                      <td style="text-align: {{$col['position']}};">
                        @if($col['typeData'] == 'image')
                          <img src="{{$col['dato']}}" alt="" width="280px" height="160px">
                        @elseif($col['typeData'] == 'text' && !empty($col['dato']))
                          <b class="letter" style="text-align: {{$col['position']}}">{{$col['dato']}}</b>  
                        @elseif($col['typeData'] == 'date_test' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>  
                        @elseif($col['typeData'] == 'address_sucursal' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>     
                        @elseif($col['typeData'] == 'name_sucursal' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>  
                        @elseif($col['typeData'] == 'name_sucursal' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>                        
                        @elseif($col['typeData'] == 'image_register')
                          {{-- @if(!empty($col['dato']))
                          h
                            <img src="{{$col['dato']}}" class="img_data" alt="" width="280px" height="160px">
                          @endif --}}
                          @if(!empty($col['dato']) && is_array($col['dato']))
                            @if(isset($col['dato']['value']) && is_string($col['dato']['value'])) <!-- Verifica si existe y es un string -->
                                <img src="{{ $col['dato']['value'] }}" class="img_data" alt="{{ $col['dato']['name'] ?? 'Imagen' }}" width="280px" height="160px">
                            @endif
                            @if(isset($col['dato']['name']) && is_string($col['dato']['name'])) <!-- Verifica si existe y es un string -->
                              <b style="font-size: 13px; margin-top: 5px; display: block;"> <!-- Muestra el nombre de la imagen debajo -->
                                {{ $col['dato']['name'] }}
                              </b>
                            @endif
                          @endif                     
                        @elseif($col['typeData'] == 'text_register')
                          @if(!empty($col['dato']))
                            <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>                          
                          @endif
                        @elseif($col['typeData'] == 'numerical_list')
                          <ol style="padding: 0">
                            @foreach ($col['options'] as $option)
                              <li class="letter">. &nbsp;{{$option}}</li>    
                            @endforeach
                          </ol>                          
                        @elseif($col['typeData'] == 'bullet_list')
                          <ul class="letter" style="padding: 16px">
                            @foreach ($col['options'] as $option)
                              <li class="letter">{{$option}}</li>    
                            @endforeach
                          </ul>                          
                        @elseif($col['typeData'] == 'paragraph')
                          @if(!empty($col['dato']))
                            <p class="letter">{{$col['dato']}}</p>
                          @endif
                        @elseif($col['typeData'] == 'image_curve')
                          @if(!empty($col['dato']))
                            <img src="{{$col['dato']}}" alt="Gráfico de Eficiencia" style="width: 100%; height: 90%; display: block; margin: 0 auto;">                    
                          @endif
                        @endif
                      </td>
                    @endforeach
                  </tr>
                  @else
                  <tr style="text-align: center">
                    @foreach ($object['cols'] as $col)
                      <td colspan="2" style="text-align:{{$col['position']}};display:inline;margin:0px;padding:0px">
                        @if($col['typeData'] == 'image')
                          <img src="{{$col['dato']}}" alt="" width="280px" height="160px">
                        @elseif($col['typeData'] == 'text' && !empty($col['dato']))
                          <b class="letter" style="text-align: {{$col['position']}}">{{$col['dato']}}</b>  
                        @elseif($col['typeData'] == 'date_test' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>  
                        @elseif($col['typeData'] == 'address_sucursal' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>     
                        @elseif($col['typeData'] == 'name_sucursal' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>  
                        @elseif($col['typeData'] == 'name_sucursal' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>                        
                        @elseif($col['typeData'] == 'image_register')
                          {{-- @if(!empty($col['dato']))
                            j
                            <img src="{{$col['dato']}}" class="img_plaquet" alt="" width="566px" height="298px">
                            <b></b>
                          @endif --}}
                          @if(!empty($col['dato']) && is_array($col['dato']))
                            @if(isset($col['dato']['value']) && is_string($col['dato']['value'])) <!-- Verifica si existe y es un string -->
                                <img src="{{ $col['dato']['value'] }}" class="img_plaquet" alt="{{ $col['dato']['name'] ?? 'Imagen' }}" width="566px" height="298px">
                            @endif
                            @if(isset($col['dato']['name']) && is_string($col['dato']['name'])) <!-- Verifica si existe y es un string -->
                                <b style="font-size: 13px; margin-top: 5px; display: block;"> <!-- Muestra el nombre de la imagen debajo -->
                                    {{ $col['dato']['name'] }}
                                </b>
                            @endif
                          @endif                  
                        @elseif($col['typeData'] == 'text_register')
                          @if(!empty($col['dato']))
                            <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>                          
                          @endif
                        @elseif($col['typeData'] == 'numerical_list')
                          <ol style="padding: 0">
                            @foreach ($col['options'] as $option)
                              <li class="letter">. &nbsp;{{$option}}</li>    
                            @endforeach
                          </ol>                          
                        @elseif($col['typeData'] == 'bullet_list')
                          <ul class="letter" style="padding: 16px">
                            @foreach ($col['options'] as $option)
                              <li class="letter">{{$option}}</li>    
                            @endforeach
                          </ul>                          
                        @elseif($col['typeData'] == 'paragraph')
                          @if(!empty($col['dato']))
                            <p class="letter">{{$col['dato']}}</p>
                          @endif
                        @elseif($col['typeData'] == 'image_curve')
                          @if(!empty($col['dato']))
                            <img src="{{$col['dato']}}" alt="Gráfico de Eficiencia" style="width: 100%; height: 90%; display: block; margin: 0 auto;">                    
                          @endif
                        @endif                      
                      </td>
                    @endforeach
                  </tr> 
                @endif

              </table>
            @endif

            @if($object['value'] == 'table' && !$object['statusMargin'])
                                                
              <table class="tg" style="width: 100%; background: white;border-radius:35px;">

                @foreach ($object['rows'] as $row)
                  <tr>                  
                    
                    @foreach ($row['cols'] as $col)
                        
                      @if($object['statusMargin'])  
                        <td style="border:1px solid {{$object['margin']['color']}};border-radius:{{$object['margin']['border']}};text-align:{{$col['position']}}">
                          @if($col['typeData'] == 'image')
                            <img src="{{$col['dato']}}" alt="" width="280px" height="160px">
                          @elseif($col['typeData'] == 'text' && !empty($col['dato']))
                            <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>
                            @elseif($col['typeData'] == 'image_register')
                            @if(!empty($col['dato']))
                              <img src="{{$col['dato']}}" class="img" alt="" width="280px" height="160px">
                            @endif
                          @elseif($col['typeData'] == 'text_register')
                            @if(!empty($col['dato']))
                            <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>                          
                            @endif
                          @elseif($col['typeData'] == 'numerical_list')
                            <ol style="padding: 0">
                              @foreach ($col['options'] as $option)
                                <li class="letter">.&nbsp;{{$option}}</li>    
                              @endforeach
                            </ol>                          
                          @elseif($col['typeData'] == 'bullet_list')
                            <ul style="padding: 4px">
                              @foreach ($col['options'] as $option)
                                <li class="letter">&nbsp;{{$option}}</li>    
                              @endforeach
                            </ul>                          
                          @elseif($col['typeData'] == 'paragraph')
                            <p class="letter">{{$col['dato']}}</p>
                          @elseif($col['typeData'] == 'table')
                            
                            @foreach ($col['cols'] as $tableCol)

                              <table>
                                @foreach ($tableCol['row'] as $tableRow)                                                                    
                                  <tr>
                                    @if(count($tableRow['cols']) <2)
                                      @foreach ($tableRow['cols'] as $colRow)
                                        <th style="text-align: {{$colRow['position']}}">
                                          {{$colRow['dato']}}
                                        </th>    
                                      @endforeach
                                    @else

                                      @foreach ($tableRow['cols'] as $keyCol => $colRow)
                                        @if($keyCol == 0)
                                        <th style="text-align: {{$colRow['position']}}">
                                          <b>{{$colRow['dato']}}</b>
                                        </th>                                            
                                        @else
                                        <th style="text-align: {{$colRow['position']}}">
                                          {{$colRow['dato']}}
                                        </th>
                                        @endif
                                      @endforeach

                                    @endif
                                    
                                  </tr>
                                @endforeach
                              </table>
                                
                            @endforeach

                            
                          @endif
                        </td>                        
                        
                      @endif
                      
                    @endforeach
                    
                  </tr>  
                @endforeach              
                
              </table>

              @elseif($object['value'] == 'table' && $object['statusMargin'])
                <div style="border:1px solid {{$object['margin']['color']}};border-radius:{{$object['margin']['border']}};text-align:{{$col['position']}}">
                  @if (!empty($object['cols']))                                        
                    @foreach ($object['cols'] as $col)
                      <div class="col" style="text-align: {{$col['position']}}">
                        @if($col['typeData'] == 'image')
                          <img src="{{$col['dato']}}" alt="" width="280px" height="160px">
                        @elseif($col['typeData'] == 'text' && !empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>
                        @elseif($col['typeData'] == 'image_register')
                          @if(!empty($col['dato']))
                          <img src="{{$col['dato']}}" class="img" alt="" width="280px" height="160px">
                          @endif
                        @elseif($col['typeData'] == 'text_register')
                          @if(!empty($col['dato']))
                          <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>                          
                          @endif
                        @elseif($col['typeData'] == 'numerical_list')
                          <ol class="letter" style="padding: 0">
                            @foreach ($col['options'] as $option)
                              <li class="letter">. &nbsp;{{$option}}</li>    
                            @endforeach
                          </ol>                          
                        @elseif($col['typeData'] == 'bullet_list')
                          <ul class="letter" style="padding: 16px">
                            @foreach ($col['options'] as $option)
                              <li class="letter"> &nbsp;{{$option}}</li>    
                            @endforeach
                          </ul>                          
                        @elseif($col['typeData'] == 'paragraph')
                          <p class="letter">{{$col['dato']}}</p>
                        @endif
                      </div>
                    @endforeach
                  @endif
                </div>                                         
            @endif 
            
            @if($object['value'] == 'table platelet')                                                                
              <table class="tg" style="width: 100%; background: white;border-radius:35px;margin-top:20px">
                @foreach ($object['rows'] as $row)

                  <tr>

                      @foreach ($row['cols'] as $col)
                        <td style="text-align: {{$col['position']}}">
                          <div class="col" style="text-align:{{$col['position']}}">
                            @if($col['typeData'] == 'image')
                            <img src="{{$col['dato']}}" class="img" alt="" width="280px" height="160px">
                            @elseif($col['typeData'] == 'text' && !empty($col['dato']))
                              <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>
                            @elseif($col['typeData'] == 'image_register')
                              @if(!empty($col['dato']))
                              <img src="{{$col['dato']}}" class="img" alt="" width="280px" height="160px">
                              @endif
                            @elseif($col['typeData'] == 'text_register')
                              @if(!empty($col['dato']))
                              <b class="letter"  style="text-align: {{$col['position']}}">{{$col['dato']}}</b>                          
                              @endif
                            @elseif($col['typeData'] == 'numerical_list')
                              <ol class="letter" style="padding: 0">
                                @foreach ($col['options'] as $option)
                                  <li class="letter">. &nbsp;{{$option}}</li>    
                                @endforeach
                              </ol>                          
                            @elseif($col['typeData'] == 'bullet_list')
                              <ul class="letter" style="padding: 16px">
                                @foreach ($col['options'] as $option)
                                  <li class="letter"> &nbsp;{{$option}}</li>    
                                @endforeach
                              </ul>                          
                            @elseif($col['typeData'] == 'paragraph')
                              @if(!empty($col['dato']))
                                <p class="letter">{{$col['dato']}}</p>
                              @endif
                            @endif
                          </div>
                        </td>
                      @endforeach

                  </tr>

                @endforeach
              </table>                                                           
            @endif 

            @if($object['value'] == 'table test_tables 0%')
                              
              <table style="width: 422px; margin: 20px auto; text-align: center; font-size: 15pt; border-collapse: collapse;">
                <tr>                  
                  @foreach ($object['cols'] as $col)
                      @if($col['typeData'] == 'table') 
                        <td style="text-align:{{$col['position']}}; width: 100%;heigth:100%">                                                                         
                          <table class="tg" style="width: 100%;heigth:100%;border-collapse:collapse;border-spacing:8;text-align:{{$col['position']}}">
                            @foreach ($col['rows'] as $row)
                            <tr>
                              @if(count($row['cols'])>=2)
                                  @foreach ($row['cols'] as $rowCol)
                                  <td style="border: 1px solid {{$page['data']['objects'][0]['margin']['color']}}; border-radius: {{$page['data']['objects'][0]['margin']['border']}}; text-align: {{$col['position']}}; padding: 4px; font-size: 9pt;">
                                    @if($rowCol['typeData'] == 'text')  
                                        @if(!empty($rowCol['dato']) || $rowCol['dato'] == '0')
                                          {{$rowCol['dato']}}
                                        @endif
                                      @endif
                                      @if($rowCol['typeData'] == 'text_register') 
                                        @if(!empty($rowCol['dato']))                                 
                                          {{$rowCol['dato']}}
                                        @endif
                                      @endif


                                      @if($rowCol['typeData'] == 'array') 
                                        @foreach ($rowCol['dato'] as $dato)
                                          {{$dato}}
                                        @endforeach                                                                     
                                      @endif
                                    </td>
                                  @endforeach 
                                @else

                                @foreach ($row['cols'] as $rowCol)
                                <td colspan="2" style="border: 1px solid {{$page['data']['objects'][0]['margin']['color']}}; border-radius: {{$page['data']['objects'][0]['margin']['border']}}; text-align: {{$col['position']}}; padding: 4px; font-size: 9pt;">
                                  @if($rowCol['typeData'] == 'text')  
                                      @if(!empty($rowCol['dato']))
                                        {{$rowCol['dato']}}
                                      @endif
                                    @endif
                                    @if($rowCol['typeData'] == 'text_register') 
                                      @if(!empty($rowCol['dato']))                                 
                                        {{$rowCol['dato']}}
                                      @endif
                                    @endif


                                    @if($rowCol['typeData'] == 'array') 
                                      @foreach ($rowCol['dato'] as $dato)
                                        {{$dato}}
                                      @endforeach                                                                     
                                    @endif
                                  </td>
                                @endforeach 

                              @endif                             
                            </tr>
                            @endforeach
                          </table>                                                                            
                        </td>
                      @endif                                        
                  @endforeach                  
                </tr>
              </table>

            @endif

            @if($object['value'] == 'table test_tables 100%')
                              
              <table style="width: 422px; margin: 20px auto; text-align: center; font-size: 15pt; border-collapse: collapse;">
                <tr>                  
                  @foreach ($object['cols'] as $col)
                      @if($col['typeData'] == 'table') 
                        <td style="text-align:{{$col['position']}}; width: 100%;heigth:100%">                                                                         
                          <table class="tg" style="width: 100%;heigth:100%;border-collapse:collapse;border-spacing:8;text-align:{{$col['position']}}">
                            @foreach ($col['rows'] as $row)
                            <tr>
                              @if(count($row['cols'])>=2)
                                  @foreach ($row['cols'] as $rowCol)
                                  <td style="border: 1px solid {{$page['data']['objects'][0]['margin']['color']}}; border-radius: {{$page['data']['objects'][0]['margin']['border']}}; text-align: {{$col['position']}}; padding: 4px; font-size: 9pt;">
                                    @if($rowCol['typeData'] == 'text')  
                                        @if(!empty($rowCol['dato']) || $rowCol['dato'] == '0')
                                          {{$rowCol['dato']}}
                                        @endif
                                      @endif
                                      @if($rowCol['typeData'] == 'text_register') 
                                        @if(!empty($rowCol['dato']))                                 
                                          {{$rowCol['dato']}}
                                        @endif
                                      @endif


                                      @if($rowCol['typeData'] == 'array') 
                                        @foreach ($rowCol['dato'] as $dato)
                                          {{$dato}}
                                        @endforeach                                                                     
                                      @endif
                                    </td>
                                  @endforeach 
                                @else

                                @foreach ($row['cols'] as $rowCol)
                                <td colspan="2" style="border: 1px solid {{$page['data']['objects'][0]['margin']['color']}}; border-radius: {{$page['data']['objects'][0]['margin']['border']}}; text-align: {{$col['position']}}; padding: 4px; font-size: 9pt;">
                                  @if($rowCol['typeData'] == 'text')  
                                      @if(!empty($rowCol['dato']))
                                        {{$rowCol['dato']}}
                                      @endif
                                    @endif
                                    @if($rowCol['typeData'] == 'text_register') 
                                      @if(!empty($rowCol['dato']))                                 
                                        {{$rowCol['dato']}}
                                      @endif
                                    @endif


                                    @if($rowCol['typeData'] == 'array') 
                                      @foreach ($rowCol['dato'] as $dato)
                                        {{$dato}}
                                      @endforeach                                                                     
                                    @endif
                                  </td>
                                @endforeach 

                              @endif                             
                            </tr>
                            @endforeach
                          </table>                                                                            
                        </td>
                      @endif                                        
                  @endforeach                  
                </tr>
              </table>

            @endif

            @if($object['value'] == 'table test_tables 150%')
                              
              <table style="width: 422px; margin: 20px auto; text-align: center; font-size: 15pt; border-collapse: collapse;">
                <tr>                  
                  @foreach ($object['cols'] as $col)
                      @if($col['typeData'] == 'table') 
                        <td style="text-align:{{$col['position']}}; width: 100%;heigth:100%">                                                                         
                          <table class="tg" style="width: 100%;heigth:100%;border-collapse:collapse;border-spacing:8;text-align:{{$col['position']}}">
                            @foreach ($col['rows'] as $row)
                            <tr>
                              @if(count($row['cols'])>=2)
                                  @foreach ($row['cols'] as $rowCol)
                                  <td style="border: 1px solid {{$page['data']['objects'][0]['margin']['color']}}; border-radius: {{$page['data']['objects'][0]['margin']['border']}}; text-align: {{$col['position']}}; padding: 4px; font-size: 9pt;">
                                    @if($rowCol['typeData'] == 'text')  
                                        @if(!empty($rowCol['dato']) || $rowCol['dato'] == '0')
                                          {{$rowCol['dato']}}
                                        @endif
                                      @endif
                                      @if($rowCol['typeData'] == 'text_register') 
                                        @if(!empty($rowCol['dato']))                                 
                                          {{$rowCol['dato']}}
                                        @endif
                                      @endif


                                      @if($rowCol['typeData'] == 'array') 
                                        @foreach ($rowCol['dato'] as $dato)
                                          {{$dato}}
                                        @endforeach                                                                     
                                      @endif
                                    </td>
                                  @endforeach 
                                @else

                                @foreach ($row['cols'] as $rowCol)
                                <td colspan="2" style="border: 1px solid {{$page['data']['objects'][0]['margin']['color']}}; border-radius: {{$page['data']['objects'][0]['margin']['border']}}; text-align: {{$col['position']}}; padding: 4px; font-size: 9pt;">
                                  @if($rowCol['typeData'] == 'text')  
                                      @if(!empty($rowCol['dato']))
                                        {{$rowCol['dato']}}
                                      @endif
                                    @endif
                                    @if($rowCol['typeData'] == 'text_register') 
                                      @if(!empty($rowCol['dato']))                                 
                                        {{$rowCol['dato']}}
                                      @endif
                                    @endif


                                    @if($rowCol['typeData'] == 'array') 
                                      @foreach ($rowCol['dato'] as $dato)
                                        {{$dato}}
                                      @endforeach                                                                     
                                    @endif
                                  </td>
                                @endforeach 

                              @endif                             
                            </tr>
                            @endforeach
                          </table>                                                                            
                        </td>
                      @endif                                        
                  @endforeach                  
                </tr>
              </table>

            @endif
            
          @endforeach

        </div>

      @endif

      <br>
      <br>

        <!-- FOOTER -->

        @if (!empty($data['certification']))
                  
          <footer>
            <div class="footer-content">        
              <img src="{{ $data['certification'] }}" alt="" width="100" height="100">
            </div>
          </footer>        
        
        @endif


    @endforeach
          
    
  
  </body>

</html>
