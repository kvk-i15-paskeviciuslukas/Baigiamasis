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
                <ul>
                    <li><a href="login">Prisijungti</a></li>
                    <li><a href="register">Registruotis</a></li>
                </ul>
        </div>
        <div class="pradzios-straipsnis">
            <div class="straipsnis">
                <h3 class="straipsnio-pav">Lorem Ipsum</h3>
                 <div class="straipsnio-tekstas">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id sollicitudin mauris, a placerat tellus.
                    Donec efficitur, neque malesuada congue vestibulum, turpis quam suscipit tellus, ac rutrum purus magna 
                    sit amet libero. Proin ipsum felis, lobortis quis sem eget, malesuada fermentum risus. Integer non 
                    feugiat lacus, nec viverra ex. Nulla sit amet sapien facilisis, fringilla nibh sed, vestibulum eros.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod tortor scelerisque, tempus
                    dolor sit amet, pretium nibh. Ut eros sem, posuere nec volutpat sit amet, efficitur ac dolor. Nulla
                    laoreet eros quis hendrerit sagittis. Cras id dignissim velit, a porttitor ex.
                </div>
            </div>
            <div class="straipsnis">
                <h3 class="straipsnio-pav">Lorem Ipsum</h3>
                <div class="straipsnio-tekstas">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id sollicitudin mauris, a placerat tellus.
                    Donec efficitur, neque malesuada congue vestibulum, turpis quam suscipit tellus, ac rutrum purus magna 
                    sit amet libero. Proin ipsum felis, lobortis quis sem eget, malesuada fermentum risus. Integer non 
                    feugiat lacus, nec viverra ex. Nulla sit amet sapien facilisis, fringilla nibh sed, vestibulum eros.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod tortor scelerisque, tempus
                    dolor sit amet, pretium nibh. Ut eros sem, posuere nec volutpat sit amet, efficitur ac dolor. Nulla
                    laoreet eros quis hendrerit sagittis. Cras id dignissim velit, a porttitor ex.
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-tekstas">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id neque eget odio 
                gravida semper eu ut quam.
            </div>
        </div>
    </body>

</html>
