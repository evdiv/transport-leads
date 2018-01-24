<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;


class Comment extends Model
{
    protected $fillable = [
        'name', 'email', 'body', 'commentable_id', 'commentable_type'
    ];


    public function order() {
        return $this->belongsTo(Order::class);
    }


    public function commentable() {
        return $this->morphTo();
    }

}
