<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'Home']);

Route::get('/bookDetail/{id}', [BookController::class, 'bookDetail'])->name('book_Detail');
Route::get('/book_category/{category}', [CategoryController::class, 'Category'])->name('book_category');
Route::get('/publisher', [PublisherController::class, 'publisher'])->name('publisher');
Route::get('/contact', [ContactController::class, 'Contact']);
Route::get('/publisher_detail/{id}', [PublisherController::class, 'publisherDetail'])->name('publisher_detail');
// Route::get('/category', function () {
//     return view('category', [
//         "title" => "Category"
//     ]);
// });

// Route::get('/category1', [CategoryController::class, 'Category1']);

// Route::get('/category2', [CategoryController::class, 'Category2']);

// Route::get('/category3', [CategoryController::class, 'Category3']);




