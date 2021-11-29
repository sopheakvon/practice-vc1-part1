<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

//-------------User Public Route ---------------------------
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::delete('users/{id}', [UserController::class, 'destroy']);



//-------------- Private Route ------------------------------
// Route::group(['middleware' => ['auth:sanctum']], function() {
//     Route::post('events', [PostController::class, 'store']);
//     Route::put('events/{id}', [PostController::class, 'update']);
//     Route::delete('events/{id}', [PostController::class, 'destroy']);

//     Route::post('logout', [UserController::class, 'logout']);
// });

Route::post('logout', [UserController::class, 'logout']);