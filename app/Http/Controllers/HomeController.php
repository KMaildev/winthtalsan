<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->take(20)->get();
        $activities = Activitie::orderBy('id', 'desc')->take(20)->get();
        return view('welcome', compact('projects', 'activities'));
    }
}
