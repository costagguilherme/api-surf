<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('surfista')->group(function () {
    Route::post('', [App\Http\Controllers\SurfistaController::class, 'store']);
    Route::get('', [App\Http\Controllers\SurfistaController::class, 'index']);
});

Route::prefix('bateria')->group(function () {
    Route::post('', [App\Http\Controllers\BateriaController::class, 'store']);
    Route::get('/{id}/vencedor', [App\Http\Controllers\BateriaController::class, 'winner']);
});

Route::post('onda', [App\Http\Controllers\OndaController::class, 'store']);

Route::post('nota', [App\Http\Controllers\NotaController::class, 'store']);




