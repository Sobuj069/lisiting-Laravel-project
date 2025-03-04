<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\UserController; // Import UserController
use function Pest\Laravel\delete;


Route::get('/user', [UserController::class, 'show_users'])->name('home'); // Ensure method name matches
Route::get('/user/{id}', [UserController::class, 'all_user'])->name('view.user'); // Ensure method name matches
Route::put('/add', [UserController::class, 'add_user'])->name("adduser"); 
Route::get('/delete{id}', [UserController::class, 'delete_user'])->name('delete.user'); 



Route::get('/updatepage/{id}', [UserController::class, 'updatepage'])->name('update.user');


Route::put('/update/{id}',[UserController::class,'updateuser'])->name('update.page');



Route::view('newuser','/adduser');




//Route::get('/', function () {
  //  return view('welcome');

//});

Route::get('/activity', function () {
    return view('activity');
});
Route::get('/bloodgroup', function () {
    return view('bloodgroup');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/scheduling', function () {
    return view('scheduling');
});
Route::get('/Information', function () {
    return view('Information');
});
Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/',[pagecontroller::class,'showuser']);

Route::fallback(function(){
    return "<h1>pages Not found </h1>";
});
