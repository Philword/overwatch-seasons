<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MatchController extends Controller
{
    public function show(Match $match)
    {
        return view('matches.show', compact('match'));
    }
}
