<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Troop extends Model
{
  public function council() {
    return $this->belongsTo('App\Council', 'council_id');
  }

  public function event() {
    return $this->hasMany('App\Event', 'event_id');
  }
}
