<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/filmek', [FilmController::class, 'index']);
Route::get('/api/filmek/{azonosito}', [FilmController::class, 'show']);
Route::post('/api/film/',[FilmController::class, 'store']);
Route::put('/api/filmupdate/{azonosito}', [FilmController::class, 'update']);
Route::delete('/api/filmdestroy/{azonosito}', [FilmController::class, 'destroy']);

// Route::apiResource('/api/filmek', FilmController::class);