<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Penduduk;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfGeneratorController extends Controller
{
    //
    public function index($id)
    {
        $penduduk = Penduduk::find($id);

        $jsonData = Storage::get('data.json');
        $data = json_decode($jsonData, true);

        $outputArray = [];

        foreach ($data as $item) {
            if ($item['type'] == 'hr') {
                continue;
            }
            $name = $item['name'];
            $option = isset($item['options']) && is_array($item['options']) ? $item['options'] : [];

            // If the 'option' array is empty, set the value to true; otherwise, set it to false.
            $outputArray[$name] = $option;
        }

        $newArray = [];
        foreach ($penduduk->toArray() as $key => $value) {
            // Modify the key (e.g., adding a prefix)
            // Assign the value to the new key in the new array
            if (isset($outputArray[$key]) && $outputArray[$key]) {
                if (!isset($outputArray[$key][$value])) {
                    $newArray[$key] = '';
                } else {
                    $newArray[$key] = ucwords(strtolower(explode('.', $outputArray[$key][$value]['label'])[1]));
                }
            } else {
                $newArray[$key] = $value;
            }
        }


        $mappedArray = array_map(function ($item) {
            return $item === null || $item === "" ? '-' : $item;
        }, $newArray);

        $pdf = FacadePdf::loadView('resume', $mappedArray);
        return $pdf->stream('resume.pdf');
    }
}
