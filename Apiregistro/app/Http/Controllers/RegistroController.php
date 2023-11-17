<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registro = Registro::all();
        // return response()->json($registro);
        return view('auth.registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required',
            'cedula' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ]);

        $registro = Registro::create([
            'nombre' => $request -> nombre,
            'cedula' => $request -> cedula,
            'telefono' => $request -> telefono,
            'direccion' => $request -> direccion
        ]);
        return view('welcome', ['usuario'=> $usuarios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $cedula)
    {
        $registro = Registro::find($cedula);
        return response()->json($registro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $cedula)
    {
        $registro = Registro::findOrFail($cedula)->update($request->all());
        return response()->json($registro);
    }   

    /**
     * Remove the specified resource from storage.
     */

/**
 * Elimina el recurso especificado del almacenamiento.
 */
public function destroy(string $cedula)
{
    $registro = Registro::find($cedula);
    
    if (!$registro) {
        return response()->json(['message' => 'Registro no encontrado'], 404);
    }

    $registro->delete();

    return response()->json(['message' => 'Registro eliminado exitosamente']);
}
}
