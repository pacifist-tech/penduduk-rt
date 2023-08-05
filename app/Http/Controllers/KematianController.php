<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKematianRequest;
use App\Http\Requests\UpdateKematianRequest;
use App\Models\Kematian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_kematian' => 'required|int',
            'sebab_kematian' => 'required|int',
            'tempat_kematian' => 'required|int',
            'umur' => 'required|int',
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
            
            Kematian::create($validData);

            return redirect('/kematian'); // Replace '/home' with the desired URL or route name
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
    public function store(StoreKematianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kematian $kematian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kematian $kematian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $kematian = Kematian::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_kematian' => 'required|int',
            'sebab_kematian' => 'required|int',
            'tempat_kematian' => 'required|int',
            'umur' => 'required|int',
        ]);

        $validData = $validator->valid();
        $kematian->update($validData);
        return redirect('/kematian');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kematian $kematian)
    {
        //
    }
}
