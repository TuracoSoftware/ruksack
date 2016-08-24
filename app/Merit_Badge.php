<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merit_Badge extends Model
{
    public function requirement() {
      $this->hasMany('App\Requirement');
    }
}
