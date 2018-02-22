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


    public function messages() {
        return $this->hasMany(Message::class)->orderBy('created_at', 'desc');
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


    public function canMessageBeAdded() {
        $User = Auth::guard('web')->user(); 
        $Carrier = Auth::guard('web-carrier')->user(); 

        if($this->order->in_process || $this->order->completed || !$this->order->active) {
            return false;
        }

        if($User && $User->id == $this->order->user_id) {
            return true;

        } elseif($Carrier && $Carrier->id == $this->carrier_id) {
            return true;
        }

       return false;
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

    public function addMessage($body) {

        if(Auth::guard('web')->check()) {
            $postedfrom_id = Auth::guard('web')->user()->id;
            $postedfrom_type = "App\User";
        
        } elseif(Auth::guard('web-carrier')->check()) {
            $postedfrom_id = Auth::guard('web-carrier')->user()->id;
            $postedfrom_type = "App\Carrier";
        
        } elseif(Auth::guard('web-admin')->check()) {
            $postedfrom_id = Auth::guard('web-admin')->user()->id;
            $postedfrom_type = "App\Admin";
        }

        $this->messages()->create(compact('body', 'postedfrom_id', 'postedfrom_type'));
    }

}
