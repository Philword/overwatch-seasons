<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::orderBy('name', 'asc')->get();
        return view('matches.schedule', compact('groups'));
    }
}
