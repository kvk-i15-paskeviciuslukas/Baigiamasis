<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

        <title>Splash</title>
    </head>
    <body>
        <div class="header">
            <label>Splash</label>
                <ul class="header">
                    <li class="header"><a class="header" href="login">Prisijungti</a></li>
                    <li class="header"><a class="header" href="register">Registruotis</a></li>
                </ul>
        </div>
        <div class="pradzios-straipsnis">
            <div class="straipsnis">
                <h3 class="straipsnio-pav">Sveiki atvykę į Splash!</h3>
                 <div class="straipsnio-tekstas">
                    Splash užsiima turinio atvaizdavimu nutolusiame ekrane. Tam įgyvendinti naudojame Raspberry Pi 4 mikro
                    kompiuterius, kurių dėka, viskas vyksta sklandžiai ir patogiai. <b>Splash Jums siūlo saugų, patogų ir patrauklią kainą
                     turintį sprendimą.</b> Mes išsprendžiame Jums iškilusias problemas kol Jūs galite koncentruotis ties savo pasirinkto
                     turinio atvaizdavimu.<br> <b>Mums svarbiausia - Jūsų norų įgyvendiminas!</b><br>Dėl platesnių detalių galite kreiptis
                     į mūsų elektroninį paštą: info@splash.lt .<br> Visada lauksime Jūsų!
                </div>
            </div>
            <div class="straipsnis">
                <div class="straipsnio-tekstas">
                    <img class="straipsnio-foto" src="{{ url('/img/welcomefoto.jpg') }}" alt="Welcomeft">
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-tekstas">
                Visos teisės saugomos © Splash 2022
            </div>
        </div>
    </body>

</html>
