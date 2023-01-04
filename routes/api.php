<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DynastiesController;
use App\Http\Controllers\EmperorsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// http://localhost:8000/api/register
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // 查詢所有朝代
    Route::get('dynasties', [DynastiesController::class, 'api_dynasties']);
    // 修改指定朝代
    Route::patch('dynasties', [DynastiesController::class, 'api_update']);
    // 刪除指定朝代
    Route::delete('dynasties', [DynastiesController::class, 'api_delete']);
    // 查詢所有皇帝
    Route::get('emperors', [EmperorsController::class, 'api_emperors']);
    // 修改指定皇帝
    Route::patch('emperors', [EmperorsController::class, 'api_update']);
    // 刪除指定皇帝
    Route::delete('emperors', [EmperorsController::class, 'api_delete']);

});