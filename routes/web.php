<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile_controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

Route::get("/profile_update",[profile_controller::class, "index"])->name('sadia');
Route::post("/form_update",[profile_controller::class, "update"])->name('profile.update');
Auth::routes();
Route::get('/', function () {
    return view('index');
});


Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');



// Route::get('/getData',function(){

//     echo 'Abir';


// })->name('Abir');

Route::get('/signup', function(){
    return view('auth.register');
})->name('sign-up');
