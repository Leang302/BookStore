<?php

use App\Http\Controllers\CatagoryController;
use App\Http\Middleware\MustBeLoggedIn;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>MustBeLoggedIn::class],function(){
    Route::get('/dashboard',function(){
        return view('admin.layout.dashboard');
    })->name('dashboard');
    //catagory
    Route::get('/dashboard/catagories',[CatagoryController::class,'index'])->name('dashboard.catagories');
    Route::post('/dashboard/catagories',[CatagoryController::class,'create'])->name('catagories.add');
    Route::delete('/dashboard/catagory/delete/{catagory}',[CatagoryController::class,'destroy'])->name('catagory.delete');
})->middleware('auth');

