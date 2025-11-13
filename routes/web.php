<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\AlumnoController;

// Route::get('/', function () {
//     return view('alumnos.index');
// });

Route::resource('escuelas', EscuelaController::class);
Route::resource('alumnos', AlumnoController::class);

// Route::get('/escuelas', [EscuelaController::class, 'index'])->name('escuelas.index');
// Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/', [AlumnoController::class, 'index'])->name('home');