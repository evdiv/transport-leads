<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruzchikServiceType extends Model
{
    public function gruzchik() {
    	$this->belongsTo('App\Gruzchik')->withDefault();
    }
}
