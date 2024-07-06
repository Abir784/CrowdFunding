<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile_controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;


Route::get('/',[MainController::class,'index'])->name('index');
Auth::routes();
Route::get("/profile_update",[profile_controller::class, "index"])->name('sadia');
Route::post("/form_update",[profile_controller::class, "register"]);
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/campaign_details/{id}',[MainController::class,'campaign_page'])->name('campaign.details');
Route::get('/add_campaign',[DashboardController::class,'show_campaign_form'])->name('campaign.form');
Route::post('/add_campaign_post',[DashboardController::class,'campaign_form_post'])->name('campaign.form.post');
// Route::get('/getData',function(){

//     echo 'Abir';


// })->name('Abir');

Route::get('/signup', function(){
    return view('auth.register');
})->name('sign-up');
