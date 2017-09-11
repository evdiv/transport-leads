<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pogruzchik extends Model
{
    public function order() {
    	$this->belongsTo('App\Order')->withDefault();
    }
}
