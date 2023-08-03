<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfGeneratorController extends Controller
{
    //
    public function index() 
    {
        $data = [
            'imagePath'    => public_path('img/profile.png'),
            'name'         => 'John Doe',
            'address'      => 'USA',
            'mobileNumber' => '000000000',
            'email'        => 'john.doe@email.com'
        ];
        $pdf = FacadePdf::loadView('resume', $data);
        return $pdf->stream('resume.pdf');
    }
}
