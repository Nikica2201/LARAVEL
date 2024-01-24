<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posudba extends Model
{
    use HasFactory;

    protected $table="posudbe";
    protected $fillable=['clan_id', 'knjiga_id', 'datum_posudbe', 'datum_povrata'];

    public function clan()
    {
        return $this->belongsTo(Clan::class, 'clan_id');
    }

    public function knjiga()
    {
        return $this->belongsTo(Knjiga::class, 'knjiga_id');
    }
}

//$datum=$_POST['datum'];
//$objektDatum=DateTime::CreateFromFormat('Y-m-d', $datum);//createfromformat je brojac sekundi
//$formatiraniDatum=$objektDatum->format('d-m-Y');

