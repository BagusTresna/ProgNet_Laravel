<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/', [BiodataController::class, 'index']);
route::resource('hasil_form/create', FormController::class);
Route::resource('hasil_form', FormController::class);
Route::put('/hasil_form/{id}', 'FormController@update')->name('hasil_form.update');