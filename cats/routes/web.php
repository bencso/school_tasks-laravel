<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsController;
Route::get("/", [CatsController::class, 'index']);
Route::get("/cat/{id}", [CatsController::class, 'show']);
Route::get("/authors", [CatsController::class,"authors"]);
Route::get("/random", [CatsController::class,"random"]);
