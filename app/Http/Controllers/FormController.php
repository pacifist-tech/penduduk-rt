<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    //
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            // 'nik'=> 'required|numeric|min:16|max:16',
            'tempat_lahir'=> 'required|string|max:50',
            'tanggal_lahir'=> 'required|string|min:8|max:8'
        ]);

        $request->flash();

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $validData = $validator->valid();
            $penduduk = Penduduk::create([
                'nama_lengkap'=> $validData['nama_lengkap'],
                'tempat_lahir'=> $validData['tempat_lahir'],
                'tanggal_lahir'=> $validData['tanggal_lahir']
            ]);

            
            return redirect('/'); // Replace '/home' with the desired URL or route name
        }
    }
}
