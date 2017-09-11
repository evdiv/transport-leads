<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{
    protected $guarded = [];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body) {

        $this->comments()->create(compact('body'));
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


    public function gruzchiks() {
        return $this->hasMany('App\Gruzchik');
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


    public function takelajs() {
        return $this->hasMany('App\Takelaj');
    }

}
