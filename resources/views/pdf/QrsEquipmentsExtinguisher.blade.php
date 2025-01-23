<!DOCTYPE html>
<style>
    @page{margin-top:0.6cm;margin-left: 1.2cm;margin-right:-0.6cm;}    
</style>
<html lang="es">
    <head>
        <title>{{$information['sucursal']['name']}}</title>
    </head>
    @foreach($information['equipments'] as $equipment)
        <div align="center" class="card" style="page-break-after:always">
            <div class="col" align="left" style="margin-left:-50px">
            <img src="{{$equipment['qr']}}" alt="" width="120px" height="120px" style="margin-top: -16px;line-height:1px"> 
            </div>
            <div style="margin-left: 15px;margin-top:-45px">
            <div class="col" align="right" style="margin-top:-100px;margin-left:50px;text-align:left">
                <p>
                    <div class="row">
                        <label style="font-size: 10px;font-family:Arial, Helvetica, sans-serif">Tipo de Extintor:&nbsp;<b style="font-size-adjust: initial;font-size:9px">{{$equipment['subsystem_id']}}</b></label>
                    </div>
                    <div class="row">
                        <label style="font-size: 10px;font-family:Arial, Helvetica, sans-serif">Ubicación:&nbsp;<b style="font-size-adjust: initial;font-size:9px">{{$equipment['name_equipment']}}</b></label>
                    </div>
                    <div class="row">
                        <label style="font-size: 10px;font-family:Arial, Helvetica, sans-serif">Cliente:&nbsp;<b style="font-size-adjust: initial;font-size:9px">{{$equipment['client']}}</b></label>
                    </div>
                    <div class="row">
                        <label style="font-size: 10px;font-family:Arial, Helvetica, sans-serif">Sede:&nbsp;<b style="font-size-adjust: initial;font-size:9px">{{$equipment['name_sucursal']}}</b></label>
                    </div>
                </p>
            
            </div>
            </div>
        </div>
    @endforeach
</html>