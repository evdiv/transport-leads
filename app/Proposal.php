<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;


class Proposal extends Model
{
    protected $guarded = [];


    public function order() {
        return $this->belongsTo(Order::class);
    }


    public function carrier() {
        return $this->belongsTo(Carrier::class);
    }

    

    public static function showForm($order_id) {

    	if(Auth::guard('web-carrier')->check()) {
			
    		$Carrier = Auth::guard('web-carrier')->user();

    		if($Carrier->canAddProposal($order_id)) {
    			return true;
    		}
    	}

    	return false;
    }



    public static function showButton() {
    	$show = true;

    	if(Auth::guard('web-carrier')->check()) {
			$show = false;
    	}

    	if(Auth::guard('web')->check()) {
			$show = false;
    	}

    	return $show;
    }



}
