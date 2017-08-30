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

    public function getByUserId($user_id) {

    	//we need to get an array with orders and related services
    	$orders = DB::table('orders')->where('orders.user_id', $user_id)->get();
    	

    	return $orders;
    }
}
