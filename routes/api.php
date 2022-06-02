<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\GigController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(ArtistController::class)->group(function () {
    Route::get('/artist', 'index')->name('artist');
});

Route::controller(FestivalController::class)->group(function () {
    Route::get('/festival', 'index')->name('festival');
});

Route::controller(GigController::class)->group(function () {
    Route::get('/gig', 'index')->name('gig');
});