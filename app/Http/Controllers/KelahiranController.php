<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKelahiranRequest;
use App\Http\Requests\UpdateKelahiranRequest;
use App\Models\Kelahiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelahiranController extends Controller
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
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|string|max:8|min:8',
            'berat_bayi' => 'required|numeric',
            'panjang_bayi' => 'required|numeric',
        ]);

        $request->flash();

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $validData = $validator->valid();

            unset($validData['_token']);
            Kelahiran::create($validData);

            return redirect('/kelahiran'); // Replace '/home' with the desired URL or route name
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
    public function store(StoreKelahiranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelahiran $kelahiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelahiran $kelahiran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelahiran = Kelahiran::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|string|max:8|min:8',
            'berat_bayi' => 'required|numeric',
            'panjang_bayi' => 'required|numeric',
        ]);

        $validData = $validator->valid();
        $kelahiran->update($validData);
        return redirect('/kelahiran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelahiran $kelahiran)
    {
        
    }

    public function delete(Request $request, $id){
        $kelahiran = Kelahiran::findOrFail($id);
        $kelahiran->delete();
        return redirect()->route('kelahiran');

    }
}
