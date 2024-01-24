<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Knjiga;

class KnjigaFactory extends Factory
{
    protected $model=Knjiga::class;
    
    public function definition ()
    {
        
        return 
        ['naslov'=>$this->faker->sentence,
    'autor'=>$this->faker->name,
'kolicina'=>$this->faker->numberBetween(1,10),];
    } 
}
