<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksThemes extends Model
{
    use HasFactory;

   protected $table = "books_themes";
   protected $fillable = ["books_id", "themes_id"];

}
