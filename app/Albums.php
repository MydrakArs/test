<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    protected $fillable = ['artist_id', 'name', 'cover'];

    public function artist() {
        return $this->belongsTo('App\Artist');
    }

    public function songs() {
        return $this->hasMany('App\Songs');
    }
}
