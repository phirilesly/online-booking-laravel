@extends('layouts.app')

@section('content')
<div class="flex flex-col p-10 items-center justify-center mt-20 bg-[#00b3ec]">
    <div class="w-full  bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
       
                <div class="p-6 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-black md:text-2xl">
                {{ __('Register') }}
              </h1>
                    <form class="mt-5 md:space-y-6" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-black">{{ __('Name') }}</label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-black">{{ __('Email Address') }}</label>

                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-black">{{ __('Password') }}</label>

                           
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div>
                            <label for="password-confirm" class="block mb-2 text-sm font-medium text-black">{{ __('Confirm Password') }}</label>

                           
                                <input id="password-confirm" type="password" class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="p-6">
                           
                                <button type="submit" class="w-full text-white bg-[#f17f2e] border  border-green-700 hover:bg-white hover:text-black  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    {{ __('Register') }}
                                </button>
                                <p class="text-sm mt-2 font-light text-black">
                      Already have an account? <a href="{{ route('login') }}" class="font-medium text-[#f17f2e] hover:underline">Sign In</a>
                  </p>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
