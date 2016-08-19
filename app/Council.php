<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
  public function troop() {
    return $this->hasMany('App\Troop', 'troop_id');
  }

  public function camp() {
    return $this->hasMany('App\Troop', 'camp_id');
  }
}
