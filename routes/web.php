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
    return redirect('emperors');
});

Route::get('emperors', [EmperorsController::class, 'index'])->name('emperors.index');

Route::get('emperors/create', [EmperorsController::class, 'create'])->name('emperors.create');

Route::post('emperors/store', [EmperorsController::class, 'store'])->name('emperors.store');

Route::get('emperors/{id}', [EmperorsController::class, 'show'])->where('id', '[0-9]+')->name('emperors.show');

Route::get('emperors/{id}/edit', [EmperorsController::class, 'edit'])->where('id', '[0-9]+')->name('emperors.edit');

Route::patch('emperors/update/{id}', [EmperorsController::class, 'update'])->where('id', '[0-9]+')->name('emperors.update');

Route::delete('emperors/delete/{id}', [EmperorsController::class, 'destroy'])->where('id', '[0-9]+')->name('emperors.destroy');


Route::get('dynasties', [DynastiesController::class, 'index'])->name('dynasties.index');

Route::get('dynasties/create', [DynastiesController::class, 'create'])->name('dynasties.create');

Route::post('dynasties/store', [DynastiesController::class, 'store'])->name('dynasties.store');

Route::get('dynasties/{id}', [DynastiesController::class, 'show'])->where('id', '[0-9]+')->name('dynasties.show');

Route::get('dynasties/{id}/edit', [DynastiesController::class, 'edit'])->where('id', '[0-9]+')->name('dynasties.edit');

Route::patch('dynasties/update/{id}', [DynastiesController::class, 'update'])->where('id', '[0-9]+')->name('dynasties.update');

Route::delete('dynasties/delete/{id}', [DynastiesController::class, 'destroy'])->where('id', '[0-9]+')->name('dynasties.destroy');
