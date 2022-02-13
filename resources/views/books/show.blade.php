

@extends('layouts.app')

@section('content')


<div class="container">
    <section class="mt-50 mb-50">
        <h1>{{ $book->title }} </h1>
       

        <p>{{$book->description}}   </p>
        <p>{{ $book->date_publication}} </p>
        <p>{{ $book->page_nbr}} </p>

        @foreach ($book->theme as $theme)
            <span class="label label-default">{{ $theme->name }}</span>
        @endforeach
    
       

    </section>
</div>




@endsection
