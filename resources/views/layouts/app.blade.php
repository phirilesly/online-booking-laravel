<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <nav class="bg-[#00b3ec] border-gray-200 py-5 px-4 lg:px-6">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a class="navbar-brand" href="{{ url('/') }}">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-black"> {{ config('app.name', 'Laravel') }}</span>
                </a>
                <div class="flex items-center lg:order-2">

                 <ul class="navbar-nav ms-auto">

                 <div class="flex flex-row ...">

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <div>
                                <li class="nav-item">
                                    <a class="text-center w-40 py-2.5 px-8 ml-5 mt-5 text-sm font-medium text-white bg-[#f17f2e] rounded-lg border border-green-700 hover:bg-white hover:text-black" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
</div>
                            @endif

                            @if (Route::has('register'))
                            <div class="ml-5">
                                <li class="nav-item w-32">
                                    <a class="text-center w-40 py-2.5 px-5 ml-5 mt-5 text-sm font-medium text-white bg-[#f17f2e] rounded-lg border border-green-700 hover:bg-white hover:text-black" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
</div>
</div>
                            @endif
                        @else


                        
                            <li class="nav-item dropdown">
                                <a id="dropdownDefault" data-dropdown-toggle="dropdown"  class="text-white bg-[#f17f2e] hover:bg-white hover:text-black  font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center " role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div id="dropdown" class="hidden z-10 w-44  rounded divide-y divide-gray-100 shadow bg-gray-700">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
      <li>
        <a href="{{route('users.index')}}" class="block py-2 px-4 hover:bg-[#f17f2e]">My Account</a>
      </li>
      <li>
        <a href="{{ route('home') }}" class="block py-2 px-4 hover:bg-[#f17f2e]">Book a room</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-[#f17f2e] ">Settings</a>
      </li>
      <li>
      <a class="block py-2 px-4 hover:bg-[#f17f2e]" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        
      </li>
    </ul>
</div>

                                
                            </li>
                        @endguest
                    </ul>


<button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
    <span class="sr-only">Open main menu</span>
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>
</div>
<div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
              <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                  <li>
                      <a href="#" class="block py-2 pr-4 pl-3 text-black rounded bg-[#00b3ec] lg:bg-transparent lg:text-[#00b3ec] lg:p-0 dark:text-white lg:hover:text-white " aria-current="page">Home</a>
                  </li>
                  <li>
                      <a  href="{{ route('login') }}"  class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-white lg:hover:bg-transparent lg:border-0 lg:hover:text-white lg:p-0">Book A Room</a>
                  </li>
                  <li>
                      <a href="#" class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-white lg:hover:bg-transparent lg:border-0 lg:hover:text-white lg:p-0">Services</a>
                  </li>
                  <li>
                      <a href="#" class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-white lg:hover:bg-transparent lg:border-0 lg:hover:text-white lg:p-0">FQAs</a>
                  </li>
                  <li>
                      <a href="#" class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-white  lg:hover:bg-transparent lg:border-0 lg:hover:text-white lg:p-0 ">Help</a>
                  </li>
                  
              </ul>
          </div>
</div>
</nav>

    

        <main >
            @yield('content')
        </main>

        <div>
<div class="flex justify-center mt-5">
  <div>
    <div class="flex justify-center mt-10">
      <div class="relative flex flex-col ml-5 rounded-2xl shadow hover:shadow-lg overflow-hidden bg-card transition-shadow ease-in-out duration-150">
      <img
    alt="profile"
    class="w-50 h-40"
    src="../../assets/image1.jpg"
  />

  
       
      </div>

      <div class="relative flex flex-col ml-5 rounded-2xl shadow hover:shadow-lg overflow-hidden bg-card transition-shadow ease-in-out duration-150">
      <img
    alt="profile"
    class="w-50 h-40"
    src="../../assets/image2.jpg"
  />
       
      </div>

      <div class="relative flex flex-col ml-5 rounded-2xl shadow hover:shadow-lg overflow-hidden bg-card transition-shadow ease-in-out duration-150">
      <img
    alt="profile"
    class="w-50 h-40"
    src="../../assets/image4.jpg"
  />
    
        
      </div>
      <div class="relative flex flex-col ml-5 rounded-2xl shadow hover:shadow-lg overflow-hidden bg-card transition-shadow ease-in-out duration-150">
      <img
    alt="profile"
    class="w-50 h-40"
    src="../../assets/image5.jpg"
  />
    
        
      </div>
      <div class="relative flex flex-col ml-5 rounded-2xl shadow hover:shadow-lg overflow-hidden bg-card transition-shadow ease-in-out duration-150">
      <img
    alt="profile"
    class="w-50 h-40"
    src="../../assets/image6.jpg"
  />
    
        
      </div>
    </div>
  </div>
 
</div>
</div>

<div>
  <div class="flex justify-center mt-5">
<p>Copyright &copy; 2022 BlissTeq All Rights Reserved</p>
</div>
  </div>

    </div>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
