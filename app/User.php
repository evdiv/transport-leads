<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function orders() {
        return $this->hasMany('App\Order');
    }


    public function getNumberOfActiveOrders() {
        return $this->hasMany('App\Order')->where('completed', 0)->count();
    }


    public function getNumberOfCompleteOrders() {
        return $this->hasMany('App\Order')->where('completed', 1)->count();
    }


    public function comments() {
        return $this->morphMany('App\Comment', 'commentable');
    }


    public function messages() {
        return $this->morphMany('App\Message', 'postedfrom');
    }

}
