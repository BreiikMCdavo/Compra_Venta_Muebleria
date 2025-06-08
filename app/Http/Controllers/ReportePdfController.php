<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Producto; // O el modelo que quieras exportar

class ReportePdfController extends Controller
{
    public function exportPdf()
    {
        $productos = Producto::all();

        $pdf = Pdf::loadView('reporte.pdf', compact('productos'));

        // return $pdf->download('reporte_productos.pdf');
        return $pdf->stream('reporte_productos.pdf');
    }
}

