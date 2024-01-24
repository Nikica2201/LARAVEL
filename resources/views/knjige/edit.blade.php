<h1>UREDI KNJIGU</h1>
<form action="{{route('knjige.update', $knjiga->id)}}" method="POST">
    @csrf
    @method('PUT')
    Naslov: <input type="text" name="naslov" value="{{$knjiga->naslov}}" required>
    Autor: <input type="text" name="autor" value="{{$knjiga->autor}}" required>
    Kolicina: <input type="number" name="kolicina" value="{{$knjiga->kolicina}}" required>
    

    <button type="submit">AZURIRAJ KNJIGU</button>
</form>