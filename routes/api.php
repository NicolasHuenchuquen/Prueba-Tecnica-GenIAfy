<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

//Controlador
use App\Http\Controllers\empleadosController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');
Route::post('/empleados/buscar', [EmpleadosController::class, 'buscar'])->name('empleados.buscar');
