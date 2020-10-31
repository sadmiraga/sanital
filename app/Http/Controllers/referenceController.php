<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reference;
use League\CommonMark\Reference\ReferenceInterface;

class referenceController extends Controller
{

    //display reference index page
    public function referenceIndex()
    {

        $references = reference::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.references')->with('references', $references);
    }


    //add new reference
    public function addReferenceExe(Request $request)
    {

        //validate form information
        $request->validate([
            'referenceName' => 'required',
            'referenceImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'referenceName.required' => 'Bitte geben Sie den Namen als Referenz ein',
            'referenceImage.required' => 'Fügen Sie das entsprechende Bild als Referenz ein',
        ]);



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
        return redirect('/adminReferences');
    }


    public function deleteReference($referenceID)
    {
        $reference = reference::find($referenceID);

        //delete image linked to refernce
        $path = public_path() . "/images/referenceImages/" . $reference->referenceImage;
        unlink($path);

        $reference->delete();

        return redirect('/adminReferences');
    }

    public function editReferenceIndex($referenceID)
    {
        $reference = reference::find($referenceID);
        return view('admin.editReference')->with('reference', $reference);
    }

    public function editReferenceExe(Request $request)
    {

        $request->validate([
            'referenceImage'     =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'referenceName' => 'max:255',
        ]);

        $reference = reference::find($request->input('referenceID'));
        $reference->referenceName = $request->input('referenceName');
        $reference->jobID = $request->input('referenceCategory');

        //check if user wanted to change image
        if ($request->has('referenceImage')) {

            //delete image linked to refernce
            $path = public_path() . "/images/referenceImages/" . $reference->referenceImage;
            unlink($path);

            //save name of picture in db
            $imageName = time() . '.' . request()->referenceImage->getClientOriginalExtension();

            //move pic in public/images
            request()->referenceImage->move(public_path('images/referenceImages'), $imageName);
            $reference->referenceImage = $imageName;
        }

        $reference->save();
        return redirect('/adminReferences');
    }
}
