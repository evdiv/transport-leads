<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

	protected $guarded = ['id'];
	

	public function carrier() 
	{
		return $this->belongsTo('App\Carrier');
	}

}
