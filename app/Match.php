<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\Stage;
use App\Group;
use App\MapMatch;

class Match extends Model
{
    public function leftTeam()
    {
        return $this->belongsTo(Team::class, 'left_team_id');
    }
    public function rightTeam()
    {
        return $this->belongsTo(Team::class, 'right_team_id');
    }
    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_id');
    }
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function maps()
    {
        return $this->hasMany(MapMatch::class);
    }
    public function getRouteKeyName()
    {
        return 'id';
    }
}
