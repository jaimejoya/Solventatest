<!DOCTYPE html>
<style>
    @page{margin-top:0.4cm;margin-left: 0.1cm;margin-right:0.1cm;margin-bottom: 0.1cm;}    
</style>
<html lang="es">
    <head>
        <title>{{$information['sucursal']['name']}}</title>
    </head>
    @foreach($information['equipments'] as $equipment)
        <div align="center" class="card" style="page-break-after:always">
            <img src="{{$equipment['qr']}}" alt="" width="100px" height="100px"> 
        </div>
    @endforeach
</html>