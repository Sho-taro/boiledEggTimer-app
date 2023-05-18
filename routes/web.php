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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', \App\Http\Controllers\Home\IndexController::class)->name('home.index');
Route::post('/cooking', \App\Http\Controllers\Cooking\IndexController::class)->name('cooking.index');
Route::get('/timer', \App\Http\Controllers\Timer\IndexController::class)->name('timer.index');
