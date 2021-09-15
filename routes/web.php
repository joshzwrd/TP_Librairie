<?php

use App\Models\Book;
use App\Models\People;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/books', function () {
    $books = Book::all();

    return view('pages/book', [
        'books' => $books
    ]);
});

Route::get('/peoples', function () {
    $peoples = People::all();

    return view('pages/people', [
        'peoples' => $peoples
    ]);
});
