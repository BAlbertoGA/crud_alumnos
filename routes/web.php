<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\AlumnoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('escuelas', EscuelaController::class);
Route::resource('alumnos', AlumnoController::class);
