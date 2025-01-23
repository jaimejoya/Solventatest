<!DOCTYPE html>
<html lang="es">
<head>
    <title>{{ $template_certificate['name_submodule'] }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @page {
            margin: 0;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: Arial, sans-serif;
            background: url('{{ $template_certificate['template_certificate'] }}') no-repeat center center;
            background-size: cover;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .certificate {
            width: 80.5%;
            height: 82%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            margin-top: 53px;
            margin-left: 92px;
            box-sizing: border-box;
            /* background: rgba(213, 213, 213, 0.8); Opcional, para ver el fondo */
        }

        .certificate img.logo {
            width: 200px;
            height: 80px;
        }

        .certificate img.ipmx-logo {
            width: 200px;
            height: 80px;
            margin-top: -10px;
        }

        .certificate h1 {
            font-size: 38pt;
            color: #135E96;
            margin-top: -1px;
        }

        .certificate h2 {
            font-size: 16pt;
            color: #767171;
            margin: 10px 0;
        }

        .certificate p {
            font-size: 16pt;
            color: #767171;
            margin: 5px 0;
        }

        .certificate-text-1 {
            color: #767171;
            margin: 20px auto !important; 
            width: 650px; 
            word-wrap: break-word; 
            text-align: center;
            display: block; 
        }

        .certificate-text-2 {
            color: #767171;
            margin: 20px auto !important; 
            width: 650px; 
            word-wrap: break-word; 
            text-align: center;
            display: block; 
            height: 60px;
        }

        .certificate .user-aprobad {
            font-size: 28pt;
            color: #135E96;
            font-weight: bold;
            margin: 20px 0;
            text-transform: uppercase;
        }

        .certificate img.signature {
            width: 150px;
            height: 70px;
            object-fit: contain;
        }

        .certificate .footer {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
        }

        .footer .left {
            text-align: left;
        }

        .footer .right {
            text-align: right;
        }

        .footer p {
            font-size: 1em;
            margin: 10px 0;
        }
        
        .footer p.name-user {
            font-size: 14pt !important;
            margin: 10px 0;
            color: black;
        }
        .footer p.role-partner {
            font-size: 10pt !important;
            margin: -10px 0;
            color: black;
        }
    </style>
</head>
<body>
    @php
        use Carbon\Carbon;
        $formattedDate = Carbon::parse($template_certificate['date_expedition'])->format('d-m-Y');
    @endphp
    <div class="certificate">
        <img src="{{ $template_certificate['logo'] }}" alt="Logo Partner" class="logo">
        <h1>{{$template_certificate['title_certificate']}}</h1>
        <p class="certificate-text-1"><strong>{{ $template_certificate['name_partner'] }}</strong> Por haber culminado satisfactoriamente el {{$formattedDate}} otorga el presente certificado a:</p>
        <div class="user-aprobad">{{ $template_certificate['user_aprobad'] }}</div>
        <p class="certificate-text-2">{{ $template_certificate['description_certificate'] }} <strong>{{ ucwords(strtolower($template_certificate['name_submodule'])) }}</strong> del software</p>
        <img src="img/brand/logo.png" class="ipmx-logo">
        <div class="footer">
            <div class="center">
                <img src="{{ $template_certificate['user_signature'] }}" alt="Signature" class="signature">
            </div>
            <div class="center">
                <p class="name-user">{{ $template_certificate['name_user'] }}</p>
                <p class="role-partner">{{ $template_certificate['role_name'] }} <br> {{ $template_certificate['name_partner'] }}</p>
                <p></p>
            </div>
        </div>
    </div>
</body>
</html>
