<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\BookCategory;

;
class CategoryController extends Controller
{
    public function Category($category)
    {
        $books = BookCategory::with('books')->where('category_id', $category)->get();
        return view('book_category', compact('books'));
    }
}
