<?php

use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/users', [UserController::class,'index']);
Route::get('/users/{user}', [UserController::class,'show']);
Route::put('/users/{user}', [UserController::class,'update']);
Route::delete('/users/{user}', [UserController::class,'destroy']);

// Route::resource('users', UserController::class)->except(['edit','edit']);
