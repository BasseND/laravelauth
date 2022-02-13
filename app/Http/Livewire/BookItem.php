<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookItem extends Component
{

    public $book;
    public function render()
    {
        return view('livewire.book-item');
    }
}
