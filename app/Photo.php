<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
   	public function cargo() {
    	$this->belongsTo('App\CargoPhoto')->withDefault();
    }
}
