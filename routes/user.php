<?php
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\TransitionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'user','as'=>'user.','middleware'=>['auth','user']],function (){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/all-notification',[DashboardController::class,'allNotification'])->name('all-notification');
    Route::resource('/profile',ProfileController::class);
    Route::resource('/transition',TransitionController::class);
});
