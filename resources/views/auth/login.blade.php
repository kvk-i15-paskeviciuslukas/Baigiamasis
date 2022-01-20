<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungti</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/auth.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

</head>
<body>
    <div class="mainas">
    <form action="{{route('login-user')}}" method="POST">
    <div class="redirectai-pradinis">
        <a href="/">Grįžti į pagrindinį puslapį.</a>
    </div>
        <h2>Prisijungimas</h2>
        @if(Session::has('fail'))
            <div class="alert-fail">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div class="inputai">
            <div class="inputas-bendras">
                <label>Vartotojo vardas</label>
                <input type="text" placeholder="Vartotojo vardas" name="vardas" value="{{old('vardas')}}"></input>
                <span class="text-danged">@error('vardas') {{$message}} @enderror</span>
            </div>
            <div class="inputas-bendras">
                <label>Slaptažodis</label>
                <input type="password" placeholder="Slaptažodis" name="slaptazodis"></input>
                <span class="text-danged">@error('slaptazodis') {{$message}} @enderror</span>
            </div>
        </div>
        <button type="submit">Prisijungti</button>
        <div class="redirectai">
            <a href="register">Neturite paskyros? Paspauskite čia, kad ją sukurtumėte.</a>
        </div>
    </form>
    </div>
</body>
</html>