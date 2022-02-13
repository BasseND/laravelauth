<div>
    <a href="{{ route('book-detail', ['slug' => $book->slug]) }}">
        <img src='{{ asset("storage/books/$book->featured_image") }}' 
            alt="{{ $book->title }}" class="w-full h-56 rounded-t-md">
    </a>
</div>
