<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::latest()->get();
        return view('test2', compact('groups'));
    }
}
