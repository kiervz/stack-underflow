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

Route::view('/', 'home');
Route::view('/{any}', 'home');
Route::view('/{any}/{any1}', 'home');



Route::get('/home', [App\Http\Controllers\API\HomeController::class, 'index'])->name('home');
