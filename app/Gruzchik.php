<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gruzchik extends Model
{
	
    public function serviceType() {
    	$this->hasOne('App\GruzchikServiceType');
    }

    public function order() {
    	$this->belongsTo('App\Order')->withDefault();
    }
}
