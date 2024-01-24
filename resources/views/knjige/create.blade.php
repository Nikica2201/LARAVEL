<h1>DODAJ NOVU KNJIGU</h1>
<form action="{{route('knjige.store')}}" method="POST">
    @csrf
    Naslov: <input type="text" name="naslov" required>
    Autor: <input type="text" name="autor" required>
    Kolicina: <input type="number" name="kolicina" required>
    

    <button type="submit">SPREMI PODATKE O KNJIZI</button>
</form>