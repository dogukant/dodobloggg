<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\front\index@index')->name('index');
Route::get('/kategori/{category}','App\Http\Controllers\front\index@category')->name('category');
Route::get('/{category}/{slug}','App\Http\Controllers\front\index@single')->name('single');
