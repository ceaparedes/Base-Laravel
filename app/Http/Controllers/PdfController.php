<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    
    public function download()
    {
        $data = [
            'titulo' => 'Styde.net'
        ];

        $pdf = \PDF::loadView('pdf.index', $data);

        return $pdf->download('archivo.pdf');
    }
}
