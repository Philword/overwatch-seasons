<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Video extends Model
{
    public function leftTeam()
    {
        return $this->belongsTo(Team::class, 'left_team_id');
    }

    public function rightTeam()
    {
        return $this->belongsTo(Team::class, 'right_team_id');
    }
}
