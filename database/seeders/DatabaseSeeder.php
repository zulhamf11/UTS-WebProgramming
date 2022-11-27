<?php

namespace Database\Seeders;
use App\Models\Publisher;
use App\Models\Categories;
use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Publisher::factory(10)->create([]);
        // Book::factory(10)->create([
        //     "publisher_id"=>'1'
        // ]);
        // Categories::factory(10)->create();
        $this->call([
            PublisherSeeder::class,
            CategorySeeder::class,
            BooksSeeder::class,
            BookCategorySeeder::class,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
