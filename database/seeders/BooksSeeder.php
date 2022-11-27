<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'publisher_id' => 1,
            'title' => 'The Paris Plot',
            'author' => 'Joseph Aragon',
            'year' => 2022,
            'synopsis' => "Izzy Stone, a stunning secret",
            'image' => "https://images-workbench.99static.com/nBOV9STN2a5z3M_OJkR82aUVMmA=/99designs-contests-attachments/75/75889/attachment_75889990"
        ]);

        // Book::create([
        //     'publisher_id' => 1,
        //     'title' => 'Origin Of Honor',
        //     'author' => 'Geraldion',
        //     'year' => 2015,
        //     'synopsis' => "War Begin in American",
        //     'image' => "https://images-workbench.99static.com/Lf_CaQMyRJIpihorWD5L1MoypNA=/http://s3.amazonaws.com/projects-files/70/7051/705105/b7191f43-b508-4469-9fc5-30417f1e9e8e.jpg"
        // ]);


        Book::create([
            'publisher_id' => 2,
            'title' => 'Web Of Darkness',
            'author' => 'Paris Andren',
            'year' => 2012,
            'synopsis' => " The darkness in the dark web",
            'image' => "https://images-workbench.99static.com/eNL_vTyk8IaBW7A-rbcl5PqltmI=/99designs-contests-attachments/72/72198/attachment_72198771"
        ]);

        Book::create([
            'publisher_id' => 2,
            'title' => 'Chasing Rain',
            'author' => 'Brandt Legg',
            'year' => 2009,
            'synopsis' => "top of stanford-class made him a billionaire.",
            'image' => "https://images-workbench.99static.com/8qM1K8zpwYgx6Uj8aOR3YPj8bvI=/http://s3.amazonaws.com/projects-files/59/5957/595795/5b924ba0-4b61-45c1-bed1-9cc075143856.jpg"
        ]);

        // Book::create([
        //     'publisher_id' => 3,
        //     'title' => 'Cat Chaser',
        //     'author' => 'Adam Maxwell',
        //     'year' => 2012,
        //     'synopsis' => "A modern detective",
        //     'image' => "https://images-workbench.99static.com/FvFCteAEJLuueZhPpdOA1fc4a3Q=/99designs-contests-attachments/81/81598/attachment_81598142"
        // ]);

        Book::create([
            'publisher_id' => 3,
            'title' => 'Chasing Dirt',
            'author' => 'Brandt Legg',
            'year' => 2021,
            'synopsis' => "finally, a solution to end hunger and proverty",
            'image' => "https://images-workbench.99static.com/hMrD0njZIYgBVtnP9pyTXsnsxeM=/http://s3.amazonaws.com/projects-files/59/5957/595795/c2a68615-d37d-4df9-ad36-f81608f9cf1a.jpg"
        ]);

        Book::create([
            'publisher_id' => 4,
            'title' => 'Chasing Fire',
            'author' => 'Brandt Legg',
            'year' => 2014,
            'synopsis' => "a billionaire and a vanished chinese defector on the run",
            'image' => "https://images-workbench.99static.com/HMLmblRC6TajaZmsmIw3SOie5Ow=/http://s3.amazonaws.com/projects-files/59/5957/595795/82577e8f-cc25-45cf-84a5-0a2760a93e14.jpg"
        ]);

        Book::create([
            'publisher_id' => 4,
            'title' => 'The Secret of The Stones',
            'author' => 'Ernest Dempsey',
            'year' => 2020,
            'synopsis' => "A four thousand year old mystery lurk in the hills of georgia",
            'image' => "https://images-workbench.99static.com/9aMv5IzjPb6JKNlrRX_47rb0E60=/http://s3.amazonaws.com/projects-files/29/2919/291915/4f971bfe-2ea6-4ff7-8c5a-7eba039fa15c.jpg"
        ]);

    }
}
