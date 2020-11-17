<?php

namespace App\Http\Controllers;

use App\Models\reference;
use App\Models\job;
use Illuminate\Http\Request;

class facilityController extends Controller
{
    public function references()
    {

        $references = reference::where('jobID', 1)
            ->orderBy('created_at', 'DESC')
            ->paginate(20);

        return view('userExpirience.facility.facilityReferences')->with('references', $references);
    }

    public function adminIndex()
    {

        $references = reference::where('jobID', 1)->orderBy('created_at', 'DESC')->paginate(20);
        $facility = job::find(1);
        return view('admin.facilityAdmin')->with('references', $references)->with('facility', $facility);
    }

    public function job()
    {
        $facility = job::find(1);
        return view('userExpirience.facility.facilityJob')->with('facility', $facility);
    }

    //add new reference
    public function addReference(Request $request)
    {

        //validate form information
        $request->validate([
            'referenceName' => 'required',
            'referenceImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'referenceName.required' => 'Bitte geben Sie den Namen als Referenz ein',
            'referenceImage.required' => 'Fügen Sie das entsprechende Bild als Referenz ein',
        ]);

        if ($request->input('referenceCategory') == 0) {
            $categoryError = "Bitte Kategorie auswahlen";
            return redirect()->back()->with('categoryError ', $categoryError);
        }


        //insert data into database
        $reference = new reference();


        //check if user uploaded image
        if ($request->has('referenceImage')) {
            //save name of picture in db
            $imageName = time() . '.' . request()->referenceImage->getClientOriginalExtension();

            //move pic in public/images
            request()->referenceImage->move(public_path('images/referenceImages'), $imageName);
            $reference->referenceImage = $imageName;
        }

        $reference->referenceName = $request->input('referenceName');
        $reference->jobID = $request->input('referenceCategory');
        $reference->save();
        return redirect('/admin-facility');
    }
}
