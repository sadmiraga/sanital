<?php

namespace App\Http\Controllers;

use App\Models\reference;
use App\Models\job;
use Illuminate\Http\Request;

class facilityController extends Controller
{
    public function references()
    {
        $references = reference::where('jobID', 1)->paginate(20);
        return view('userExpirience.facility.facilityReferences')->with('references', $references);
    }

    public function adminIndex()
    {
        $references = reference::where('jobID', 1)->paginate(20);
        $facility = job::find(1);
        return view('admin.facilityAdmin')->with('references', $references)->with('facility', $facility);
    }
}
