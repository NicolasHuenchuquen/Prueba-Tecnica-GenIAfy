<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importa el validador para validar los datos de entrada.
use Illuminate\Support\Facades\Validator;
//Importacion del modelo Empleados
use App\Models\Empleados;

class EmpleadosController extends Controller
{
    // Mostrar lista completa de empleados (GET)
    public function index()
    {
        $empleados = Empleados::paginate(10);
        return view('index', compact('empleados'));
    }

    // Buscar empleado por ID (POST)
    public function buscar(Request $request)
    {
        // Valida que el campo `id` sea opcional pero numérico si se envía
        $request->validate(['id' => 'nullable']);

        // Si el campo está vacío, devuelve la lista completa de empleados
        if (!$request->id) {
            return redirect()->route('empleados.index');
        }

        // Si no está vacío, busca empleados por ID
        $empleados = Empleados::where('id', $request->id)->paginate(10);
        return view('index', compact('empleados'));
    }
}
