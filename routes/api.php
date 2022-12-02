<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistrictApiController;
use App\Http\Controllers\RegionApiController;
use App\Http\Controllers\SubjectApiController;
use App\Http\Controllers\WeekApiController;
use App\Http\Controllers\MediaFileApiController;
use App\Http\Controllers\LanguageApiController;
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
