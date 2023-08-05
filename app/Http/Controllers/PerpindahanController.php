<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerpindahanRequest;
use App\Http\Requests\UpdatePerpindahanRequest;
use App\Models\Perpindahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerpindahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function submit(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'alamat_asal' => 'required|string|max:50',
            'alamat_tujuan' => 'required|string|max:50',
            'rencana_tanggal_pindah' => 'required|numeric',
        ]);

        // $request->flash();

        // dd($validator);



        
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $validData = $validator->valid();


            unset($validData['_token']);
            Perpindahan::create($validData);
            return redirect('/pindah'); // Replace '/home' with the desired URL or route name
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerpindahanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Perpindahan $perpindahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perpindahan $perpindahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $perpindahan = Perpindahan::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'alamat_asal' => 'required|string|max:50',
            'alamat_tujuan' => 'required|string|max:50',
            'rencana_tanggal_pindah' => 'required|numeric',
        ]);

        $validData = $validator->valid();
        $perpindahan->update($validData);
        return redirect('/pindah');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perpindahan $perpindahan)
    {
        //
    }
    public function delete(Request $request, $id)
    {
        $perpindahan = Perpindahan::findOrFail($id);
        $perpindahan->delete();
        return redirect()->route('pindah');
    }
}
