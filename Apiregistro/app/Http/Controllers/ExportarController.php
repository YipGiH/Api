<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use PDF;

class ExportarController extends Controller
{
    public function exportarPDF($id) {
        $usuarios = Registro::find($id);
    
        if (!$usuarios) {
            abort(404); 
        }
    
        $pdf = PDF::loadView('pdf.user', ['usuario' => $usuarios]);
    
        return $pdf->download('usuario_'.$usuarios->id.'.pdf');
}
}
