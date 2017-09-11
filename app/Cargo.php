<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $guarded = [];

    public function order() {
    	$this->belongsTo('App\Order')->withDefault();
    }

    public function loadingLists() {
    	return $this->hasMany('App\CargoLoadingList');
    }

    public function photos() {
    	return $this->hasMany('App\CargoPhoto');
    }

    public function type() {
    	$this->hasOne('App\CargoType');
    }
}
