<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::create([
            'book_id' => 1,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 2,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 3,
            'category_id' => 3
        ]);

        BookCategory::create([
            'book_id' => 4,
            'category_id' => 4
        ]);

        BookCategory::create([
            'book_id' => 1,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 2,
            'category_id' => 3
        ]);

        BookCategory::create([
            'book_id' => 3,
            'category_id' => 4
        ]);

        BookCategory::create([
            'book_id' => 3,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 3,
            'category_id' => 4
        ]);

        
    }
}
