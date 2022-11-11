<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('users', App\Http\Controllers\UserController::class);


Route::get('/rooms', [\App\Http\Controllers\RoomController::class, 'index']);

Route::get('/rooms/{room}', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/rooms/create/room', [\App\Http\Controllers\RoomController::class, 'create']); 

Route::post('/rooms/create/room', [\App\Http\Controllers\RoomController::class, 'store']); //saves the created post to the databse
Route::get('/rooms/{room}/edit', [\App\Http\Controllers\RoomController::class, 'edit']); //shows edit post form
Route::put('/rooms/{room}/edit', [\App\Http\Controllers\RoomController::class, 'update']); //commits edited post to the database 
Route::delete('/rooms/{room}', [\App\Http\Controllers\RoomController::class, 'destroy']); //deletes post from the database

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
