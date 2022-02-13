@extends('layouts.app')

@section('content')



<div class="container">
    <section class="mt-50 mb-50">
        <div class="ds-card-form-ct container_630 mb-50">
            <div class="ds-card-form__header">
                {{-- <h3 class="ds-card-form__title">Créer un compte</h3> --}}
                <h3 class="ds-card-form__title">{{ __('Register') }}</h3>

                
            </div>
            <div class="ds-card-form__body">

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="ds-form">

                        <div class="input_gpr">

                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" 
                            class="@error('name') input-error @enderror" 
                            name="name" value="{{ old('name') }}"
                            placeholder="Votre nom" 
                            required autocomplete="name" autofocus>

                            @error('name')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>


                        <div class="input_gpr">
                            <label for="firstname">Prénom</label>

                            <input id="firstname" type="text" 
                            class="@error('firstname') input-error @enderror" 
                            name="firstname" value="{{ old('firstname') }}"
                            placeholder="Votre nom" 
                            required autocomplete="firstname">


                            @error('firstname')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                            

                        </div>


                       
                        


                        <div class="input_gpr">

                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" 
                            class=" @error('email') input-error @enderror" 
                            name="email" value="{{ old('email') }}" 
                            placeholder="Votre adresse email"
                            required autocomplete="email">

                            @error('email')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <div class="input_gpr">
                            <label for="phone">Numéro de Téléphone</label>
                            <input id="phone" type="text" 
                            class="@error('phone') input-error @enderror" 
                            name="phone" value="{{ old('phone') }}"
                            placeholder="Votre numéro de Téléphone" 
                            required autocomplete="phone">
                           
                            @error('phone')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        
                        </div>
            
                        <div class="input_gpr">
                            {{-- <label for="passord">Mot de passe</label>
                            <input id="passord" type="password" placeholder="Votre mon de passe"> --}}

                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class=" @error('password') input-error @enderror" 
                            placeholder="Votre mon de passe"
                            name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                    

                        <div  class="input_gpr">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" 
                            placeholder="Veuillez confirmer votre mot de passe" 
                            name="password_confirmation" required autocomplete="new-password">
                        
                        </div>

                    


                        <div class="display-flex flex-wrap justify-space-between">

                            <div class=" form-type-checkbox input_gpr_radio">
                                <div class="input_check_radio">
                                    <input id="madame" type="checkbox" name="civilite" value="Votre nom d'utilisateur">
                                </div>
                                <label for="madame">Acceptez les conditions légales</label>
                                
                            </div>
                        

                        </div>

                        <div class="input_gpr">
                            <button type="submit" class="btn btn-green-solid  btn-medium">
                                {{ __('Register') }}
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

{{-- 
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">

            <div class="card">
            
                <div class="card-header">
                    <h1 class="text-4xl font-bold mb-5">{{ __('Register') }}</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                               
                               
                            </div>

                            <div class="col-span-6">
                               
                               
                            </div>

                            <div class="col-span-6">
                               
                               
                            </div>

                            <div class="col-span-6">
                               
                            </div>

                            <div class="col-span-6">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="bg-slate-600 hover:bg-slate-500 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Register') }}
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
