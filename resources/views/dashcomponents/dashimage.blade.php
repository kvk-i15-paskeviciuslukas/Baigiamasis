<div class="dasho-startview">
    @if(Session::has('messageImage'))
        <div class="alertSuccess">{{Session::get('messageImage')}}</div>
    @endif
    <h2 class="dasho-strpav">Nuotraukos vaizdavimas</h2>
    <div class="dasho-strtext">
        <p>Čia galite įkelti ir pasirinkti norimą atvaizduoti nuotrauką.<br>
        Norėdami įkelti nuotrauką, pasirinkite žemiau esančiame failų įkėlime norimą įkelti nuotrauką ir spauskite <i>Įkelti</i></p>
        <form action="image/store" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <input type="file" name="file" required>
        </div>
        <button type="submit">Įkelti</button>
    </form>
    <p>Jau įkeltas nuotraukas galite peržiūrėti paspaudę ant žemiau pateikto mygtuko.</p>
    <button class="dasho-mygt" onclick="window.location='{{ url('dashboard/image/show') }}'">Peržiūrėti įkeltas nuotraukas</button>
    </div>
</div>