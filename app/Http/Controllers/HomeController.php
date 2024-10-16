<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function activities()
    {
        $activities = Activity::all();
        return view('our-activities', compact('activities'));
    }
}
