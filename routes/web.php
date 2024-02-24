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
//Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/admin-form', [App\Http\Controllers\FormController::class, 'index'])->name('admin-form');
Route::post('/simpan-form', [App\Http\Controllers\FormController::class, 'simpanInput'])->name('simpan-form');

//Auth::routes();

