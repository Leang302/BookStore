<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/dashboard',function(){
        return view('admin.layout.dashboard');
    })->name('dashboard');

    Route::get('/dashboard/catagories',function(){
        return view('admin.catagory');
    })->name('dashboard.catagories');
})->middleware('auth');

