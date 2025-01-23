<!DOCTYPE html>
<style>
    @page{margin-top:0.9cm;margin-left: 1.2cm;margin-right:0.3cm;}    
</style>
<html lang="es">
    <head>
        <title>{{$newData['sucursal_name']}}</title>
    </head>
    @foreach($newData['equipmentsEnd'] as $equipment)

        @if(!empty($equipment['qr']))
        <div align="center" class="card" style="page-break-after:always">
            <div class="col" align="left" style="margin-left:-53px">
            <img src="{{$equipment['qr']}}" alt="" width="100px" height="100px" style="margin-top: -16px;line-height:1px"> 
            </div>
            <div style="margin-left: 15px;margin-top:-25px">
            <div class="col" align="right" style="margin-top:-100px;margin-left:30px;text-align:left">
                <p>
                    <div class="row">
                        <label style="font-size: 10px;font-family:Arial, Helvetica, sans-serif">Sistema:&nbsp;<b style="font-size-adjust: initial;font-size:9px">{{$equipment['system']}}</b></label>
                    </div>
                    <div class="row">
                        <label style="font-size: 10px;font-family:Arial, Helvetica, sans-serif">Subsistema:&nbsp;<b style="font-size-adjust: initial;font-size:9px">{{$equipment['subsystem']}}</b></label>
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
        @endif
    @endforeach
</html>