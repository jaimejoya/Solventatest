<!DOCTYPE html>
<html>

    <body>
        @foreach ($auxPartner as $partner)
            <li>
                {{$partner['name_partner']}}
            </li>
        @endforeach
    </body>

</html>