<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\profile_controller;
Route::get('/', function () {
    return view('index');
});
Route::get("/profile_update",[profile_controller::class, "index"])->name('sadia');
Route::post("/register",[profile_controller::class, "register"]);
=======
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');


Route::get('/signup', function(){
    return view('auth.register');
})->name('sign-up');

>>>>>>> 9651c7bcee75d0b6e6b2aac860ed60c92d1c17c1
