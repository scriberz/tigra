<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/items', [ItemController::class, 'index']);
Route::put('/items/{id}/position', [ItemController::class, 'updatePosition']);
Route::delete('/items/{id}', [ItemController::class, 'destroy']);
