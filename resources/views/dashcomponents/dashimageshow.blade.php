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
    <div class="dasho-startview">
        <a href="{{url('dashboard/image')}}">Grįžti atgal</a>
        <table class="dasho-table">
            <tr class="dasho-table-tr">
                <td class="dasho-table-td">ID</td>
                <td class="dasho-table-td">Pavadinimas</td>
                <td class="dasho-table-td">Dydis</td>
                <td class="dasho-table-td">Funkcijos</td>
            </tr>
            @foreach ($imgData as $image)
            <tr class="dasho-table-tr">
                <td class="dasho-table-td">{{$image['id']}}</td>
                <td class="dasho-table-td">{{$image['pavadinimas']}}</td>
                <td class="dasho-table-td">{{$image['dydis']}}</td>
                <td class="dasho-table-td">
                    <a href="{{url('dashboard/image/show/'.$image->id)}}" class="dasho-vaizduotmygt dasho-vaizduotmygt">Vaizduoti ekrane</a>
                    <a href="{{url('dashboard/image/delete/'.$image->id)}}" class="dasho-istrintmygt dasho-vaizduotmygt">Ištrinti</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>