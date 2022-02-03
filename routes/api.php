<?php

use App\Http\Controllers\API\DoktorController;
use App\Http\Controllers\API\PorodilisteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthentificationController;

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



Route::post('register', [AuthentificationController::class, 'register']);
Route::post('login', [AuthentificationController::class, 'login']);
Route::get('porodiliste', [PorodilisteController::class, 'index']);
Route::get('porodiliste/{porodiliste}', [PorodilisteController::class, 'show']);
Route::get('doktor', [DoktorController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('porodiliste', [PorodilisteController::class, 'store']);
    Route::delete('porodiliste/{porodiliste}', [PorodilisteController::class, 'destroy']);
    Route::delete('doktor/{doktor}', [DoktorController::class, 'destroy']);
    Route::post('logout', [AuthentificationController::class, 'logout']);
});
