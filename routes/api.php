<?php

use App\Http\Controllers\ApiTokenController;
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

Route::post('/tokens/create', [ApiTokenController::class, 'createToken'])->name('tokensCreate');

Route::group(['middleware' => 'auth:sanctum'], static function () {
    Route::get('/user', static function (Request $request) {
        return $request->user();
    });
    Route::apiResource('/car', \App\Http\Controllers\CarController::class);
});
