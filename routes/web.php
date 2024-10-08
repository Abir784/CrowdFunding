<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile_controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/',[MainController::class,'index'])->name('index');
Route::get("/profile_update",[profile_controller::class, "index"])->name('sadia');
Route::get("/donation/{id}",[DonationController::class,"donation_form"])->name('donation.form');
Route::get("/donation_details",[DonationController::class,"donation_table"])->name('show.donations');
Route::post("/donation_post",[DonationController::class,"donation_form_post"])->name('donation.form.post');

Route::get("/investment/{id}",[InvestmentController::class, "investment_form"])->name('investment.form');
Route::post("/investment_post",[InvestmentController::class, "investment_form_post"])->name('investment.form.post');
Route::get("/investment_details",[InvestmentController::class,"investment_table"])->name('show.investments');

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/campaign_details/{id}',[MainController::class,'campaign_page'])->name('campaign.details');
Route::get('/campaign_table',[MainController::class,'campaign_table'])->name('campaign.table');
Route::get('/campaigns',[MainController::class,'campaigns_all'])->name('view.all.campaign');
Route::get('/add_campaign',[DashboardController::class,'show_campaign_form'])->name('campaign.form');
Route::post('/add_campaign_post',[DashboardController::class,'campaign_form_post'])->name('campaign.form.post');
Route::post("/form_update",[profile_controller::class, "update"])->name('profile.update');


Route::get('/article_details/{id}',[MainController::class,'article_details'])->name('article.details');
//
Route::get('/signup', function(){
    return view('auth.register');
})->name('sign-up');

Route::get('/add_article',[DashboardController::class,'show_article_form'])->name('article.form');
Route::post('/add_article_post',[DashboardController::class,'article_form_post'])->name('article.form.post');
Route::get('/articles',[MainController::class,'article'])->name('view.all.article');


//
Route::post('/user_post',[MainController::class,'user_post'])->name('user_post');


Route::post('/GetField',[DashboardController::class,'ajax']);


Route::get('paypal', [PayPalController::class, 'index'])->name('paypal');
Route::get('paypal/payment', [PayPalController::class, 'payment'])->name('paypal.payment');
Route::get('paypal/payment/success', [PayPalController::class, 'paymentSuccess'])->name('paypal.payment.success');
Route::get('paypal/payment/cancel', [PayPalController::class, 'paymentCancel'])->name('paypal.payment/cancel');

Route::post("/search_post",[MainController::class,'search'])->name('search');
Route::post("/filter_post",[MainController::class,'filter'])->name('filter');
Route::get('/article_table',[MainController::class,'article_table'])->name('article.table');





