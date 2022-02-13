<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Theme;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class BookController extends Controller
{
    //

   

    public function index()
    {
        $books = Book::online()->latest()->get();
        return view('books.index', compact('books'));
    }

    // public function show(Book $slug)
    // {
    //     return view('books.show', compact('slug'));
    // }

    // public function show($id)
    // {
    //     $book = Book::find($id);
    //     return view('books.show', compact('slug'));
    // }

    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }


    public function newStore(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            
            'title' => 'required',
            'description' => 'nullable',
            'poster' => 'required|image',
            'book_pdf' => "required|mimes:pdf|max:10000",
            'date_publication' => 'required',
            'page_nbr' => 'required',
            'slug' => ['required', Rule::unique('books', 'slug')],
            'themes' => 'required|array',
            'authors_id' => ['required', Rule::exists('authors', 'id')], 
        ));

        // store in the database
        $post = new Book;

        $book->title = $request->title;
        $book->description = $request->description;
        // $book->poster = $request->poster;
        // $book->book_pdf = $request->book_pdf;
        $book->date_publication = $request->date_publication;
        $book->page_nbr = $request->page_nbr;
        $book->slug = $request->slug;
        $book->themes = $request->themes;
        // $book->authors_id = $request->authors_id;

        $book->user_id = auth()->id();
        $book->poster  = $request->file('poster')->store('posters');
        $book->book_pdf  = $request->file('book_pdf')->store('pdf');

        $book->save();

        $book->theme()->sync($request->themes, false);

        // Session::flash('success', 'The blog post was successfully save!');

        return redirect()->route('books.show', $book->id);
    }


    // public function create()
    // {
    //     $authors = Author::all();
    //     $themes = Theme::all();
    //     return view('books.create')->withAuthors($authors)->withThemes($themes);
    // }


    public function store()
    {

        $authors = Author::all();
        $themes = Theme::all();
        // return view('books.store')->withAuthors($authors)->withThemes($themes);

       // ddd(request()->all());

        // $path = request()->file('poster')->store('posters');
        
        // return 'Done' . $path;


        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'nullable',
            'poster' => 'required|image',
            'book_pdf' => "required|mimes:pdf|max:10000",
            'date_publication' => 'required',
            'page_nbr' => 'required',
            'slug' => ['required', Rule::unique('books', 'slug')],
            'themes' => 'required|array',
            'authors_id' => ['required', Rule::exists('authors', 'id')],  
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['poster'] = request()->file('poster')->store('posters');
        $attributes['book_pdf'] = request()->file('book_pdf')->store('pdf');


        $book = Book::create($attributes);

        $book->theme()->sync(request()->themes, false);

        
        // Session::flash('success', 'The blog post was successfully save!');

        // return redirect()->route('books.show', $book->id);
        
        return redirect('/');
    }

  

}
