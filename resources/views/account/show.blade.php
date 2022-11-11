@extends('layouts.app')
@section('content')


<div class="container mx-auto">


<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">My Room</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="history-tab" data-tabs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">Booking History</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
        </li>
    </ul>
</div>
<div id="myTabContent">
    <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="p-16">
<div class="p-8 bg-white shadow mt-24">
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
      <div class="w-48 h-48 bg-indigo-400 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
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

  <div class="mt-20 text-center border-b pb-12">
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
  Show more
</button>
  </div>

</div>
</div>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">
            This is some placeholder content the 
            <strong class="font-medium text-gray-800 dark:text-white">
                Dashboard tab's associated content</strong>. Clicking another tab will
                 toggle the visibility of this one for the next. The tab JavaScript swaps 
                 classes to control the content visibility and styling.
                </p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="history" role="tabpanel" aria-labelledby="history-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">
            This is some placeholder content the 
            <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content

            </strong>. Clicking another tab will toggle the visibility of this one for the next.
            The tab JavaScript swaps classes to control the content visibility and styling.
        </p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">
            This is some placeholder content the 
            <strong class="font-medium text-gray-800 dark:text-white">
                Settings tab's associated content</strong>. Clicking another 
                tab will toggle the visibility of this one for the next. The tab 
                JavaScript swaps classes to control the content visibility and styling.
            </p>
    </div>
</div>



</div>


@endsection