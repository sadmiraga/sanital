<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class jobsController extends Controller
{
    public function jobsIndex()
    {
        $jobs = job::all();
        return view('admin.jobs')->with('jobs', $jobs);
    }

    public function editFacility(Request $request)
    {
        $job = job::find(1);
        $job->description = $request->input('description');
        $job->save();
        return redirect('/admin-facility');
    }

    public function editBrandschutz(Request $request)
    {
        $job = job::find(2);
        $job->description = $request->input('description');
        $job->save();
        return redirect('/admin-brandschutz');
    }

    public function editBelagsarbeiten(Request $request)
    {
        $job = job::find(3);
        $job->description = $request->input('description');
        $job->save();
        return redirect('/admin-belagsarbeiten');
    }
}
