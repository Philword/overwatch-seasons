<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function getRouteKeyName()
    {
        return 'name';
    }
    public function stepTwo()
    {
        return "/application/{$this->name}/players";
    }

    public function addPlayer()
    {
        Player::create([
            'nick' => request('nick'),
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'player_role_id' => request('player_role_id'),
            'team_id' => $this->id,
            'psn' => request('psn')
        ]);
    }
}
