<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function bookDetail($id)
    {
        $book = Book::where('id', $id)->with('bookCategories.categories')->first();
        // $publisher = Publisher::where('id', $id)->first();
        return view('book_Detail', compact('book'));
    }
   
}
