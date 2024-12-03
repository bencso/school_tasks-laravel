<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',
[HomeController::class, 'index']
)->name('index');

Route::get('/adatlap/{id}',
[HomeController::class, 'adatlap']
)->name('adatlap');

Route::get('/uticel/{p}',

[HomeController::class, 'uticel']
)->name('uticel');
