<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('Pelanggan.home');
// });

Route::get('/admin',[Admincontroller::class,'index']);
Route::get('/createadmin',[Admincontroller::class,'create']);
Route::post('/saveadmin',[AdminController::class,'store']);
Route::get('/detailadmin/{id}',[AdminController::class,'show']);
Route::get('/editadmin/{id}',[AdminController::class,'edit']);
Route::put('/updateadmin/{id}',[AdminController::class,'update']);
Route::get('/deleteadmin/{id}',[AdminController::class,'destroy']);

Route::get('/product',[ProductController::class,'index']);
Route::get('/creategames',[ProductController::class,'create']);
Route::post('/savegames',[ProductController::class,'store']);
Route::get('/editgames/{id}',[ProductController::class,'edit']);
Route::put('/updategames/{id}',[ProductController::class,'update']);
Route::get('/deletegames/{id}',[ProductController::class,'destroy']);

Route::get('/',[HomeController::class,'index']);

Route::get('/productpelanggan',[TransaksiController::class,'index']);
Route::get('/orders/{id}',[TransaksiController::class,'create']);
Route::get('/ordersave',[TransaksiController::class,'store']);

 Route::get('/checkout/{id}',[CheckoutController::class,'create'])->name('checkout');
