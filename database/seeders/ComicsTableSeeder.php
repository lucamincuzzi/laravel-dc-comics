<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $comic = new Comic();
            $comic->title = $faker->word();
            $comic->thumb = 'my-comic-image';
            $comic->price = $faker->randomFloat(2, 0, 50);
            $comic->series = $faker->word();
            $comic->sale_date = $faker->dateTimeBetween('-20 years', '-1 week');
            $comic->type = $faker->word();
    
            $comic->save();
        }
    }
}
