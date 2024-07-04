<?php

use Illuminate\Support\Facades\Route;
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

