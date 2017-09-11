<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoType extends Model
{
    public function cargo() {
    	$this->belongsTo('App\Cargo')->withDefault();
    }
}
