<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

// use PDF;


class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'domPDF in Laravel 10'];
        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->download('document.pdf');
    }
}
