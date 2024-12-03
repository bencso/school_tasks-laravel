<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PizzaController::class, 'akcios']);
Route::get('/adatlap/{id}', [PizzaController::class,'adatlap']);
Route::get('/all', [PizzaController::class,'all']);
Route::get('/all/{q}',[PizzaController::class,'allRend']);
Route::get('/rnd', [PizzaController::class,'random']);
Route::view('/add', 'add');
Route::post('/add', [PizzaController::class,'add']);
Route::get("/mod",[PizzaController::class,'mod']);
Route::get("/mod/{id}",[PizzaController::class,"modForm"]);
Route::post('/mod/{id}',[PizzaController::class,"modData"]);
