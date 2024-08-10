<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

// use PDF;


class PDFController extends Controller
{

    public function generatePDF(Request $request)
    {
        // Retrieve all necessary parameters from the request
        $data = $request->only([
            'title',
            'location',
            'marque',
            'modele',
            'annee_modele',
            'carburant',
            'boite_vitesse',
            'kilometrage',
        ]);

        // Retrieve price statistics from the request
        $priceStatistics = $request->only(['minPrice', 'avgPrice', 'maxPrice']);

        // Merge data and priceStatistics for the PDF view
        $pdfData = array_merge($data, ['priceStatistics' => $priceStatistics]);

        // Load the view and pass the data
        $pdf = PDF::loadView('pdf.document', $pdfData);

        // Return the generated PDF
        return $pdf->download('document.pdf');
    }
}
