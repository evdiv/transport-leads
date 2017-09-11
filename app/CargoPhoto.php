<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoPhoto extends Model
{

    public function photo() {
    	return $this->hasOne('App\Photo');
    }
}
