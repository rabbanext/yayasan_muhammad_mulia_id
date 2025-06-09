<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Service;
use App\Models\Business;
use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $latestActivities = Activity::latest()->take(3)->get();
        $latestPrograms = Program::latest()->take(4)->get();
    
        return view('home', compact('latestActivities', 'latestPrograms'));
    }    

    public function programs()
    {
        $programs = Program::all();
        return view('our-programs', compact('programs'));
    }
    public function readProgram($id)
    {
        $program = Program::find($id);
        
        if (!$program) {
            abort(404, 'Program not found');
        }

        return view('our-programs.read', compact('program'));
    }

    public function services()
    {
        $services = Service::all();
        return view('our-services', compact('services'));
    }

    public function businesses()
    {
        $businesses = Business::all();
        return view('our-businesses', compact('businesses'));
    }

    public function activities()
    {
        $activities = Activity::all();
        return view('our-activities', compact('activities'));
    }
}
