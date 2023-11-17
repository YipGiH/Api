<?php

namespace App\Http\Controllers;
use App\Models\Registro;


use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function index()
    {
        $usuarios = Registro::all();
        // return response()->json($registro);
        return view('auth.listar', ['usuarios' => $usuarios]);
    }
}
