<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manipulator extends Model
{
    public function order() {
    	$this->belongsTo('App\Order')->withDefault();
    }
}
