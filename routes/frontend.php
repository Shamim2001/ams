<?php

use App\Http\Controllers\Frontend\ContractMessageController;
use App\Http\Controllers\Frontend\HomeController;
use \Illuminate\Support\Facades\Route;

Route:: get('/',[HomeController::class,'home'])->name('home');



Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/leadership-team',[HomeController::class,'leadershipTeam'])->name('leadership-team');
Route::get('/who-we-are',[HomeController::class,'whoweare'])->name('who-we-are');
Route::get('/why-the-chemical',[HomeController::class,'Whythechemical'])->name('why-the-chemical');
Route::get('/our-certification',[HomeController::class,'Ourcertification'])->name('our-certification');
Route::get('/our/customer',[HomeController::class,'ourCustomer'])->name('our-customer');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/service/{slug}',[HomeController::class,'serviceDetails'])->name('service-details');


Route::get('/products',[HomeController::class,'products'])->name('products');
Route::get('/search/products',[HomeController::class,'searchProducts'])->name('search.products');
Route::get('/product/{slug}',[HomeController::class,'productDetails'])->name('product-details');
Route::post('/product-search',[HomeController::class,'productSearch'])->name('product-search');
Route::get('/link-resource',[HomeController::class,'linkResource'])->name('link-resource');
Route::get('/we-present',[HomeController::class,'wePresent'])->name('we-present');
Route::get('/contact',[HomeController::class,'contract'])->name('contact');

Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/contract-message',[HomeController::class,'store'])->name('contract-message.store');
Route::post('/message',[HomeController::class,'message'])->name('message');

Route::get('/vote/{id}',[HomeController::class,'showVote'])->name('vote-show');
Route::get('/vote-count/{id}',[HomeController::class,'voteCount'])->name('vote-count');

Route::get('/lottery',[HomeController::class,'lottery'])->name('lottery');


Route::post('/patient-status',[HomeController::class,'patientStatus'])->name('patient.status');

// Route::resource('/contract-message',ContractMessageController::class);
