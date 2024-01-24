<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clan;

class ClanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clan::create(['ime'=> 'Ime3', 'prezime'=> 'Prezime3', 'email'=>'email@waaa.com']);
        Clan::create(['ime'=> 'Ime2', 'prezime'=> 'Prezime2', 'email'=>'email@rraa.com']);
    }
}
