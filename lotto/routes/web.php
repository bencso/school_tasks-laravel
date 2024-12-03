<?php

use App\Http\Controllers\LottoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [LottoController::class, 'evekLekerd']);
Route::get('/ev/{ev}',[LottoController::class,'evLekerd']);
Route::get('/adatlap/{id}',[LottoController::class,'hetLekerd']);
Route::get('/mikor',[LottoController::class,'mikor']);
Route::get("/random", [LottoController::class,"random"]);
Route::view('/ujhuzas', 'ujhuzas');
Route::post("/ujhuzas", [LottoController::class,"ujhuzasPost"]);
Route::get("/nyeremeny/{id}", [LottoController::class,"nyeremeny"]);
Route::post("/nyeremeny/{id}", [LottoController::class,"nyeremenyData"]);
Route::get("/nyeremeny/{id}/szamok", [LottoController::class,"nyeremenySzam"]);
Route::post("/nyeremeny/{id}/szamok", [LottoController::class,"nyeremenySzamData"]);
