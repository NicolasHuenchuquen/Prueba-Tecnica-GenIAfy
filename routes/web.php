<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Redirigir la raíz ("/") a la raíz de las rutas del archivo api.php
Route::get('/', function () {
    return redirect('/api/empleados');
});