@extends('layouts.app')

@section('content')


<div class="container">
    <section class="mt-50 mb-50">
        <div class="ds-card-form-ct container_630 mb-50">
            <div class="ds-card-form__header">
                <h3 class="ds-card-form__title">{{ __('Reset Password') }}</h3>
            </div>
            <div class="ds-card-form__body">


                @if (session('status'))
                    <div class="mb-30 bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="mb-30">Afin de réinitialiser votre mot de passe, saisissez l’adresse électronique avec laquelle vous vous êtes inscrit.</p>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="ds-form">
                        <div class="input_gpr">


                            <label for="email">{{ __('E-Mail Address') }}</label>

                                
                            <input id="email" type="email" 
                            class=" @error('email') input-error @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Votre adresse email">

                            @error('email')
                                <span class="error-message" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="input_gpr">
                            <button type="submit" 
                                class="btn btn-green-solid  btn-icon-left btn-icon-login btn-medium">
                                {{ __('Send Password Reset Link') }}
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
                    <h1 class="text-4xl font-bold mb-5">{{ __('Reset Password') }}</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6">
                                <label for="email" class="block mb-2 text-base font-medium">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="w-full border rounded-md py-2 px-3 focus:border-2 focus:border-blue-500 focus:outline-none focus:shadow-outline @error('email') border-red-500 focus:border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-red-500 text-xs italic" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                            <div class="col-span-6">
                                <button type="submit" class="bg-slate-600 hover:bg-slate-500 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@endsection
