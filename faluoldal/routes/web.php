<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomplexController;

Route::view('/', 'welcome');
Route::get(
    '/hirek',
    [
        KomplexController::class,
        "Hirek"
    ]
    );
Route::get('/vendegkonyv', [KomplexController::class, "Vendegkonyv"]);
Route::post('/vendegkonyv', [KomplexController::class, "VendegkonyvBekuldes"]);
