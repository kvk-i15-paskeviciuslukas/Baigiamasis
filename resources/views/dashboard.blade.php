<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
            <label>Splash</label>
            <ul class="header">
                <li class="header vardas-dash">{{$data->vardas}}</li>
            </ul>
    </div>
    <div class="dashflex">
        <div class="sidebar">
            <ul class="sidebar_ul">
                <li class="sidebar_li"><a class="sidebar_a" href="{{url('dashboard/home')}}">Namai</a></li>
                <li class="sidebar_li"><a class="sidebar_a" href="{{url('dashboard/image')}}">Vaizduoti nuotrauką</a></li>
                <li class="sidebar_li"><a class="sidebar_a" href="{{url('dashboard/video')}}">Vaizduoti įrašą</a></li>
                <li class="sidebar_li"><a class="sidebar_a" href="{{url('dashboard/help')}}">Pagalba</a></li>
                <li class="sidebar_li"><a class="sidebar_a" href="logout">Atsijungti</a></li>
                <li class="sidebar_footer">Splash 2022</li>
            </ul>
        </div>
        <div class="dashinfo">
            @if(request()->is("dashboard/home"))
                @include('dashcomponents.dashhome')
            @elseif(request()->is("dashboard/image"))
                @include('dashcomponents.dashimage')
            @elseif(request()->is("dashboard/video"))
                @include('dashcomponents.dashvideo')
            @elseif(request()->is("dashboard/help"))
                @include('dashcomponents.dashhelp')
            @endif
        </div>
    </div>
</body>
</html>