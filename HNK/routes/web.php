<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelepulesController;

Route::get('/', [TelepulesController::class, 'index']);
Route::get('/all', [TelepulesController::class, 'all']);
Route::get('/abc',[TelepulesController::class, 'abc']);
Route::get('/abc/{betu}', [TelepulesController::class,'parameter']);
