<?php

use App\Http\Controllers\EmperorsController;
use App\Http\Controllers\DynastiesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('emperors', [EmperorsController::class, 'index'])->name('emperors.index');
Route::get('emperors/{id}', [EmperorsController::class, 'show'])->where('id', '[0-9]+')->name('emperors.show');
Route::get('emperors/delete/{id}', [EmperorsController::class, 'destroy'])->where('id', '[0-9]+')->name('emperors.destroy');

Route::get('dynasties', [DynastiesController::class, 'index'])->name('dynasties.index');
Route::get('dynasties/{id}', [DynastiesController::class, 'show'])->where('id', '[0-9]+')->name('dynasties.show');
Route::get('dynasties/delete/{id}', [DynastiesController::class, 'destroy'])->where('id', '[0-9]+')->name('dynasties.destroy');
