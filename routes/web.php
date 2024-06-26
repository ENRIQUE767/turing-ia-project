<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\ZonasController;


Route::get('/', function () {
    return view('principal');
});

Route::resource('estados', EstadosController::class);
Route::resource('zonas', ZonasController::class);
