<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MatchController extends Controller
{
    public function index()
    {
        $matches = Match::latest()->get();
        return view('test', compact('matches'));
    }
}
