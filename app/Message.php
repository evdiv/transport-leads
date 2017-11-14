<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function proposal() {
        return $this->belongsTo(Proposal::class);
    }

    public function postedfrom() {
        return $this->morphTo();
    }    
}
