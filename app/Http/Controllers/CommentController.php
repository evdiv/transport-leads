<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CommentController extends Controller
{

     public function store(Order $order) {
     	
     	$order->addComment(request('body'));

     	return back();
     }
}
