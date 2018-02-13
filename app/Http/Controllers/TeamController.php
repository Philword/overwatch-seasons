<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::where('status', 'published')
                ->latest()
                ->get();
        return view('teams.index', compact('teams'));
    }

    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    public function create()
    {
        return view('teams.create.step-one');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'country_id' => 'required',
            'logo' => 'required|mimes:png',
            'email' => 'required|email',
            'skype' => 'required'
        ]);
        $team = new Team;
        $team->name = request('name');
        $team->country_id = request('country_id');

        $logoName = time().'.'.$request->logo->getClientOriginalExtension();

        if ($request->hasFile('logo')) {
            $logo = $request->file('photo');
            $filename = time() . "." . $request->logo->getClientOriginalExtension();
            $location = ('teams');
            $team->logo = $request->logo->storeAs($location, $logoName);
        }

        $team->email = request('email');
        $team->skype = request('skype');
        $team->save();
        return redirect($team->stepTwo());
    }
}
