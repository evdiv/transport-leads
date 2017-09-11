<?php

namespace App;
use App\Cargo;


use Illuminate\Database\Eloquent\Model;

class Takelaj extends Model
{
    protected $fillable = ['order_id', 'cargo_id'];


    public function order() {
    	$this->belongsTo('App\Order')->withDefault();
    }
}


