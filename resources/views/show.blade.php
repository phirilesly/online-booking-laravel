@extends('layouts.app')
@section('content')
  


    <div class="container mx-auto my-10 px-20">

<div class="border bg-white  rounded-lg p-6 text-gray-100 relative z-10" style="cursor: auto;">
                
  <div class="flex flex-wrap items-center">

                    
    <div class="flex w-full h-48 md:h-64 lg:h-72 relative">
                                                
      <div class="w-8/12 pr-4 relative">
                            
                            
        <img src="../../assets/image1.jpg" class="w-full h-full object-cover object-top rounded-lg bg-white">
                        
      </div>
                        
      <div class="w-4/12 h-full">
                            
        <div class="flex flex-col w-full h-full">
                                
          <div class="flex-1 pb-2">
                                    
            <div class="w-full h-full relative">
                                        
              <img src="../../assets/image1.jpg" class="absolute top-0 w-full h-full object-cover object-center rounded-lg bg-white">
                                    
            </div>
                                
          </div>
                                
          <div class="flex-1 pt-2">
                                    
            <div class="w-full h-full relative">
                                        
              <img src="../../assets/image5.jpg" class="absolute top-0 w-full h-full object-cover object-bottom rounded-lg bg-white">
                                    
            </div>
                                
          </div>
                            
        </div>
                        
      </div>
                    
    </div>

                    
    <div class="w-full pt-8 flex flex-col justify-between">
                        
      <div>
                            
        <h2 class="font-bold text-black text-2xl">Room 1</h2>
                            
        <div class="flex flex-wrap text-center pt-4 mb-2">
                                                                    
          <div class="mr-2 mb-2 rounded-full px-7 py-1 text-base bg-[#00b3ec] text-green-900">Block A</div>
                                                                    
          <div class="mr-2 mb-2 rounded-full px-7 py-1 text-base bg-[#00b3ec] text-green-900">Male</div>
                                                                    
          <div class="mr-2 mb-2 rounded-full px-7 py-1 text-base bg-green-600 text-white">{{ ucfirst($room->status) }}</div>
                                                            
        </div>
                            
        <p class="text-base leading-relaxed text-black">{{ ucfirst($room->room_desc) }}</p>
                                                            
        <ul class="text-base mt-4 list-disc list-inside text-black leading-relaxed">
                                                                            
          <li>2 beds</li>
                                                                            
          <li> Fully furnished</li>
                                                                            
          <li> 2 tables</li>
                                                                            
          <li> 2 Chairs</li>
                                                                    
        </ul>
                                                    
      </div>
                        
      <div class="w-full sm:flex-1 grid gap-4 grid-cols-2 pt-6">
                            
        <a href="{{ route('home') }}" class="flex items-center justify-center text-center relative text-white font-bold text-sm bg-red-600 border border-green-700 px-8 py-3 rounded-lg shadow-lg hover:bg-white hover:text-black">Cancel</a>

                                                                                                                                        
        <button x-on:click="pay('Essential')" class="w-full block text-center relative text-white font-bold text-sm bg-[#f17f2e] px-4 py-3 rounded-lg shadow-lg border border-green-700 hover:bg-white hover:text-black">Book now</button>
                                                                                                                        
      </div>
                    
    </div>

                
  </div>
            
</div>
</div>

@endsection