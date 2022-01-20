<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    
    <link rel="stylesheet" type="text/css" href="{{ url('/css/auth.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

</head>
<body>
    <div class="mainas">
        <form action="{{route('register-user')}}" method="POST">
        <div class="redirectai-pradinis">
            <a href="/">Grįžti į pagrindinį puslapį.</a>
        </div>
        <h2>Registracija</h2>
            @if(Session::has('success'))
            <div class="alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert-fail">{{Session::get('fail')}}</div>
            @endif
            @csrf
                <div class="inputai">
                        <div class="inputas-bendras">
                            <label>Vartotojo vardas</label>
                            <input name="vardas" type="text" placeholder="Vartotojo vardas" value="{{old('vardas')}}"></input>
                            <span class="text-danged">@error('vardas') {{$message}} @enderror</span>
                        </div>
                        <div class="inputas-bendras">
                            <label>El. paštas</label>
                            <input name="el_pastas" type="text" placeholder="Elektroninis paštas" value="{{old('el_pastas')}}"></input>
                            <span class="text-danged">@error('el_pastas') {{$message}} @enderror</span>
                        </div>
                        <div class="inputas-bendras">
                            <label>Slaptažodis</label>
                            <input name="slaptazodis" type="password" placeholder="Slaptažodis"></input>
                            <span class="text-danged">@error('slaptazodis') {{$message}} @enderror</span>
                        </div>
                </div>
                <button type="submit">Registruotis</button>
                <div class="redirectai">
                    <a href="login">Jau turite paskyrą? Paspauskite čia, kad prisijungti.</a>
                </div>
        </form> 
    </div>
</body>
</html>