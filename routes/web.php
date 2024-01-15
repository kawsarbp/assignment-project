<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',[SiteController::class,'index'])->name('home');
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/service',[SiteController::class,'service'])->name('service');
Route::get('/contact',[SiteController::class,'contact'])->name('contact');
Route::get('/terms',[SiteController::class,'terms'])->name('terms');
Route::get('/privacy',[SiteController::class,'privacy'])->name('privacy');
Route::get('/cookies',[SiteController::class,'cookies'])->name('cookies');
