<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::all();

        return view('volunteers', compact('volunteers'));
    }

    public function show(Volunteer $volunteer)
    {

        return view('single_volunteer', compact('volunteer'));
    }
}
