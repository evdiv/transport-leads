<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

use Auth;
use DB;

class Order extends Model
{
    protected $guarded = [];


    public function proposals() {
        return $this->hasMany(Proposal::class);
    }


    public function comments() {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'asc');
    }


    public function user() {
        return $this->hasOne(User::class);
    }


    public function addProposal($amount, $body) {
        $this->proposals()->create(compact('amount', 'body'));
    }


    public function addComment($body) {

        if(Auth::guard('web')->check()) {
            $commentable_id = Auth::guard('web')->user()->id;
            $commentable_type = "App\User";
        
        } elseif(Auth::guard('web-carrier')->check()) {
            $commentable_id = Auth::guard('web-carrier')->user()->id;
            $commentable_type = "App\Carrier";
        
        } elseif(Auth::guard('web-admin')->check()) {
            $commentable_id = Auth::guard('web-admin')->user()->id;
            $commentable_type = "App\Admin";
        }

        $this->comments()->create(compact('body', 'commentable_id', 'commentable_type'));
    }    


    public function locations() {
        return $this->hasMany('App\Location');
    }

    public function addLocation($city, $address, $pogruzka = 1) {
        $this->locations()->create(compact('city', 'address', 'pogruzka'));
    }

    public function addDestination($city, $address) {
        $this->addLocation($city, $address, 0);
    }


    public function cargos() {
        return $this->hasMany('App\Cargo');
    }

    public function autokrans() {
        return $this->hasMany('App\Autokran');
    }


    public function borttovoys() {
        return $this->hasMany('App\Bortovoy');
    }

    public function manipulators() {
        return $this->hasMany('App\Manipulator');
    }


    public function nizkoramniks() {
        return $this->hasMany('App\Nizkoramnik');
    }  


    public function pogruzchiks() {
        return $this->hasMany('App\Pogruzchik');
    }  


    public function gruzchiks() {
        return $this->hasOne('App\Gruzchik');
    }


    public function takelaj() {
        return $this->hasOne('App\Takelaj');
    }


    public function scopeProposable($query) {
        return $query->where([
            ['active', '=', '1'],
            ['in_proccess', '<>', '1'],
            ['completed', '<>', '1']
        ]); 
    }

    public function scopeActiveIncomplete($query) {
        return $query->where([
            ['active', '=', '1'],
            ['completed', '<>', '1']
        ]); 
    }

    public function hasAcceptedProposal() {
        foreach ($this->proposals as $proposal) {
            if($proposal->accepted) {
                return true;
            }
        }
        return false;
    }


    private function withRelatedFields($orders) {
        foreach ($orders as &$order) {
            $order['cargos'] = self::find($order->id)->cargos;
            $order['takelaj'] = self::find($order->id)->takelaj;
            $order['locations'] = self::find($order->id)->locations;
        }

        return $orders;
    }


    public function recent() {

        $orders = Order::where([
                ['active', '=', '1'],
                ['completed', '<>', '1']
            ])->limit(20)->get();

        return self::withRelatedFields($orders);
    }


    public function activeCreatedByUser() {

        $orders = User::find(Auth::user()->id)->orders()->where([
                ['active', '=', '1'],
                ['completed', '<>', '1']
            ])->get();

        return self::withRelatedFields($orders);;
    }



    public function completedCreatedByUser() {
        $orders = User::find(Auth::user()->id)->orders()->where([
                ['active', '=', '1'],
                ['completed', '=', '1']
            ])->get();

        return self::withRelatedFields($orders);
    }



    public function areCommentsAllowed() {

        if(Auth::guard('web-carrier')->check()) {
            return true;
        }

        if(Auth::guard('web-admin')->check()) {
            return true;
        }

        if(Auth::guard('web')->check() && Auth::guard('web')->user()->id == $this->user_id) {
            return true;
        }

        return false;
    }

}
