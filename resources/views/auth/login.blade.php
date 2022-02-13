@extends('layouts.app')

@section('content')


<div class="container">
    <section class="mt-50 mb-50">
        <div class="ds-card-form-ct container_630 mb-50">
            <div class="ds-card-form__header">
                <h3 class="ds-card-form__title">{{ __('Se connecter') }}</h3>
            </div>
            <div class="ds-card-form__body">
            <!-- <p>Connectez vous pour accéder à votre compte</p> -->

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="ds-form">
                        <div class="input_gpr">
                            <label for="email">{{ __('Adresse Email') }}</label>
                            <input class=" @error('email')input-error @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            id="email" 
                            type="email" 
                            placeholder="Votre adresse email">

                            @error('email')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>
            
                        <div class="input_gpr">
                            {{-- <label for="user_last_name">Mot de passe</label>
                            <input id="user_last_name" type="password" placeholder="Votre mon de passe"> --}}

                            <label for="password">{{ __('Mot de passe') }}</label>

                                
                            <input id="password" 
                            placeholder="Votre mon de passe"
                            type="password" 
                            class=" @error('password') input-error @enderror" 
                            name="password" 
                            required autocomplete="current-password">

                            @error('password')
                                <span class="error-message" role="alert">
                                {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <div class="display-flex flex-wrap justify-space-between">

                            <div class=" form-type-checkbox input_gpr_radio">
                                <div class="input_check_radio">
                                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                                <label for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>   
                            </div>
                        

                            @if (Route::has('password.request'))
                                <a class="mb-30" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            @endif


                        </div>

                        <div class="input_gpr">
                            <button type="submit" 
                                class="btn btn-green-solid  btn-icon-left btn-icon-login btn-medium">
                                {{ __('Connexion') }}
                            </button>
                        </div>
            
                    </div>
                </form>

            </div>
            <!-- <div class="ds-card-form__footer">

            </div> -->
        </div>
    </section>
</div>

{{-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-4xl font-bold mb-5">{{ __('Se connecter') }}</h1>
                </div>

                <div class="form-container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6">
                                <label for="email" class="block mb-2 text-base font-medium ">{{ __('Adresse Email') }}</label>

                            
                                    <input id="email" type="email" 
                                    class="w-full border rounded-md py-2 px-3
                                     focus:border-2 focus:border-blue-500 focus:outline-none 
                                     focus:shadow-outline @error('email') border-red-500 focus:border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="text-red-500 text-xs italic" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            
                            </div>

                            <div class="col-span-6">
                                <label for="password" class="block mb-2 text-base font-medium">{{ __('Mot de passe') }}</label>

                            
                                <input id="password" type="password" class="w-full border rounded-md py-2 px-3 focus:border-2 focus:border-blue-500 focus:outline-none focus:shadow-outline @error('password') border-red-500 focus:border-red-500 @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-red-500 text-xs italic" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>

                            <div class="col-span-6">

                                <div class="flex justify-between items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label>
                                    </div>

                            
                                    @if (Route::has('password.request'))
                                        <a class="text-blue-500 hover:text-blue-400 text-lg font-medium" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif
                                 </div>

                               
                                   
                               
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class=" mt-6 ">
                                    <button type="submit" 
                                    class="bg-slate-600 hover:bg-slate-500 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Connexion') }}
                                    </button>
                                 </div>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@endsection
