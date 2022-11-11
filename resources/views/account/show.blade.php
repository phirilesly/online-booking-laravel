@extends('layouts.app')
@section('content')


<div class="container mx-auto">


<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
    <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">My Room</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="history-tab" data-tabs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">Booking History</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">My Profile</button>
        </li>
      
    
    </ul>
</div>
<div id="myTabContent">
    <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="w-full">
<div class="p-8 bg-white shadow">
  <div class="grid grid-cols-1 md:grid-cols-3">
    <div class="flex justify-start mt-10 ml-5">
      <div class="">
        <p class="font-bold text-gray-700 text-xl">R45634</p>
        <p class="text-gray-400">Reg Number</p>
      </div>
      <div class="ml-5">
           <p class="font-bold text-gray-700 text-xl">10</p>
        <p class="text-gray-400">Room</p>
      </div>
          <div class="ml-5">
           <p class="font-bold text-gray-700 text-xl">Block A</p>
        <p class="text-gray-400">Resident</p>
      </div>
    </div>
    <div>
      <div class="w-48 h-48 bg-indigo-400 mx-auto my-5 rounded-full shadow-2xl absolute inset-x-0 flex items-center justify-center text-indigo-500">
<svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
</svg>
      </div>
    </div>

    <div class="flex justify-end">

    <div>
    <button
  class="mx-10 mt-5 bg-green-600 py-5 px-4 text-white"
>
  Registered
</button>
    </div>

    <div class="">
   
    </div>

   
    </div>
  </div>

  <div class="mt-32 text-center border-b pb-12">
    <h1 class="text-4xl font-medium text-gray-700"> {{ Auth::user()->name }}</h1>
    <p class="font-light text-gray-600 mt-3">Level : 2.1</p>

    <p class="mt-8 text-gray-500">Degree Information Systems</p>
    <p class="mt-2 text-gray-500">University of Computer Science</p>
  </div>

  <div class="mt-12 flex flex-col justify-center">
    <p class="text-gray-600 text-center font-light lg:px-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ullam in quod dignissimos 
        exercitationem! Id in suscipit saepe cum natus delectus velit est praesentium ipsam corrupti, doloremque recusandae distinctio.</p>
    <button
  class="text-indigo-500 py-2 px-4  font-medium mt-4"
>
  Change Password
</button>
  </div>

</div>
</div>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="bg-white">
  <div class="pt-6">
  

    <!-- Image gallery -->
    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
      <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden rounded-lg lg:block">
      <img src="../../assets/image1.jpg" class="h-full w-full object-cover object-center">

        
      </div>
      <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
        <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
        <img src="../../assets/image1.jpg" class="h-full w-full object-cover object-center">
        </div>
        <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
        <img src="../../assets/image1.jpg" class="h-full w-full object-cover object-center">
        </div>
      </div>
      <div class="aspect-w-4 aspect-h-5 sm:overflow-hidden sm:rounded-lg lg:aspect-w-3 lg:aspect-h-4">
      <img src="../../assets/image1.jpg" class="h-full w-full object-cover object-center">
      </div>
    </div>

    <!-- Product info -->
    <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Room 01</h1>
      </div>

      <!-- Options -->
      <div class="mt-4 lg:row-span-3 lg:mt-0">
        <h2 class="sr-only">Product information</h2>
        <p class="text-3xl tracking-tight text-gray-900">$100</p>

     

        <form class="mt-10">
          <!-- Colors -->
          <div>
            <h3 class="text-sm font-medium text-gray-900">Gender</h3>

            <fieldset class="mt-4">
             <p>Female</p>
            </fieldset>
          </div>

          <!-- Sizes -->
          <div class="mt-10">
          <h3 class="text-sm font-medium text-gray-900">Available Items</h3>

          <div class="mt-4">
            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
              <li class="text-gray-400"><span class="text-gray-600">2 Beds</span></li>

              <li class="text-gray-400"><span class="text-gray-600">2 Tables</span></li>

              <li class="text-gray-400"><span class="text-gray-600">2 chairs</span></li>

              <li class="text-gray-400"><span class="text-gray-600">1 Bathroom</span></li>
            </ul>
          </div>
        </div>

          <button class="mt-20 flex w-full items-center justify-center rounded-md border border-green-600 bg-red-600 py-3 px-8 text-base font-medium text-white hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" type="button" data-modal-toggle="popup-modal">Unbook Room</button>

          <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to remove this room?</h3>
                <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                </button>
                <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
        </div>
    </div>
</div>

        </form>
      </div>

      <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
        <!-- Description and details -->
        <div>
          <h3 class="sr-only">Description</h3>

          <div class="space-y-6">
            <p class="text-base text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quidem a.
                 Facere mollitia aliquam obcaecati natus quasi amet, quisquam,
                 distinctio quidem odit voluptatem vitae, recusandae architecto magni inventore totam cupiditate!</p>
          </div>
        </div>

        <div class="mt-10">
          <h3 class="text-sm font-medium text-gray-900">Room Conditions</h3>

          <div class="mt-4">
            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
              <li class="text-gray-400"><span class="text-gray-600">Fully furnished</span></li>

              <li class="text-gray-400"><span class="text-gray-600">Clean</span></li>

              <li class="text-gray-400"><span class="text-gray-600">Sharing</span></li>

              <li class="text-gray-400"><span class="text-gray-600">Electricity</span></li>
            </ul>
          </div>
        </div>

        <div class="mt-10">
          <h2 class="text-sm font-medium text-gray-900">Details</h2>

          <div class="mt-4 space-y-6">
            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg " id="history" role="tabpanel" aria-labelledby="history-tab">
 
<div class="overflow-x-auto h-full relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Previous Bookings
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of room you stayed in.</p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Room Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Start Date
                </th>
                <th scope="col" class="py-3 px-6">
                    Check Out Date
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Room 01
                </th>
                <td class="py-4 px-6">
                   Booked
                </td>
                <td class="py-4 px-6">
                    01-03-2022
                </td>
                <td class="py-4 px-6">
                01-03-2022
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Room 03
                </th>
                <td class="py-4 px-6">
                    Deleted
                </td>
                <td class="py-4 px-6">
                01-03-2022
                </td>
                <td class="py-4 px-6">
                01-03-2022
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-red-500  hover:underline">Remove</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Room 05
                </th>
                <td class="py-4 px-6">
                    Checked Out
                </td>
                <td class="py-4 px-6">
                01-03-2022
                </td>
                <td class="py-4 px-6">
                01-03-2022
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-red-500  hover:underline">Remove</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


    </div>
   
</div>



</div>


@endsection