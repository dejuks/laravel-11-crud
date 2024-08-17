<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products',[ProductController::class,'index'])->name('product.list');
Route::get('create',[ProductController::class,'create'])->name('product.create');
Route::post('store',[ProductController::class,'store'])->name('product.store');


