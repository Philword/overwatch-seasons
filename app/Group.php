<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;
use App\Team;
use App\Stage;

class Group extends Model
{
    public function matches()
    {
        return $this->hasMany(Match::class);
    }
}
