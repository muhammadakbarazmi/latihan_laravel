<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/products', [App\Http\Controllers\HomeController::class, 'products']);
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services']);
Route::get('/galery', [App\Http\Controllers\HomeController::class, 'galery']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
