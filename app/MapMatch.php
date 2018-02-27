<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Map;

class MapMatch extends Model
{
    public function mapId()
    {
        return $this->belongsTo(Map::class, 'map_id');
    }
}
