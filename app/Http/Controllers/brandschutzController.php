<?php

namespace App\Http\Controllers;

use App\Models\reference;
use Illuminate\Http\Request;
use App\Models\job;

class brandschutzController extends Controller
{
    public function references()
    {
        $references = reference::where('jobID', 2)->pagiante(20);
        return view('userExpirience.brandschutz.brandschutzReferences')->with('references', $references);
    }


    public function adminIndex()
    {
        $references = reference::where('jobID', 2)->paginate(20);
        $brandschutz = job::find(2);
        return view('admin.brandschutzAdmin')->with('references', $references)->with('brandschutz', $brandschutz);
    }

    public function job()
    {
        $brandschutz = job::find(2);
        return view('userExpirience.brandschutz.brandschutzJob')->with('brandschutz', $brandschutz);
    }
}
