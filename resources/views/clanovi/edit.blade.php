

<h1>UREDI CLANA</h1>
<form action="{{route('clanovi.update', $clan->id)}}" method="POST">
    @csrf
    @method('PUT')
    Ime: <input type="text" name="ime" value="{{$clan->ime}}" required>
    Prezime: <input type="text" name="prezime" value="{{$clan->prezime}}" required>
    Email: <input type="email" name="email" value="{{$clan->email}}" required>

    <button type="submit">AZURIRAJ PODATKE O CLANU</button>
</form>