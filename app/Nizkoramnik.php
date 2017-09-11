<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nizkoramnik extends Model
{
    public function nizkoramnik() {
    	$this->belongsTo('App\Nizkoramnik')->withDefault();
    }
}
