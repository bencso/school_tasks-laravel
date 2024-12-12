<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanuloController;

Route::get("/", [TanuloController::class, "index"]);
Route::post("/", [TanuloController::class, "save"]);
