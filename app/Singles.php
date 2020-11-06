<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singles extends Model
{

    public function artist() {
        return $this->belongsTo('App\Artist');
    }
}
