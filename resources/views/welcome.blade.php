@extends('layouts.app')
@section('content')
<div class="flex flex-col">
<div>
<div class="flex flex-col flex-auto min-w-0 mt-12">

  <!-- Header -->
  <div class="relative pt-8 pb-28 px-4 sm:pt-20 sm:pb-48 sm:px-16 overflow-hidden bg-[#00b3ec] ">
      <!-- Background - @formatter:off -->
      <!-- Rings -->

      <img
    alt="profile"
    class="absolute inset-0 pointer-events-none w-full"
    src="../../assets/image1.jpg"
  />

   
      <!-- @formatter:on -->
      <div class="z-10 relative flex flex-col items-center">
       
          <div class="mt-1 text-3xl sm:text-5xl text-black font-semibold tracking-tight leading-tight text-center">
              Search for the best room
          </div>
          
     <div class="mt-16 w-full rounded-md bg-white">
<form class="flex justify-between p-10 w-full">   
  <label  class="sr-only">Search</label>

  <div class="w-1/4">  

  <div class="flex flex-col">
  <div class="mb-2">Resident</div>
  <div>
  <input type="text"  class="bg-gray-50 border h-12 p-5  border-gray-300 text-gray-900 text-sm rounded-lg block sm:w-full dark:placeholder-gray-400 " placeholder="Search for location" >
  </div>

</div>
      
</div>

  <div class="w-1/4 border-l">

  <div class="flex flex-col ...">
  <div class="ml-5 mb-2">Room</div>
  <div>
  <input type="text"  class="bg-gray-50 border h-12 ml-5 p-5 border-gray-300 text-gray-900 text-sm rounded-lg  block  sm:w-full   " placeholder="Search for room" >
  </div>
  
</div>

     
     
  </div>
  
  <div class="w-1/4 border-l">

  <div class="flex flex-col ...">
  <div class="ml-5 mb-2">Gender</div>
  <div>
  <input type="text"  class="bg-gray-50 border h-12 ml-5 p-5 border-gray-300 text-gray-900 text-sm rounded-lg block  sm:w-full dark:placeholder-gray-400" placeholder="Gender">
  </div>
  
</div>
 
      
     
  </div>
 
  <div class="border-l">
  <button type="submit" class="text-center w-40 py-2.5 px-3 ml-5 mt-5 text-sm font-medium text-white bg-[#f17f2e] rounded-lg border border-green-700 hover:bg-white hover:text-black">
      SEARCH
  </button>
  </div>
  

</form>
</div>

      </div>
  </div>
</div>
</div>

<!-- <div>
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
  </div> -->

</div>
@endsection