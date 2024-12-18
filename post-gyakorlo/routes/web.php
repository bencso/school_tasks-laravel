<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanuloController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\KlippController;
use App\Http\Controllers\SzallitasController;
use App\Http\Controllers\SzineszController;

Route::get("/", [TanuloController::class, "index"]);
Route::post("/", [TanuloController::class, "save"]);

Route::get("/autok", [AutoController::class, "index"]);
Route::post("/autok", [AutoController::class, "save"]);

Route::get("/klippek", [KlippController::class, "index"]);
Route::post("/klippek", [KlippController::class, "save"]);

Route::get("/szallitas", [SzallitasController::class, "index"]);
Route::post("/szallitas", [SzallitasController::class, "save"]);

Route::get("/szinesz", [SzineszController::class, "index"]);
Route::post("/szinesz", [SzineszController::class, "save"]);