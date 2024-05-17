<?php

use Illuminate\Support\Facades\Route;
//controller người dùng
use App\Http\controllers\frontend\HomeController;
use App\Http\controllers\frontend\ProductController;
use App\Http\controllers\frontend\ContactController;



Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('san-pham',[ProductController::class,'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[ProductController::class,'detail'])->name('site.product_detail');
Route::get('lien-he',[ContactController::class,'index'])->name('site.contact');
