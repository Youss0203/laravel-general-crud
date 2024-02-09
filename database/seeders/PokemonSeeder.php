<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++){
            $pokemon=new Pokemon();
            $pokemon->name=$faker->name();
            $pokemon->species=$faker->words(1,true);
            $pokemon->height=$faker->randomFloat(1,1,20);
            $pokemon->weight=$faker->randomFloat(1,1,20);
            $pokemon->abilities=$faker->words(1,true);
            $pokemon->img_url = $faker->unique()->imageUrl(400,600, 'pokemons');
            $pokemon->hp=$faker->numberBetween(1, 30);
            $pokemon->attack=$faker->numberBetween(1, 30);
            $pokemon->defense=$faker->numberBetween(1, 30);
            $pokemon->speed_attack=$faker->numberBetween(1, 30);
            $pokemon->speed_defence=$faker->numberBetween(1, 30);
            $pokemon->speed=$faker->numberBetween(1, 30);
            $pokemon->save();
        }
        

    }
}
