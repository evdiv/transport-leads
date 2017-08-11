<?php

namespace App;
use App\Cargo;


use Illuminate\Database\Eloquent\Model;

class Takelaj extends Model
{
    protected $fillable = ['order_id', 'cargo_id'];
}
