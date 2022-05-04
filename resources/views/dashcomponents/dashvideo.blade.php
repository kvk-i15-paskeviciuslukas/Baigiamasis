<div class="dasho-startview">
    @if(Session::has('messageVideo'))
        <div class="alertSuccess">{{Session::get('messageVideo')}}</div>
    @endif
    <h2 class="dasho-strpav">Įrašo vaizdavimas</h2>
    <div class="dasho-strtext">
        <p>Čia galite įkelti ir pasirinkti norimą atvaizduoti vaizdo įrašą.<br>
        Norėdami įkelti įrašą, pasirinkite žemiau esančiame failų įkėlime norimą įkelti įrašą ir spauskite <i>Įkelti</i></p>
        <form action="video/store" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <input type="file" name="file" required>
        </div>
        <button type="submit">Įkelti</button>
    </form>
    <p>Jau įkeltus įrašus galite peržiūrėti paspaudę ant žemiau pateikto mygtuko.</p>
    <button class="dasho-mygt" onclick="window.location='{{ url('dashboard/video/show') }}'">Peržiūrėti įkeltus įrašus</button>
    </div>
</div>