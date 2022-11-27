<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'name' => 'Romance'
        ]);

        Categories::create([
            'name' => 'Fiksi'
        ]);

        Categories::create([
            'name' => 'Horror'
        ]);

        Categories::create([
            'name' => 'Action'
        ]);

        Categories::create([
            'name' => 'Thriller'
        ]);

        Categories::create([
            'name' => 'Comedy'
        ]);

        Categories::create([
            'name' => 'Drama'
        ]);

        Categories::create([
            'name' => 'Cartoon'
        ]);

    }
}
