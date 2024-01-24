<h1>NOVA POSUDBA</h1>
<form action="{{route('posudbe.store')}}" method="POST">
    @csrf
   
    CLAN: <select name="clan_id" id="clan_id">
        <option value="">ODABERITE CLANA</option>
        @foreach ($clanovi as $clan)
        <option value="{{$clan->id}}">{{$clan->ime}} {{$clan->prezime}}</option>
        @endforeach

    </select>
    KNJIGA: <select name="knjiga_id" id="knjiga_id">
        @foreach ($knjiga as $knjiga)
        <option value="{{$knjiga->id}}">{{$knjiga->naslov}} {{$knjiga->autor}}</option>
        @endforeach

    </select>


    DATUM POSUDBE: <input type="date" name="datum_posudbe" id="datum_posudbe" value="{{date('Y-m-d')}}" required>

    <button type="submit">POSUDI KNJIGU</button>
</form>