<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('userExpirience.index');
    }

    public function design()
    {

        return view('userExpirience.index');
    }

    public function facilityManagment()
    {
        return view('userExpirience.facilityManagment');
    }

    public function brandSchutz()
    {
        return view('userExpirience.brand');
    }

    public function belagsArbeiten()
    {
        return view('userExpirience.belags');
    }

    public function uberUns()
    {
        return view('userExpirience.uberuns');
    }

    public function jobs()
    {
        $facility = job::find(1);
        $brandschutz = job::find(2);
        $belagsarbeiten = job::find(3);
        return view('userExpirience.jobs')
            ->with('facility', $facility)
            ->with('brandschutz', $brandschutz)
            ->with('belagsarbeiten', $belagsarbeiten);
    }

    public function kontakt()
    {
        return view('userExpirience.kontakt');
    }
}
