<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
  public function council() {
    return $this->belongsTo('App\Council','council_id');
  }
}
