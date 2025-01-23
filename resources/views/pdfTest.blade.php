<ol>
@foreach($sucursalsGet as $sucursal)
    
    <li><b>{{$sucursal['_id']}} &nbsp;&nbsp; {{$sucursal['name']}}</b></li>
    
    
@endforeach
</ol>