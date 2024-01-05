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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('hall', 'App\Http\Controllers\HallController@index');

Route::apiResource('hall', 'App\Http\Controllers\HallController');
Route::apiResource('film', 'App\Http\Controllers\FilmController');
Route::apiResource('seats', 'App\Http\Controllers\SeatsController');
Route::apiResource('movie', 'App\Http\Controllers\MovieShowController');
Route::apiResource('movie_hall', 'App\Http\Controllers\UserMovieShowController');
Route::apiResource('movie_seats', 'App\Http\Controllers\UserSeatsController');
Route::apiResource('ticket', 'App\Http\Controllers\TicketController');
Route::apiResource('user', 'App\Http\Controllers\UserController');
Route::apiResource('qr', 'App\Http\Controllers\QrController');
