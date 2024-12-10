<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ItemController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', function () {
    return response()->json(['message' => 'Unauthenticated'], 401);
})->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/activities', [ActivityController::class, 'store']);
    Route::get('/activities', [ActivityController::class, 'index']);
    Route::delete('/activities/{id}', [ActivityController::class, 'destroy']);

    Route::post('/items', [ItemController::class, 'store']);
    Route::get('/activities/{id}/items', [ItemController::class, 'index']);
    Route::put('/items/{id}', [ItemController::class, 'update']);
    Route::delete('/items/{id}', [ItemController::class, 'destroy']);
});