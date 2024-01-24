

<h1>DODAJ NOVOG CLANA</h1>
<form action="{{route('clanovi.store')}}" method="POST">
    @csrf
    Ime: <input type="text" name="ime" required>
    Prezime: <input type="text" name="prezime" required>
    Email: <input type="email" name="email" required>

    <button type="submit">SPREMI CLANA U BAZU</button>
</form>