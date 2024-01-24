

<h1>UREDI POSUDBU</h1>

<form action="{{route('posudbe.update', $posudba->id)}}" method="POST">
@csrf
@method('PUT')

Član: 
    <select name="clan_id" id="clan_id">
        @foreach ($clanovi as $clan)
            <option value="{{$clan->id}}" {{$posudba->clan_id==$clan->id ? 'selected':""}}>{{$clan->ime}} {{$clan->prezime}}</option>
        @endforeach
    </select>

    Knjiga: 
    <select name="knjiga_id" id="knjiga_id">
        @foreach ($knjiga as $knjiga)
            <option value="{{$knjiga->id}}" {{$posudba->knjiga_id==$knjiga->id ? 'selected' : ""}}>{{$knjiga->naslov}}</option>
        @endforeach
    </select>

    Datum posudbe: 
    <input type="date" name="datum_posudbe" id="datum_posudbe" value="{{$posudba->datum_posudbe}}" required>

    Datum vraćanja:
    <input type="date" name="datum_povrata" id="datum_povrata" value="{{$posudba->datum_povrata}}" required>

    <button type="submit">POSUDI KNJIGU</button>


</form>