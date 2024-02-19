<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('product',ProductController::class);

Route::middleware('auth:sanctum')->resource('product',ProductController::class);

//Route::resource('product',ProductController::class)->middleware('auth:sanctum');

Route::post('/login', [UserController::class, 'store']);

Route::middleware('auth:sanctum')->delete('/logout/{user}', [UserController::class, 'destroy']);

//Route::delete('/logout/{user}', [UserController::class, 'destroy']);

