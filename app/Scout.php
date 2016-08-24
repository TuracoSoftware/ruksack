<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    public function council() {
        return $this->belongsTo('App\Council', 'council_id');
    }

    public function troop() {
        return $this->belongsTo('App\Troop', 'troop_id');
    }
}
