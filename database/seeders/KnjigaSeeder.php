<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Knjiga;

use Faker\Factory as Faker;

class KnjigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
      $faker=Faker::create();

      foreach (range(1,5) as $index)
      {
        Knjiga::create(['naslov'=>$faker->sentence(3),
        'autor'=>$faker->name,
        'kolicina'=>$faker->numberBetween(1,50)]);
      }
    }
    
}
