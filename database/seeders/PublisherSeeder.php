<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Lorem Pisum',
            'address' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit ",
            'phone' => "021021312",
            'email' => "loremipsum@example.com",
            'image' => "https://img2.pngdownload.id/20180705/wyq/kisspng-logo-publishing-bokfrlag-royalty-free-az-5b3e43259aabb5.2876423415308070776335.jpg"
        ]);

        Publisher::create([
            'name' => 'Publisherss',
            'address' => "ed ut perspiciatis unde omnis iste natus error sit voluptatem",
            'phone' => "0123012312",
            'email' => "publishers@example.com",
            'image' => "https://img2.pngdownload.id/20180419/fle/kisspng-logo-publishing-book-symbol-publisher-logo-5ad9580e6d41f0.1304877115241932944475.jpg"
        ]);

        Publisher::create([
            'name' => 'McWood Publishing',
            'address' => "magni dolores eos qui ratione voluptatem sequi nesciunt.",
            'phone' => "0856213656",
            'email' => "mcwood@example.com",
            'image' => "https://img2.pngdownload.id/20180419/spe/kisspng-barnes-noble-bookselling-logo-book-publishing-5ad85faff1dc05.5096203315241297119907.jpg"
        ]);

        Publisher::create([
            'name' => 'Bonorum',
            'address' => "nostrum exercitationem ullam corporis suscipit laboriosam",
            'phone' => "24213516",
            'email' => "LoremIpsummm@example.com",
            'image' => "https://img2.pngdownload.id/20180605/uyq/kisspng-book-pen-clip-art-product-literature-5b173151200087.1978188815282466091311.jpg"
        ]);

        
    }
}
