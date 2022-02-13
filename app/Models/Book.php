<?php

namespace App\Models;

use App\Models\Author;

use App\Models\Theme;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $with = ['author'];

    protected $fillable = [
        'title',
        'description',
        'poster',
        'book_pdf',
        'date_publication',
        'page_nbr',
        'slug',
        'user_id',
        'authors_id' 
    ];


    public function scopeOnline($query)
    {
        return $query->where('is_published', false);
    }


    public function user()
    {
        return $this->belongsTo(User::class,  'user_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'authors_id');
    }

    public function theme()
    {
        return $this->belongsToMany(Theme::class, 'books_themes', 'books_id', 'themes_id');
    }

}
