<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AniversariosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('aniversarios', AniversariosController::class);
