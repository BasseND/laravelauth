@extends('layouts.app')

@section('content')


<div class="container">
    <section class="mt-50 mb-50">
        <div class="ds-card-form-ct container_630 mb-50">
            <div class="ds-card-form__header">
                <h3 class="ds-card-form__title">{{ __('Ajouter un ouvrage') }}</h3>
            </div>
            <div class="ds-card-form__body">
            <!-- <p>Connectez vous pour accéder à votre compte</p> -->

                <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="ds-form">

                        <div class="input_gpr">
                            <label for="title">Titre</label>
                            <input class=" @error('title')input-error @enderror" 
                            name="title" value="{{ old('title') }}" required autocomplete="title" autofocus
                            id="title" 
                            type="text"> 
                           

                            @error('title')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        




                        <div class="input_gpr">
                            <label for="description">Description</label>
                            <textarea  class=" @error('description')input-error @enderror"  
                            name="description" id="description"  rows="5">
                                {{ old('description') }}
                            </textarea>
                            {{-- <input class=" @error('description')input-error @enderror" 
                            name="description" value="{{ old('description') }}" required autocomplete="description" 
                            id="description" 
                            type="text">  --}}
                           

                            @error('description')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        

                        <div class="input_gpr">
                            <label for="poster">Image</label>
                            <input class=" @error('poster')input-error @enderror" 
                            name="poster" value="{{ old('poster') }}" required  
                            id="poster" 
                            type="file"> 
                           

                            @error('poster')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <div class="input_gpr">
                            <label for="book_pdf">Ajouter un pdf</label>
                            <input class=" @error('book_pdf')input-error @enderror" 
                            name="book_pdf" value="{{ old('book_pdf') }}" required  
                            id="book_pdf" 
                            type="file"> 
                           

                            @error('book_pdf')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="input_gpr">
                            <label for="date_publication">Date de publication</label>
                            <input class=" @error('date_publication')input-error @enderror" 
                            name="date_publication" value="{{ old('date_publication') }}" required autocomplete="date_publication" 
                            id="date_publication" 
                            type="text"> 
                           

                            @error('date_publication')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <div class="input_gpr">
                            <label for="page_nbr">Nombre de page</label>
                            <input class=" @error('page_nbr')input-error @enderror" 
                            name="page_nbr" value="{{ old('page_nbr') }}" required autocomplete="page_nbr" 
                            id="page_nbr" 
                            type="text"> 
                           

                            @error('page_nbr')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <div class="input_gpr">
                            <label for="slug">Slug</label>
                            <input class=" @error('slug')input-error @enderror" 
                            name="slug" value="{{ old('slug') }}" required autocomplete="slug" 
                            id="slug" 
                            type="text"> 
                           

                            @error('slug')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <div class="input_gpr">
                            <label for="authors_id">Auteur</label>

                            <select name="authors_id" id="authors_id">

                               @php
                                  $authors = \App\Models\Author::all();
                               @endphp
                               @foreach ($authors as $author)
                                   <option value="{{ $author->id}}">{{ ucwords($author->name) }}</option> 
                               @endforeach

                               
                            </select>

                            @error('authors_id')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <div class="input_gpr">
                            <label for="themes">Auteur</label>

                            <select name="themes[]" id="themes" multiple="multiple">

                                @php
                                  // $book = \App\Models\Book::all();
                                  $themes = \App\Models\Theme::all();
                                @endphp  

                                @foreach ($themes as $theme) 
                                {{-- @foreach ($themes as $theme) --}}
                                   <option value="{{ $theme->id}}">{{ ucwords($theme->name) }}</option> 
                                @endforeach

                               
                
                              

                                
                            </select>

                            @error('themes')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


            
                       

                        <div class="input_gpr">
                            <button type="submit" 
                                class="btn btn-green-solid  btn-icon-left btn-icon-login btn-medium">
                                {{ __('Publier') }}
                            </button>
                        </div>
            
                    </div>
                </form>

            </div>
         
        </div>
    </section>
</div>




@endsection
