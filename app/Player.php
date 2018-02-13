<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Player extends Model
{
    use Sortable;

    public $sortable = ['nick', 'firstname', 'lastname', 'team_id', 'player_role_id'];
    public $fillable = ['nick', 'firstname', 'lastname', 'psn', 'player_role_id', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function role()
    {
        return $this->belongsTo(PlayerRole::class, 'player_role_id');
    }
}
