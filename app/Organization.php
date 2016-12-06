<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
  public function user() {
    return $this->belongsToMany('App\User');
  }
  public function troop() {
    return $this->hasMany('App\Troop', 'troop_id');
  }

  public function camp() {
    return $this->hasMany('App\Troop', 'camp_id');
  }

  public function event() {
    return $this->hasMany('App\Event', 'event_id');
  }
}
