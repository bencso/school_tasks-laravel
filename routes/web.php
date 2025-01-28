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

Route::view("/registration", "registration");
Route::view("/login", "login");
Route::get("profil", [KomplexController::class, "Profil"]);

Route::post("/login", [KomplexController::class, "Login"]);
Route::post("/logout", [KomplexController::class, "Logout"]);
Route::post("/register", [KomplexController::class, "Register"]);