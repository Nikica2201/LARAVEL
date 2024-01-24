@if(session('error'))
    {{session('error')}}
@endif

@if(session('success'))
    {{session('success')}}
@endif
<h1>KNJIGE</h1>
<a href="{{route('knjige.create')}}">DODAJ NOVU KNJIGU</a>

<ul>
    @foreach($knjiga as $knjiga)
    <li>
        {{$knjiga->naslov}}         {{$knjiga->autor}}
        <a href="{{route('knjige.show', $knjiga)}}">PRIKAZI DETALJE O KNJIZI</a>
        <a href="{{route('knjige.edit', $knjiga)}}">UREDI KNJIGU</a>
        <form action="{{route('knjige.destroy', $knjiga)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">OBRISI KNJIGU</button>
        </form>
    </li>
    @endforeach
</ul>