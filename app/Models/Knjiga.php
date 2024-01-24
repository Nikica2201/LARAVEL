<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    use HasFactory;

    protected $table="knjige";
    protected $fillable=['naslov', 'autor', 'kolicina'];

    public function posudbe()
    {
        return $this->hasMany(Posudba::class, 'knjiga_id');
    }
}
