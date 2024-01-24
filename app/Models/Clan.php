<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    use HasFactory;

    protected $table="clanovi";
    protected $fillable=['ime', 'prezime', 'email'];

    public function posudbe()
    {
        return $this->hasMany(Posudba::class, 'clan_id');
    }
}
