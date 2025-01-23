<link href="{{ asset('css/styleipm.css') }}" rel="stylesheet">
<div class="sidebar">

    ​ <nav class="sidebar-nav">
        <ul class="nav">

            <li @click="menu=0" class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon fa fa-desktop"></i> {{__("multi-leng.Home")}}
                </a>
                <li class="nav-title bg-google-plus"></li>
            </li

                
            @foreach ($modules as $module)

            
                {{-- MODULO SUPER ADMINISTRADOR --}}

                @if ($module['_id'] === '6149e671ea7bea12380db612' && $module['status'] == true)
                    <li class="nav-title bg-google-plus"></li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-toggle-on"></i>&nbsp;MODULO SUPER ADMINISTRADOR</a>
                        <ul class="nav-dropdown-items" style=" a:hover {ackground-color: #d3753e !important;}">
                            <li @click="menu=100" class="nav-item">
                                <a class="nav-link" href="#"><i class="nav-icon fa  fa-user-o"></i>Socios</a>
                            </li>
                            <li @click="menu=101" class="nav-item">
                                <a class="nav-link" href="#"><i class="nav-icon fa  fa-object-ungroup"></i>Administrador de Módulos Web</a>
                            </li>

                            <li @click="menu=102" class="nav-item">
                                <a class="nav-link" href="#"><i class="nav-icon fa  fa-object-group"></i>Administrador de Sub-Módulos Web</a>
                            </li>

                            <li @click="menu=103" class="nav-item">
                                <a class="nav-link" href="#"><i class="nav-icon fa  fa-object-ungroup"></i>Administrador de Módulos App</a>
                            </li>

                            <li @click="menu=105" class="nav-item">
                                <a class="nav-link" href="#"><i class="nav-icon fa  fa-object-group"></i>Administrador de Sub-Módulos App</a>
                            </li>

                            <li @click="menu=104" class="nav-item">
                                <a class="nav-link" href="#"><i class="nav-icon fa  fa-newspaper-o"></i>Información de Partners para formatos</a>  
                            </li>
                                                                                
                        </ul>

                    </li>
                @endif

                {{-- MODULO PUBLICITARIO --}}

                @if ($module['_id'] === '633b3712f52f536e3e315fa0' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-toggle-on"></i>&nbsp;MODULO PUBLICITARIO</a>
                        <ul class="nav-dropdown-items" style=" a:hover {ackground-color: #d3753e !important;}">
                            @foreach ($module['sub_modules'] as $submodule)
                                
                                @if ($submodule['_id'] == '633b386af3a47244f84c6bc9' && $submodule['status'] == true)
                                    
                                    <li  class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-id-card-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif($submodule['_id'] == '633b386af3a47244f84c6bc9' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-id-card-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                            @endforeach

                        </ul>
                    </li>

                @endif
                
            {{-- MODULO PRINCIPAL --}}

           
                @if ($module['_id'] === '614172b9771ce5068e4f1172' && $module['status'] == true )

                <li class="nav-title bg-google-plus"></li>
                    
                    <li class="nav-item nav-dropdown">
        
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-briefcase"></i>&nbsp;{{ $module['name_module'] }}</a>

                        <ul class="nav-dropdown-items" style=" a:hover {ackground-color: #d3753e !important;}">

                            @foreach ($module['sub_modules'] as $submodule)
                                
                                @if ($submodule['_id'] == '6149650bf85c8479674e46e3' && $submodule['status'] == true)
                                    
                                    <li @click="menu=1" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif($submodule['_id'] == '6149650bf85c8479674e46e3' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '61496519f85c8479674e46e4' && $submodule['status'] == true)
                                    
                                    <li @click="menu=2" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-lock"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '61496519f85c8479674e46e4' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '614412be06c40e5e6c641e5b' && $submodule['status'] == true)
                                    
                                    <li @click="menu=3" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-building" ></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '614412be06c40e5e6c641e5b' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                                  @if ($submodule['_id'] == '614416f306c40e5e6c641e5c' && $submodule['status'] == true)

                                    <li @click="menu=4" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-sitemap"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '614416f306c40e5e6c641e5c' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif
                                  @if ($submodule['_id'] == '6144a3889078305b912a8ed2' && $submodule['status'] == true)

                                    <li @click="menu=5" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6144a3889078305b912a8ed2' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6148fbfc223ec0426304dc8e' && $submodule['status'] == true)
                                    
                                    <li @click="menu=6" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6148fbfc223ec0426304dc8e' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif
                                 @if ($submodule['_id'] == '6148acf7223ec0426304dc88' && $submodule['status'] == true)

                                    <li @click="menu=7" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-wpforms"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6148acf7223ec0426304dc88' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6148a9d9223ec0426304dc82' && $submodule['status'] == true)
                                    
                                    <li @click="menu=8" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-pencil-square-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6148a9d9223ec0426304dc82' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6144126206c40e5e6c641e5a' && $submodule['status'] == true)
                                    
                                    <li @click="menu=9"  class="nav-item  ">
                                        <a class="nav-link " href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6144126206c40e5e6c641e5a' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '615214045383c64e166b9c22' && $submodule['status'] == true)
                                    
                                    <li @click="menu=10"  class="nav-item  ">
                                        <a class="nav-link " href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '615214045383c64e166b9c22' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '628d17c547369e6caa2dc342' && $submodule['status'] == true)
                                    
                                    <li @click="menu=11" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-commenting"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '628d17c547369e6caa2dc342' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif

                            @endforeach

                        </ul>

                    </li> 

                    @elseif($module['_id'] === '614172b9771ce5068e4f1172' && $module['status'] == false )

                    <li class="nav-title bg-gray"></li>
                    
                    <li class="nav-item nav-dropdown">
        
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-briefcase"></i>&nbsp;{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i> </a>

                        <ul class="nav-dropdown-items" style=" a:hover {ackground-color: #d3753e !important;}">

                            @foreach ($module['sub_modules'] as $submodule)
                                
                                @if ($submodule['_id'] == '6149650bf85c8479674e46e3')
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '61496519f85c8479674e46e4')
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-lock"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '614412be06c40e5e6c641e5b')
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-building" ></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif

                                 @if ($submodule['_id'] == '614416f306c40e5e6c641e5c')

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-sitemap"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6144a3889078305b912a8ed2')

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6148fbfc223ec0426304dc8e')
                                    
                                    <li  class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif

                                 @if ($submodule['_id'] == '6148acf7223ec0426304dc88')

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-wpforms"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6148a9d9223ec0426304dc82')
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-pencil-square-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6144126206c40e5e6c641e5a')
                                    
                                    <li  class="nav-item  ">
                                        <a class="nav-link " href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '615214045383c64e166b9c22')
                                    
                                    <li  class="nav-item  ">
                                        <a class="nav-link " href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif
                                @if ($submodule['_id'] == '628d17c547369e6caa2dc342')
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-commenting"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif                           

   

                            @endforeach

                        </ul>

                    </li> 

                @endif
            {{-- MODULO PLANEADOR --}}

                
                    @if ($module['_id'] == '614173c3771ce5068e4f1176' && $module['status'] == true)

                            <li class="nav-title bg-gray"></li>

                            <li class="nav-item nav-dropdown">
                                <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-calendar"></i>{{ $module['name_module'] }}</a>
                                <ul class="nav-dropdown-items">

                                    @foreach ($module['sub_modules'] as $submodule)

                                        @if($submodule['_id'] == '6149808ef85c8479674e46f4' && $submodule['status'] == true)
                                            <li @click="menu=12" class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-check-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                            </li>
                                            @elseif($submodule['_id'] == '6149808ef85c8479674e46f4' && $submodule['status'] == false)
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-check-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                        
                                        @if($submodule['_id'] == '6149809ef85c8479674e46f5' && $submodule['status'] == true)
                                            <li @click="menu=13" class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-plus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                            </li>
                                            @elseif($submodule['_id'] == '6149809ef85c8479674e46f5' && $submodule['status'] == false)
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-plus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                    

                                        
                                        @if($submodule['_id'] == '614980b0f85c8479674e46f6' && $submodule['status'] == true)
                                            <li @click="menu=14" class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-minus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                            </li>
                                            @elseif($submodule['_id'] == '614980b0f85c8479674e46f6' && $submodule['status'] == false)
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-minus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                        
                                        @if($submodule['_id'] == '614980bcf85c8479674e46f7' && $submodule['status'] == true)
                                            <li @click="menu=18" class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                            </li>
                                            @elseif($submodule['_id'] == '614980bcf85c8479674e46f7' && $submodule['status'] == false)
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                        
                                        @if($submodule['_id'] == '614980c9f85c8479674e46f8' && $submodule['status'] == true)
                                            <li @click="menu=20" class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-minus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                            </li>
                                            @elseif($submodule['_id'] == '614980c9f85c8479674e46f8' && $submodule['status'] == false)
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-minus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                    
                                    @endforeach

                                </ul>
                            </li>

                            @elseif($module['_id'] == '614173c3771ce5068e4f1176' && $module['status'] == false)

                            <li class="nav-title bg-gray"></li>

                            <li class="nav-item nav-dropdown">
                                <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-calendar"></i>{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                <ul class="nav-dropdown-items">

                                    @foreach ($module['sub_modules'] as $submodule)

                                        @if($submodule['_id'] == '6149808ef85c8479674e46f4')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-check-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                        
                                        @if($submodule['_id'] == '6149809ef85c8479674e46f5')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-plus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                        
                                    
                                        
                                        @if($submodule['_id'] == '614980b0f85c8479674e46f6')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-minus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                        
                                        @if($submodule['_id'] == '614980bcf85c8479674e46f7')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                        
                                        @if($submodule['_id'] == '614980c9f85c8479674e46f8')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-minus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        @endif
                                    
                                    @endforeach

                                </ul>
                            </li>

                    @endif
            {{-- MODULO INFORMES DE MANTENIMIENTO --}}


                @if ($module['_id'] == '6141736b771ce5068e4f1175' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-file-pdf-o"></i> {{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">
                            @foreach ($module['sub_modules'] as $submodule)

                                @if($submodule['_id'] == '61498023f85c8479674e46f2' && $submodule['status'] == true)
                                    <li @click="menu=15" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61498023f85c8479674e46f2' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                <!-- modulo COMENTADO PARA INFORME ANUAL -->
                                @if($submodule['_id'] == '61498037f85c8479674e46f3' && $submodule['status'] == true)
                                    <li @click="menu=" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61498037f85c8479674e46f3' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '61497237f85c8479674e46e5' && $submodule['status'] == true)
                                    
                                    <li @click="menu=16" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-exclamation-triangle"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '61497237f85c8479674e46e5' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class=" fa fa-lock"></i></a>
                                    </li>

                                @endif
                                 
                                

                            @endforeach

                        </ul>
                    </li>

                    @elseif($module['_id'] == '6141736b771ce5068e4f1175' && $module['status'] == false)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-file-pdf-o"></i> {{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                        <ul class="nav-dropdown-items">
                            @foreach ($module['sub_modules'] as $submodule)

                                @if($submodule['_id'] == '61498023f85c8479674e46f2')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '61498037f85c8479674e46f3')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                @if($submodule['_id'] == '6477418203f09f63bc059852')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '61497237f85c8479674e46e5')
                                    
                                    <li  class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-exclamation-triangle"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a></a>
                                    </li>

                                @endif


                                 @endforeach

                        </ul>
                    </li>

                @endif
            {{-- MODULO CLIENTE --}}

                @if ($module['_id'] == '614173e4771ce5068e4f1178' && $module['status'] == true)

                    <li class="nav-title bg-gray"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-user"></i>&nbsp;&nbsp;MODULO CLIENTE</a>
                        <ul class="nav-dropdown-items">
                            
                            @foreach ($module['sub_modules'] as $submodule)

                                @if($submodule['_id'] == '6149825bf85c8479674e46fc' && $submodule['status'] == true)
                                    <li @click="menu=17" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa files-o fa-files-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '6149825bf85c8479674e46fc' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa files-o fa-files-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if($submodule['_id'] == '61498234f85c8479674e46fa' && $submodule['status'] == true)
                                    <li @click="menu=18" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61498234f85c8479674e46fa' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if($submodule['_id'] == '6149826cf85c8479674e46fd' && $submodule['status'] == true)
                                    <li @click="menu=19" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-exclamation-triangle"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '6149826cf85c8479674e46fd' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-exclamation-triangle"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if($submodule['_id'] == '6149827cf85c8479674e46fe' && $submodule['status'] == true)
                                    <li @click="menu=20" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa fa-th-list"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '6149827cf85c8479674e46fe' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-th-list"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '6149824df85c8479674e46fb' && $submodule['status'] == true)
                                    <li @click="menu=21" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '6149824df85c8479674e46fb' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif                              

                            @endforeach
                        
                        </ul>
                    </li>

                    @elseif($module['_id'] == '614173e4771ce5068e4f1178' && $module['status'] == false)

                    <li class="nav-title bg-gray"></li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;MODULO CLIENTE</a>
                        <ul class="nav-dropdown-items">
                            
                            @foreach ($module['sub_modules'] as $submodule)

                                @if($submodule['_id'] == '6149825bf85c8479674e46fc')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '61498234f85c8479674e46fa')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-folder-open"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '6149826cf85c8479674e46fd')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa files-o fa-files-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '6149827cf85c8479674e46fe')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-th-list"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '6149824df85c8479674e46fb')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                            @endforeach
                        
                        </ul>
                    </li>

                @endif

            {{-- MODULO SEGURIDAD Y SALUD EN EL TRABAJO --}}

                
                @if ($module['_id'] == '61417332771ce5068e4f1173' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-heartbeat"></i>&nbsp;{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                               
                                @if ($submodule['_id'] == '614978bcf85c8479674e46e9' && $submodule['status'] == true)    
                                    <li @click="menu=22" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '614978bcf85c8479674e46e9' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '614978cbf85c8479674e46ea' && $submodule['status'] == true)    
                                    <li @click="menu=23" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-slideshare"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    
                                    @elseif($submodule['_id'] == '614978cbf85c8479674e46ea' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-slideshare"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '614978a9f85c8479674e46e8' && $submodule['status'] == true)    
                                    <li @click="menu=24" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-snowflake-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '614978a9f85c8479674e46e8' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-snowflake-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                               

                                
                                                                
                            @endforeach

                        </ul>
                    </li>

                    @elseif($module['_id'] == '61417332771ce5068e4f1173' && $module['status'] == false)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-heartbeat"></i>&nbsp;{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if ($submodule['_id'] == '614978bcf85c8479674e46e9')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '614978cbf85c8479674e46ea')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-slideshare"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '614978a9f85c8479674e46e8')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-snowflake-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                               
                            @endforeach

                        </ul>
                    </li>

                @endif
            {{-- ESTADISTICAS--}}

                @if ($module['_id'] == '654e8efcdd254b4bce0fbe53' && $module['status'] == true)
                <li class="nav-title bg-gray"></li>
                    <li class="nav-item nav-dropdown">
                    <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-bar-chart"></i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                 @if($submodule['_id'] == '6477418203f09f63bc059852' && $submodule['status'] == true)
                                    <li @click="menu=25" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-line-chart"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '6477418203f09f63bc059852' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-line-chart"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                            
                             @endforeach

                        </ul>
                    </li>
                    @elseif ($module['_id'] == '654e8efcdd254b4bce0fbe53' && $module['status'] == false)
                        <li class="nav-title bg-google-plus"></li>
                            <li class="nav-item nav-dropdown">
                                <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-bar-chart"></i>&nbsp;{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                <ul class="nav-dropdown-items">

                                    @foreach ($module['sub_modules'] as $submodule)

                                        @if($submodule['_id'] == '6477418203f09f63bc059852')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="nav-icon fa fa-line-chart"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                            </li>
                                        
                                        @endif
                                    
                                        @endforeach

                                </ul>
                            </li>

                     @endif

            {{-- MODULO EFICIENCIA DE BOMBAS --}}

                @if ($module['_id'] == '64f5efcde320d469e10e625b' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-tint"></i>&nbsp;{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if ($submodule['_id'] == '64f5f01a2c9d3cbacc05061e' && $submodule['status'] == true)    
                                    <li @click="menu=26" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-tint"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '64f5f01a2c9d3cbacc05061e' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-tint"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '64f5f03cf8ddb2fdb60ac693' && $submodule['status'] == true)    
                                    <li @click="menu=27" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '64f5f03cf8ddb2fdb60ac693' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif                               
                                                                
                            @endforeach

                        </ul>
                    </li>

                    @elseif($module['_id'] == '64f5efcde320d469e10e625b' && $module['status'] == false)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-tint"></i>&nbsp;{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if ($submodule['_id'] == '64f5f01a2c9d3cbacc05061e')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-tint"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '64f5f03cf8ddb2fdb60ac693')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                                                
                            @endforeach

                        </ul>
                    </li>

                @endif

            {{-- MODULO ADMINISTRATIVO EXTINTORES --}}


                @if ($module['_id'] == '61417354771ce5068e4f1174' && $module['status'] == true)
                    
                    <li class="nav-title bg-gray"></li>
                    
                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-fire-extinguisher"></i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                 @if($submodule['_id'] == '61497c5ff85c8479674e46ee' && $submodule['status'] == true)
                                    <li @click="menu=28" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-wpforms"></i>&nbsp;&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61497c5ff85c8479674e46ee' && $submodule['status'] == false)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="nav-icon fa fa-wpforms"></i>&nbsp;&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                        </li>
                                @endif

                                @if($submodule['_id'] == '61497caef85c8479674e46f0' && $submodule['status'] == true)
                                    <li @click="menu=29" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-plus-circle"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61497caef85c8479674e46f0' && $submodule['status'] == false)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="nav-icon fa fa-plus-circle"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                        </li>
                                @endif

                                @if($submodule['_id'] == '62dedbffd85d593da7797182' && $submodule['status'] == true)
                                    <li @click="menu=30" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-fire-extinguisher"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '62dedbffd85d593da7797182' && $submodule['status'] == false)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="nav-icon fa fa-fire-extinguisher"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                        </li>
                                @endif
                                  
                                @if($submodule['_id'] == '61497c72f85c8479674e46ef' && $submodule['status'] == true)
                                    <li @click="menu=31" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-wpforms"></i>&nbsp;&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61497c72f85c8479674e46ef' && $submodule['status'] == false)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="nav-icon fa fa-wpforms"></i>&nbsp;&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                        </li>
                                @endif

                                @if ($submodule['_id'] == '62aa1fcab25c8b25320f4002' && $submodule['status'] == true)
                                    <li @click="menu=32" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '62aa1fcab25c8b25320f4002' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a>
                                    </li>
                                @endif
                            
                                @if($submodule['_id'] == '61497c34f85c8479674e46eb' && $submodule['status'] == true)
                                    <li @click="menu=33" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-plus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61497c34f85c8479674e46eb' && $submodule['status'] == false)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-plus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                        </li>
                                @endif
                                
                                @if($submodule['_id'] == '61497c40f85c8479674e46ec' && $submodule['status'] == true)
                                    <li @click="menu=34" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-check-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61497c40f85c8479674e46ec' && $submodule['status'] == false)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-check-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                        </li>
                                @endif
                                
                                @if($submodule['_id'] == '61497c49f85c8479674e46ed' && $submodule['status'] == true)
                                    <li @click="menu=35" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61497c49f85c8479674e46ed' && $submodule['status'] == false)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                        </li>
                                @endif

                                
                                @if($submodule['_id'] == '61497cbdf85c8479674e46f1' && $submodule['status'] == true)
                                    <li @click="menu=36" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61497cbdf85c8479674e46f1' && $submodule['status'] == false)
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                        </li>
                                @endif

                                @if ($submodule['_id'] == '61a8ed6cc0fbc15eed08ed12' && $submodule['status'] == true)
                                    <li @click="menu=37" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61a8ed6cc0fbc15eed08ed12' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '61f1ef33dad4f32f2f784ed2' && $submodule['status'] == true)
                                    <li @click="menu=38" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '61f1ef33dad4f32f2f784ed2' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '620b19aff80dec64c821a7cb' && $submodule['status'] == true)
                                    <li @click="menu=39" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '620b19aff80dec64c821a7cb' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '620a59a418b5d5229902cc43' && $submodule['status'] == true)
                                    <li @click="menu=40" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-exclamation-triangle"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '620a59a418b5d5229902cc43' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-exclamation-triangle"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a>
                                    </li>
                                @endif                            


                                @if ($submodule['_id'] == '6318d19047329f425a4a90c2' && $submodule['status'] == true)
                                    <li @click="menu=41" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-commenting-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '6318d19047329f425a4a90c2' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-commenting-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i> </a>
                                    </li>
                                @endif

                            @endforeach
                
                        </ul>
                    </li>

                    @elseif($module['_id'] == '61417354771ce5068e4f1174' && $module['status'] == false)

                    <li class="nav-title bg-gray"></li>
                    
                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-fire-extinguisher"></i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if($submodule['_id'] == '61497c5ff85c8479674e46ee')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-fire-extinguisher"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                            
                                @if($submodule['_id'] == '61497caef85c8479674e46f0')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-plus-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '62dedbffd85d593da7797182')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar-check-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '61497c72f85c8479674e46ef')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '62aa1fcab25c8b25320f4002')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-wpforms"></i>&nbsp;&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '61497c34f85c8479674e46eb')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-wpforms"></i>&nbsp;&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '61497c40f85c8479674e46ec')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-plus-circle"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if($submodule['_id'] == '61497c49f85c8479674e46ed')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }}&nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '61497cbdf85c8479674e46f1')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>&nbsp;{{ $submodule['name_sub_module'] }} <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '61a8ed6cc0fbc15eed08ed12')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-clipboard"></i>&nbsp;{{ $submodule['name_sub_module'] }} <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '61f1ef33dad4f32f2f784ed2')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-exclamation-triangle"></i>&nbsp;{{ $submodule['name_sub_module'] }} <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '620b19aff80dec64c821a7cb')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-pdf-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '620a59a418b5d5229902cc43')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                @if ($submodule['_id'] == '6318d19047329f425a4a90c2')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>&nbsp;{{ $submodule['name_sub_module'] }} <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                            @endforeach
                
                        </ul>
                    </li>

                @endif

            {{-- MODULO DOCUMENTOS --}}

                @if ($module['_id'] == '6567315a741313ef44001b84' && $module['status'] == true)

                <li class="nav-title bg-gray"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-clipboard"></i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)
                            
                                @if ($submodule['_id'] == '6567322abeefc53d760167e7' && $submodule['status'] == true )    
                                    <li @click="menu=44" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-files-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6567322abeefc53d760167e7' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-files-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6578543ead9a25f7d5077696' && $submodule['status'] == true )    
                                    <li @click="menu=45" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-briefcase"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6578543ead9a25f7d5077696' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-briefcase"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '65785489ad9a25f7d5077697' && $submodule['status'] == true )    
                                    <li @click="menu=46" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-folder-open-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '65785489ad9a25f7d5077697' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-folder-open-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '65785722ad9a25f7d5077698' && $submodule['status'] == true )    
                                    <li @click="menu=47" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-building"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '65785722ad9a25f7d5077698' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-building"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '65bb98c35c2feca7cc0d3d83' && $submodule['status'] == true )    
                                    <li @click="menu=48" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '65bb98c35c2feca7cc0d3d83' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '65bb98d95c2feca7cc0d3d84' && $submodule['status'] == true )    
                                    <li @click="menu=49" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '65bb98d95c2feca7cc0d3d84' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '65bb98fa5c2feca7cc0d3d85' && $submodule['status'] == true )    
                                    <li @click="menu=50" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-shopping-bag"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '65bb98fa5c2feca7cc0d3d85' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-shopping-bag"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '65bb990c5c2feca7cc0d3d86' && $submodule['status'] == true )    
                                    <li @click="menu=51" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '65bb990c5c2feca7cc0d3d86' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '65bb99375c2feca7cc0d3d87' && $submodule['status'] == true )    
                                    <li @click="menu=52" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-user-md"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '65bb99375c2feca7cc0d3d87' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-user-md"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                            @endforeach

                        </ul>
                    </li>

                    @elseif($module['_id'] == '6567315a741313ef44001b84' && $module['status'] == false)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-clipboard"></i>&nbsp;{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if ($submodule['_id'] == '6567322abeefc53d760167e7')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-files-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '6578543ead9a25f7d5077696')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-briefcase"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  

                                @if ($submodule['_id'] == '65785489ad9a25f7d5077697')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-folder-open-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                
                                @if ($submodule['_id'] == '65785722ad9a25f7d5077698')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-building"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                                @if ($submodule['_id'] == '65bb98c35c2feca7cc0d3d83')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  

                                @if ($submodule['_id'] == '65bb98d95c2feca7cc0d3d84')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  

                                @if ($submodule['_id'] == '65bb98fa5c2feca7cc0d3d85')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-shopping-bag"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  

                                @if ($submodule['_id'] == '65bb990c5c2feca7cc0d3d86')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text-o"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  

                                @if ($submodule['_id'] == '65bb99375c2feca7cc0d3d87')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-user-md"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  
                                                                
                            @endforeach

                        </ul>
                    </li>

                @endif

            {{-- MODULO CAPACITACION IPM-X --}}

                 @if ($module['_id'] == '650d8de1cc8a2abaf10d54c3' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-university"></i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)
                            
                                @if ($submodule['_id'] == '650d8e0e360b2717240a230e' && $submodule['status'] == true )    
                                    <li @click="menu=53" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '650d8e0e360b2717240a230e' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '651ddc7097a6d3e16601b4e3' && $submodule['status'] == true )    
                                    <li @click="menu=54" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '651ddc7097a6d3e16601b4e3' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif                             
                                    
                                @if ($submodule['_id'] == '651ddc8f97a6d3e16601b4e4' && $submodule['status'] == true )    
                                    <li @click="menu=55" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '651ddc8f97a6d3e16601b4e4' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                            @endforeach

                        </ul>
                    </li>

                    @elseif($module['_id'] == '650d8de1cc8a2abaf10d54c3' && $module['status'] == false)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-heartbeat"></i>&nbsp;{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if ($submodule['_id'] == '650d8e0e360b2717240a230e')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  
                                
                                @if ($submodule['_id'] == '651ddc7097a6d3e16601b4e3')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif 

                                @if ($submodule['_id'] == '651ddc8f97a6d3e16601b4e4')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif 
                                                                
                            @endforeach

                        </ul>
                    </li>

                @endif

            {{-- MODULO CAPACITACION IPM-X --}}
            
               

                {{-- MODULO CONTABLE --}}

                @if ($module['_id'] == '614173d2771ce5068e4f1177' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>
                    <li class="nav-item nav-dropdown">
                        <b><a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-money"></i>{{ $module['name_module'] }} </a></b>
                        <ul class="nav-dropdown-items">
                            @foreach ($module['sub_modules'] as $submodule)
                                @if($submodule['_id'] == '614981d5f85c8479674e46f9' && $submodule['status'] == true)
                                    <li @click="menu=21" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-usd"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '614981d5f85c8479674e46f9' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-usd"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>

                    @elseif($module['_id'] == '614173d2771ce5068e4f1177' && $module['status'] == false)

                    <li class="nav-title bg-google-plus"></li>
                    <li class="nav-item nav-dropdown">
                        <b><a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-money"></i>{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a></b>
                        <ul class="nav-dropdown-items">
                            @foreach ($module['sub_modules'] as $submodule)
                                @if($submodule['_id'] == '614981d5f85c8479674e46f9')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-usd"></i>&nbsp;{{ $submodule['name_sub_module'] }}&nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>

                @endif

              

                {{-- MODULO BOMBEROS --}}
                @if ($module['_id'] == '617adb1aae819322f155eed1' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa  fa-fire"></i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if ($submodule['_id'] == '6671ac4df9d3ad65590ef282' && $submodule['status'] == true )    
                                    <li @click="menu=59" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-building"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671ac4df9d3ad65590ef282' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-building"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6671ac6b237a0fcf96098ff6' && $submodule['status'] == true )    
                                    <li @click="menu=60" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671ac6b237a0fcf96098ff6' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif                             
                                    
                                @if ($submodule['_id'] == '6671ac82f1a7a6934807eed7' && $submodule['status'] == true )    
                                    <li @click="menu=61" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671ac82f1a7a6934807eed7' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-users"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6671ac96237a0fcf96098ff7' && $submodule['status'] == true )    
                                    <li @click="menu=62" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671ac96237a0fcf96098ff7' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6671acafab4e4783d302a5bb' && $submodule['status'] == true )    
                                    <li @click="menu=63" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671acafab4e4783d302a5bb' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calendar"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6671acbff6bbe2979806bedd' && $submodule['status'] == true )    
                                    <li @click="menu=64" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671acbff6bbe2979806bedd' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-file-text"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6671af40f6bbe2979806bee2' && $submodule['status'] == true )    
                                    <li @click="menu=65" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-ul"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671af40f6bbe2979806bee2' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-ul"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6671af59544ff7270c0d84a0' && $submodule['status'] == true )    
                                    <li @click="menu=66" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671af59544ff7270c0d84a0' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '6671afaa9a426c6d020d5608' && $submodule['status'] == true )    
                                    <li @click="menu=67" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-card"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '6671afaa9a426c6d020d5608' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-address-card"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif
                            
                            @endforeach

                        </ul>
                    </li>

                @endif

            {{-- MODULO COSTOS Y PRESUPUESTOS --}}

                @if ($module['_id'] == '64abfb5fab4df8e46902e475' && $module['status'] == true)
                <li class="nav-title bg-gray"></li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-usd">‌</i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if($submodule['_id'] == '64cbb4b39ddf1fe6d70b7613' && $submodule['status'] == true)
                                    <li @click="menu=42" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '64cbb4b39ddf1fe6d70b7613' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                             

                                @if($submodule['_id'] == '64cbb4eb9ddf1fe6d70b7614' && $submodule['status'] == true)
                                    <li @click="menu=43" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calculator"></i>&nbsp;{{ $submodule['name_sub_module'] }}</a>
                                    </li>
                                    @elseif($submodule['_id'] == '64cbb4eb9ddf1fe6d70b7614' && $submodule['status'] == false)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calculator"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif

                            @endforeach

                        </ul>
                    </li>
                    @elseif ($module['_id'] == '64abfb5fab4df8e46902e475' && $module['status'] == false)
                    <li class="nav-title bg-google-plus"></li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-usd">‌</i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if($submodule['_id'] == '64cbb4b39ddf1fe6d70b7613')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>&nbsp;{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                    
                                @endif
                             

                                @if($submodule['_id'] == '64cbb4eb9ddf1fe6d70b7614')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-calculator"></i>&nbsp;{{ $submodule['name_sub_module'] }}  &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                   
                                @endif

                            @endforeach

                        </ul>
                    </li>

                @endif
               
            
                {{-- MODULO CAPACITACION CORPORATIVO --}}

                @if ($module['_id'] == '652fee5f4624c8770c0d8ed5' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-graduation-cap"></i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)
                            
                                @if ($submodule['_id'] == '652fef704624c8770c0d8ed6' && $submodule['status'] == true )    
                                    <li @click="menu=56" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '652fef704624c8770c0d8ed6' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '652fefab4624c8770c0d8ed7' && $submodule['status'] == true )    
                                    <li @click="menu=57" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '652fefab4624c8770c0d8ed7' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif                             
                                    
                                @if ($submodule['_id'] == '652fefc14624c8770c0d8ed8' && $submodule['status'] == true )    
                                    <li @click="menu=58" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '652fefc14624c8770c0d8ed8' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                            @endforeach

                        </ul>
                    </li>

                    @elseif($module['_id'] == '652fee5f4624c8770c0d8ed5' && $module['status'] == false)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-heartbeat"></i>&nbsp;{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if ($submodule['_id'] == '652fef704624c8770c0d8ed6')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  
                                
                                @if ($submodule['_id'] == '652fefab4624c8770c0d8ed7')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif 

                                @if ($submodule['_id'] == '652fefc14624c8770c0d8ed8')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-cogs"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif 
                                                                
                            @endforeach

                        </ul>
                    </li>

                @endif

                {{-- MODULO INVENTORY --}}

                @if ($module['_id'] == '671be3469dfc98fd7a02a014' && $module['status'] == true)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-folder-open"></i>{{ $module['name_module'] }}</a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)
                            
                                @if ($submodule['_id'] == '671be4ad9dfc98fd7a02a015' && $submodule['status'] == true )    
                                    <li @click="menu=68" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-pencil-square-o"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '671be4ad9dfc98fd7a02a015' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                                @if ($submodule['_id'] == '671be4c39dfc98fd7a02a016' && $submodule['status'] == true )    
                                    <li @click="menu=69" class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }}</a>
                                    </li>

                                    @elseif ($submodule['_id'] == '671be4c39dfc98fd7a02a016' && $submodule['status'] == false)

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>

                                @endif

                            @endforeach

                        </ul>
                    </li>

                    @elseif($module['_id'] == '671be3469dfc98fd7a02a014' && $module['status'] == false)

                    <li class="nav-title bg-google-plus"></li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-title nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-heartbeat"></i>&nbsp;{{ $module['name_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                        <ul class="nav-dropdown-items">

                            @foreach ($module['sub_modules'] as $submodule)

                                @if ($submodule['_id'] == '671be4ad9dfc98fd7a02a015')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-book"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif  
                                
                                @if ($submodule['_id'] == '671be4c39dfc98fd7a02a016')    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="nav-icon fa fa-list-alt"></i>{{ $submodule['name_sub_module'] }} &nbsp; <i class="fa fa-lock"></i></a>
                                    </li>
                                @endif
                                                                
                            @endforeach

                        </ul>
                    </li>

                @endif
            
            @endforeach    
            
            <a href="{{ $partner['logo'] }}" target="_blank">
             <li align="center"><img  src="{{ $partner['logo'] }}" width="180" height="50" alt="CoreUI Logo" style="margin-top:35px"></li>
            </a>

        </ul>
        <ul>
            
        </ul>
    </nav>
    <div align="center">
        
    </div>
</div>
<!--- NO ELIMINAR PARA PERMISOS Y ROLES -->
<!-- @if(Auth::user()->hasRole('test-1') && $user->hasRole('test-1'))  -->
<!--  @endif -->

