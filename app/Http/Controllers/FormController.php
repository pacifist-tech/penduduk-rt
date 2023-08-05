<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

            Penduduk::create([
                'nama_lengkap'=> $validData['nama_lengkap'],
                'tempat_lahir'=> $validData['tempat_lahir'],
                'tanggal_lahir'=> $validData['tanggal_lahir'],
                'alamat_sebelumnya'=> $validData['alamat_sebelumnya'],
                'nik'=> $validData['nik'],
            ]);

            
            return redirect('/'); // Replace '/home' with the desired URL or route name
        }
    }

    public function update(Request $request, $id){
        $penduduk = Penduduk::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir'=> 'required|string|max:50',
            'tanggal_lahir'=> 'required|string|min:8|max:8'
        ]);

        $validData = $validator->valid();

        // dd($validData);

        $penduduk->update($validData);


        return redirect()->route('penduduk');
    }

    public function delete(Request $request, $id){
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();
        return redirect()->route('penduduk');

    }
}
