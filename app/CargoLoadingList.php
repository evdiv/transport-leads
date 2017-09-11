<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoLoadingList extends Model
{
    public function cargo() {
    	$this->belongsTo('App\Cargo')->withDefault();
    }
}
