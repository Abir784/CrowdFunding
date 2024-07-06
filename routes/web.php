<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile_controller;
Route::get('/', function () {
    return view('index');
});
Route::get("/profile_update",[profile_controller::class, "index"])->name('sadia');
Route::post("/register",[profile_controller::class, "register"]);
