<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home() {
        $data = Book::all();
        return view('Home', [
            "title" => "Home",
            'data'=>$data,
        ]);
    }
}
