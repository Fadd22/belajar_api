<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\AuthController;
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

// Route::get('kategori',[KategoriController::class ,'index']);
// Route::post('kategori', [KategoriController::class, 'store']);
// Route::get('kategori/{id}', [KategoriController::class, 'show']);
// Route::put('kategori/{id}', [KategoriController::class, 'update']);
// Route::delete('kategori/{id}', [KategoriController::class, 'delete']);


// Route::resource('film', FilmController::class);

// Route::middleware(['auth:sanctum'])->group(function () {
Route::post('logout', [AuthController::class, 'logout']);
Route::resource('kategori', KategoriController::class);
Route::resource('genre', GenreController::class);
Route::resource('actor', ActorController::class);
// });

//auth route
Route::post('login',[AuthController::class, 'login']);
Route::post('register',[AuthController::class, 'register']);
