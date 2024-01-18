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
        $rows = config('comics');

        foreach ($rows as $row) {
            $comic = new Comic();
            $comic->title = $row['title'];
            $comic->description = $row['description'];
            $comic->thumb = $row['thumb'];
            $comic->price = $row['price'];
            $comic->series = $row['series'];
            $comic->sale_date = $row['sale_date'];
            $comic->type = $row['type'];

            $comic->save();
        }
    }
}
