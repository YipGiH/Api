<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportarController extends Controller
{
    public function exportarPDF($id) {
        $usuarios = User::find($id);
    
        if (!$usuarios) {
            abort(404); 
        }
    
        $pdf = PDF::loadView('pdf.user', ['usuario' => $usuarios]);
    
        return $pdf->download('usuario_'.$usuarios->id.'.pdf');
}
}
