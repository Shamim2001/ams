<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PrizeController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Backend\QuizController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\LinkResourceController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TeamMemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\PatientController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth'],function (){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::resource('/slider',SliderController::class);
    Route::resource('/service',ServiceController::class);
    Route::resource('/team-member',TeamMemberController::class);
    Route::resource('/product',ProductController::class);
    Route::resource('/company',CompanyController::class);
    Route::resource('/customer',CustomerController::class);
    Route::resource('/supplier',SupplierController::class);
    Route::resource('/link-resource',LinkResourceController::class);
    Route::resource('/country',CountryController::class);
    Route::resource('/patient',PatientController::class);
    Route::post('/import',[PatientController::class,'import'])->name('patient.import');

    Route::group(['prefix'=>'setting','as'=>'setting.'],function(){
       Route::post('/update',[SettingController::class,'update'])->name('update');
       Route::get('/pages',[SettingController::class,'pages'])->name('pages');
       Route::get('/get-in-touch',[SettingController::class,'getInTouch'])->name('get-in-touch');
       Route::get('/web-settings',[SettingController::class,'webSettings'])->name('web-settings');
    });

    Route::resource('/category',CategoryController::class);

    Route::resource('quiz',QuizController::class);
    Route::get('/quiz/show/{id}/{type}',[QuizController::class,'show'])->name('quiz.show');
    Route::get('/quiz-published/{id}',[QuizController::class,'quizPublished'])->name('quiz-published');
    Route::get('/quiz-unpublished/{id}',[QuizController::class,'quizUnpublished'])->name('quiz-unpublished');

    Route::get('/prize-create/{id}',[PrizeController::class,'create'])->name('prize.create');
    Route::post('/prize-store/{id}',[PrizeController::class,'store'])->name('prize.store');
    Route::get('/prize-edit/{id}',[PrizeController::class,'edit'])->name('prize.edit');
    Route::put('/prize-update/{id}',[PrizeController::class,'update'])->name('prize.update');
    Route::delete('/prize-delete/{id}',[PrizeController::class,'destroy'])->name('prize.destroy');

    Route::get('/question/{id}',[QuestionController::class,'create'])->name('question.create');
    Route::post('/question/{id}',[QuestionController::class,'store'])->name('question.store');
    Route::get('/question-edit/{id}',[QuestionController::class,'edit'])->name('question.edit');
    Route::put('/question-update/{id}',[QuestionController::class,'update'])->name('question.update');
    Route::delete('/question-delete/{id}',[QuestionController::class,'destroy'])->name('question.destroy');

    Route::post('/save-winners/{id}',[QuizController::class,'saveWinners'])->name('save-winners');
});
