<?php

use App\Http\Controllers\Api\ChatSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function (): void {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/chat-sessions', [ChatSessionController::class, 'index']);

    Route::post('/chat-sessions', [ChatSessionController::class, 'store']);
    Route::get('/chat-sessions/{id}', [ChatSessionController::class, 'show']);
    Route::post('/chat-sessions/{id}/messages', [ChatSessionController::class, 'storeMessage']);
    Route::patch('/chat-sessions/{id}', [ChatSessionController::class, 'update']);
    Route::delete('/chat-sessions/{id}', [ChatSessionController::class, 'destroy']);
});
