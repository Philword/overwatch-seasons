<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::sortable()->paginate(10);

        return view('players.index', ['players' => $players]);
    }

    public function create(Team $team)
    {
        return view('teams.create.step-two', compact('team'));
    }

    public function store(Request $request, Team $team)
    {
        $this->validate($request, [
            'nick' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'player_role_id' => 'required',
            'psn' => 'required'
        ]);
        $team->addPlayer();
        return view('teams.create.step-three', compact('team'));
    }
}
