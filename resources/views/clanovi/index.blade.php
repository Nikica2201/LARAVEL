

<h1>CLANOVI</h1>
<a href="{{route('clanovi.create')}}">DODAJ NOVOG CLANA</a>

<ul>
    @foreach($clanovi as $clan)
    <li>
        {{$clan->ime}} {{$clan->prezime}}
        <a href="{{route('clanovi.show', $clan)}}">PRIKAZI DETALJE</a>
        <a href="{{route('clanovi.edit', $clan)}}">UREDI CLANA</a>
        <form action="{{route('clanovi.destroy', $clan)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">OBRISI CLANA</button>
        </form>
    </li>
    @endforeach
</ul>