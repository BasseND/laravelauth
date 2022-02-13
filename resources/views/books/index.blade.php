@extends('layouts.app')

@section('content')


    <div class="ds-card-wrapper">
        @foreach($books as $book)
            {{-- <livewire:book :book="$book"> --}}
                <a href="{{ asset('storage/' . $book->book_pdf) }}">Afficher le pdf</a>

                    <div class="ds-card ">
                        
                            <div class="ds-card--img card-anime">
                                <img src="{{ asset('storage/' . $book->poster) }}" alt="Couverture de l'ouvrage ">
            
            
                                <div class="ds-card-links">
                                    <button class="ds-card--like"> <em class="fontello icon-heart-empty" aria-hidden="true"></em></button>
                                    {{-- <a class="btn btn-grey-solid  btn-medium" href="{{ route('books.show', $book->slug) }}">Consulter</a> --}}

                                    <a class="btn btn-grey-solid  btn-medium" 
                                       href="/books/{{ $book->slug }}">
                                       Consulter
                                    </a>

                                </div>
            
                            </div>
                            <div class="ds-card--content">
                                <h3>{{ $book->title }}</h3>
                                <p> 
                                    <a href="{{route('books.author', $book->author->slug)}}">
                                        {{ $book->author->name }} 
                                    </a></p> 
                            </div>
                    
                    </div>
                    
        @endforeach
    </div>
@endsection