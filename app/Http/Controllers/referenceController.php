<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reference;
use App\Models\job;
use League\CommonMark\Reference\ReferenceInterface;

use function Symfony\Component\String\b;

class referenceController extends Controller
{

    public function referencePublicIndex()
    {
        $references = reference::orderBy('created_at', 'desc')->paginate(20);
        return view('userExpirience.references')->with('references', $references);
    }

    //display reference index page
    public function referenceIndex()
    {
        $facility = job::find(1);
        $brandschutz = job::find(2);
        $belagsarbeiten = job::find(3);
        $references = reference::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.references')->with('references', $references)
            ->with('facility', $facility)
            ->with('brandschutz', $brandschutz)
            ->with('belagsarbeiten', $belagsarbeiten);
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
        return redirect('/admin');
    }


    public function deleteReference($referenceID)
    {
        $reference = reference::find($referenceID);
        $jobID = $reference->jobID;

        //delete image linked to refernce
        $path = public_path() . "/images/referenceImages/" . $reference->referenceImage;
        unlink($path);

        $reference->delete();

        switch ($jobID) {
            case 1:
                return redirect('/admin-facility');
            case 2:
                return redirect('/admin-brandschutz');
            case 3:
                return redirect('admin-belagsarbeiten');
        }
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

        $jobID = $request->input('referenceCategory');



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
        switch ($jobID) {
            case 1:
                return redirect('/admin-facility');
            case 2:
                return redirect('/admin-brandschutz');
            case 3:
                return redirect('admin-belagsarbeiten');
        }
    }
}
