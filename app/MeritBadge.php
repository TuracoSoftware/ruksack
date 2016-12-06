<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeritBadge extends Model
{
    public function requirement() {
      $this->hasMany('App\Requirement');
    }
}
