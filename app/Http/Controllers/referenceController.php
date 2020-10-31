<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class referenceController extends Controller
{
    public function referenceIndex()
    {
        return view('admin.references');
    }

    public function addReferenceExe(Request $request)
    {
        $request->validate([
            'referenceName' => 'required',
            'referenceImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'referenceName.required' => 'Bitte geben Sie den Namen als Referenz ein',
            'referenceImage.required' => ''
        ]);
    }
}
