

<h1>POSUDBE</h1>

<a href="{{route('posudbe.create')}}">Nova posudba</a>
<ul>
    @foreach($posudbe as $posudba)
        <li>
            {{$posudba->clan->ime}} {{$posudba->clan->prezime}} {{$posudba->knjiga->naslov}}
            Posuđeno dana: {{$posudba->datum_posudbe}}

            <a href="{{route('posudbe.show', $posudba->id)}}">PRIKAŽI DETALJE</a>
            <a href="{{route('posudbe.edit', $posudba->id)}}">UREDI POSUDBU</a>

            <form action="{{route('posudbe.destroy', $posudba->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">OBRIŠI POSUDBU</button>
            </form>
        </li>
        @endforeach

</ul>