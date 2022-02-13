<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/add', function () {
    return view('books.addbook');
});
Route::get('books/{book:slug}', [BookController::class, 'show'])->name('books.show');
// Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/books/add', [BookController::class, 'addBook'])->name('books.addbook');
Route::post('/books/add', [BookController::class, 'store'])->name('books.store');

// Route::get('/books/{author:slug}', function (Author $author) {
//     return view('books.author', [
//         'books' => $author->books
//     ]);
// });

Route::get('/books/{author:slug}', [AuthorController::class, 'showAuthorBook'])->name('books.author');

// Route::get('{slug}', function ($slug) {
//     return view('welcome');
// })->name('books-detail');


Route::view('/home', 'home')->middleware(['auth', 'verified']);
Route::view('/profile', 'profile.index')->middleware('auth')->name('Profile');
Route::view('/profile/password', 'profile.password')->middleware('auth');


