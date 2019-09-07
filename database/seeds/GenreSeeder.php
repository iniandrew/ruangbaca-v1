<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Fantasi',
            'category_id' => 1
        ]);

        Genre::create([
            'name' => 'Horror',
            'category_id' => 2
        ]);

        Genre::create([
            'name' => 'Thiller',
            'category_id' => 1
        ]);

        Genre::create([
            'name' => 'Romance',
            'category_id' => 1
        ]);

    }
}
