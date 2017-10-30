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

    

    public function canBeAccepted() {
       $User = Auth::guard('web')->user(); 

       if(!$User || $User->id != $this->order->user_id) {
            return false;
       }

       if($this->order->in_process || $this->order->completed || !$this->order->active) {
            return false;
       }

       return true;
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
