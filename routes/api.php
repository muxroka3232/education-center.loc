<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Additional\DistrictApiController;
use App\Http\Controllers\Additional\RegionApiController;
use App\Http\Controllers\Additional\SubjectApiController;
use App\Http\Controllers\Additional\WeekApiController;
use App\Http\Controllers\Additional\MediaFileApiController;
use App\Http\Controllers\Additional\LanguageApiController;
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

Route::apiResource('regions', RegionApiController::class);
Route::apiResource('districts', DistrictApiController::class);
Route::apiResource('languages', LanguageApiController::class);
Route::apiResource('subjects', SubjectApiController::class);
Route::apiResource('weeks', WeekApiController::class);
Route::apiResource('media-files', MediaFileApiController::class);
