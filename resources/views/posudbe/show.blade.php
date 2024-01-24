<h1>DETALJI POSUDBE</h1>

<p>CLAN: {{$posudba->clan->ime}}   {{$posudba->clan->prezime}} </p>

<p>KNJIGA: {{$posudba->knjiga->naslov}}       {{$posudba->knjiga->autor}} </p>

<p>DATUM POSUDBE: {{$posudba->datum_posudbe}}</p>

@if($posudba->datum_povrata)
<p>DATUM POVRATA:  {{$posudba->datum_povrata}}</p>

@else
<p>KNJIGA JOS NIJE VRACENA!</p>

@endif