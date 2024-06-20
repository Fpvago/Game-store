<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('Pelanggan.home');
});

Route::get('/admin',[Admincontroller::class,'index']);

Route::get('/createadmin',[Admincontroller::class,'create']);

Route::post('/saveadmin',[AdminController::class,'store']);