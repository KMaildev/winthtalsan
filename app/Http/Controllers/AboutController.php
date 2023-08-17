<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function md()
    {
        return view('about.md');
    }

    public function team()
    {
        $teams = Team::all();
        return view('about.team', compact('teams'));
    }
}
