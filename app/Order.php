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

    public function addProposal($amount, $body) {

        $this->proposals()->create(compact('amount', 'body'));
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


    public function getRecent() {

        $orders = Order::where([
                ['active', '=', '1'],
                ['completed', '<>', '1']
            ])->limit(20)->get();

        foreach ($orders as &$order) {
            $order['cargos'] = self::find($order->id)->cargos;
            $order['takelaj'] = self::find($order->id)->takelaj;
        }

        return $orders;
    }


    public function getActiveCreatedByUser() {

        $orders = User::find(Auth::user()->id)->orders()->where([
                ['active', '=', '1'],
                ['completed', '<>', '1']
            ])->get();

        foreach ($orders as &$order) {
            $order['cargos'] = self::find($order->id)->cargos;
            $order['takelaj'] = self::find($order->id)->takelaj;
        }

        return $orders;
    }



    public function getCompletedCreatedByUser() {
        $orders = User::find(Auth::user()->id)->orders()->where([
                ['active', '=', '1'],
                ['completed', '=', '1']
            ])->get();

        foreach ($orders as &$order) {
            $order['cargos'] = self::find($order->id)->cargos;
            $order['takelaj'] = self::find($order->id)->takelaj;
        }

        return $orders;
    }

}
