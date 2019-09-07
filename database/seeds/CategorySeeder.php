<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Fiksi',
            'slug' => 'fiksi'
        ]);

        Category::create([
            'name' => 'Non Fiksi',
            'slug' => 'non-fiksi'
        ]);
    }
}
