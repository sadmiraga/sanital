<?php

namespace App\Http\Controllers;

use App\Models\reference;
use App\Models\job;
use Illuminate\Http\Request;

class belagsarbeitenController extends Controller
{
    public function references()
    {
        $references = reference::where('jobID', 3)->get();
        return view('userExpirience.belagsarbeiten.belagsarbeitenReferences')->with('references', $references);
    }

    public function adminIndex()
    {
        $references = reference::where('jobID', 3)->paginate(20);
        $belagsarbeiten = job::find(3);
        return view('admin.belagsarbeitenAdmin')->with('references', $references)->with('belagsarbeiten', $belagsarbeiten);
    }

    public function job()
    {
        $belagsarbeiten = job::find(3);
        return view('userExpirience.belagsarbeiten.belagsarbeitenJob')->with('belagsarbeiten', $belagsarbeiten);
    }
}
