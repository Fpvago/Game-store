<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Pelanggan.home');
});

Route::get('/admin',[Admincontroller::class,'index']);

Route::get('/createadmin',[Admincontroller::class,'create']);

Route::post('/saveadmin',[AdminController::class,'store']);

Route::get('/detailadmin/{id}',[AdminController::class,'show']);

Route::get('/editadmin/{id}',[AdminController::class,'edit']);

Route::put('/updateadmin/{id}',[AdminController::class,'update']);

Route::get('/deleteadmin/{id}',[AdminController::class,'destroy']);
