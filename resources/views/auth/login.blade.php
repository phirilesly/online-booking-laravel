@extends('layouts.app')

@section('content')



    <div class="flex flex-col p-10 items-center justify-center mt-20 bg-[#00b3ec]">
        

                <div class="w-full  bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:border-gray-700">
          <div class="p-6 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-black md:text-2xl">
              {{ __('Login') }}
              </h1>

                    <form class="mt-5 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-black">{{ __('Email Address') }}</label>

                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-black">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror  bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input class="form-check-input w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
</div>
<div class="ml-3 text-sm">
                                    <label class="form-check-label text-black" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
</div>
                                </div>
                           
                            @if (Route::has('password.request'))
                                    <a class="text-sm font-medium text-[#f17f2e] hover:underline" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>

                       
                                <button type="submit" class="w-full text-white bg-[#f17f2e] border  border-green-700 hover:bg-white hover:text-black font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    {{ __('Login') }}
                                </button>

                                <p class="text-sm font-light text-black">
                      Don’t have an account yet? <a href="{{ route('register') }}" class="font-medium text-[#f17f2e] hover:underline">Sign up</a>
                  </p>

                              

                                
                          
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection
