<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontinensController;
use App\Http\Controllers\OrszagController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/kontinensek", [KontinensController::class, "index"]);
Route::get("/kontinensek/{id}", [KontinensController::class, "show"]);
Route::get("/orszagok", [OrszagController::class, "index"]);
Route::get("/orszagok/{id}", [OrszagController::class, "show"]);
