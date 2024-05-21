<?php

use App\Http\Controllers\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/user/profile', [Profile::class, 'update']);
});

Route::get('/fetch-reviews', [DataController::class, 'fetchData']);

Route::get('/testData', function () {
    return response()->json(['message' => 'This is a test response']);
});

