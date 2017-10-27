<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Carrier extends Authenticatable
{
    use Notifiable;

    protected $guard = 'web-carrier';


    protected $fillable = [
        'name', 'email', 'phone', 'location', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function proposals() {
        return $this->hasMany('App\Proposal');
    }  


    public function canAddProposal($order_id) {

        $result = Proposal::whereRaw('order_id = ' . $order_id . ' and carrier_id = ' . $this->id)->count();
        return !$result;
    }

}

