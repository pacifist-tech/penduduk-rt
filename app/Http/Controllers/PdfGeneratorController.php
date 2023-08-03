<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Penduduk;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfGeneratorController extends Controller
{
    //
    public function index($id)
    {
        $penduduk = Penduduk::find($id);


        $pdf = FacadePdf::loadView('resume', $penduduk->toArray());
        return $pdf->stream('resume.pdf');
    }
}
