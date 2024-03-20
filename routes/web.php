<?php

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.index');
});
//navigation route
Route::group(['prefix'=>'/','as'=>'nav.'],function(){
    Route::get('aboutUs',[NavController::class,'aboutUs'])->name('aboutUs');
    Route::get('book',[NavController::class,'book'])->name('book');
    Route::get('contactUs',[NavController::class,'contactUs'])->name('contactUs');

});
