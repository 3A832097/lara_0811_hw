<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCotroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('home',[HomeCotroller::class,'index'])->name('home.index');

Route::get('home/about',[\App\Http\Controllers\AboutCotroller::class,'index'])->name('about.index');

Route::get('home/news',[\App\Http\Controllers\NewsCotroller::class,'index'])->name('news.index');
