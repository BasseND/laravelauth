<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //

    public function showAuthorBook(Author $author)
    {
        return view('books.author', [
            'books' => $author->books
        ], compact('author'));
    }

    
}
