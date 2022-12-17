<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::group(['prefix' => 'ec' , 'namespace' => 'App\Http\Controllers'], function(){
    Route::apiResource('user', App\Http\Controllers\UserController::class);
    Route::apiResource('products', Controllers\ProductCodeController::class);
    Route::apiResource('addresses', Controllers\AddressController::class);
});

Route::apiResource('address', App\Http\Controllers\AddressController::class);
Route::apiResource('country', 'App\Http\Controllers\CountryController');
