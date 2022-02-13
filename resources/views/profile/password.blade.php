@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-4xl font-bold mb-5">{{ __('Change Password') }}</h1>
                </div>
              

                <div class="card-body">
                    <form method="POST" action="{{ route('user-password.update') }}">
                        @csrf
                        @method('PUT')

                        


                        @if (session('status') == "password-updated")
                            <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3">
                                Password updated successfully.
                            </div>
                        @endif

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="current_password" class="block mb-2 text-base font-medium">{{ __('Current Password') }}</label>
                                <input id="current_password" type="password" class="w-full border rounded-md py-2 px-3 focus:border-2 focus:border-blue-500 focus:outline-none focus:shadow-outline @error('current_password', 'updatePassword') border-red-500 focus:border-red-500 @enderror" name="current_password" required autofocus>

                                @error('current_password', 'updatePassword')
                                    <span class="text-red-500 text-xs italic" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>

                            <div class="col-span-6">
                                <label for="password" class="block mb-2 text-base font-medium">{{ __('Password') }}</label>
                                <input id="password" type="password" class="w-full border rounded-md py-2 px-3 focus:border-2 focus:border-blue-500 focus:outline-none focus:shadow-outline @error('password', 'updatePassword') border-red-500 focus:border-red-500 @enderror" name="password" required autocomplete="new-password">

                                @error('password', 'updatePassword')
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
                                    {{ __('Save') }}
                                </button>
                            </div>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
