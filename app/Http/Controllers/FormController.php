<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    //
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            // If validation fails, redirect back to the same page with errors
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            // If validation succeeds, redirect to the home page or a specific route
            return redirect('/'); // Replace '/home' with the desired URL or route name
        }
    }
}
