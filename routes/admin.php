<?php

use App\Http\Controllers\CatagoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/dashboard',function(){
        return view('admin.layout.dashboard');
    })->name('dashboard');

    Route::get('/dashboard/catagories',[CatagoryController::class,'index'])->name('dashboard.catagories');
    Route::post('/dashboard/catagories',[CatagoryController::class,'create'])->name('catagories.add');
})->middleware('auth');

