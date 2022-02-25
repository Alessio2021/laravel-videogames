<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Videogame;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            $new_videogame = new Videogame();
            $new_videogame->title = $faker->words(2, true);
            $new_videogame->genre = $faker->word();
            $new_videogame->developer = $faker->name();
            $new_videogame->publisher = $faker->name();
            $new_videogame->photo = $faker->imageUrl(640, 480);
            $new_videogame->pegi = $faker->numberBetween(7, 18);
            $new_videogame->price = $faker->randomFloat(2, 10, 200);
            $new_videogame->save();
        }
    }
}
