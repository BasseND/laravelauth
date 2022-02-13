@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="card">
              
                <div class="card-header">
                    <h1 class="text-4xl font-bold mb-5">{{ __('Reset Password') }}</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <div class="grid grid-cols-6 gap-6">

                            

                        <input type="hidden" name="token" value="{{ request()->token }}">

                        <div class="col-span-6">
                            <label for="email" class="block mb-2 text-base font-medium">{{ __('E-Mail Address') }}</label>

                           
                            <input id="email" type="email" class="w-full border rounded-md py-2 px-3 focus:border-2 focus:border-blue-500 focus:outline-none focus:shadow-outline @error('email') border-red-500 focus:border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="text-red-500 text-xs italic" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="col-span-6">
                            <label for="password" class="block mb-2 text-base font-medium">{{ __('Password') }}</label>

                           
                            <input id="password" type="password" class="w-full border rounded-md py-2 px-3 focus:border-2 focus:border-blue-500 focus:outline-none focus:shadow-outline @error('password') border-red-500 focus:border-red-500 @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="text-red-500 text-xs italic" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           
                        </div>

                        <div class="col-span-6">
                            <label for="password-confirm" class="block mb-2 text-base font-medium">{{ __('Confirm Password') }}</label>

                           
                            <input id="password-confirm" type="password" class="w-full border rounded-md py-2 px-3 focus:border-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>

                        <div class="col-span-6">
                           
                            <button type="submit" class="bg-slate-600 hover:bg-slate-500 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Reset Password') }}
                            </button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
