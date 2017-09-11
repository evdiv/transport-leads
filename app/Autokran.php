<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autokran extends Model
{
    public function order() {
    	$this->belongsTo('App\Order')->withDefault();
    }
}
