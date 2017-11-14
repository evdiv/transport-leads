<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;


class MessageController extends Controller
{
     public function store(Proposal $proposal) {
     	
     	$proposal->addMessage(request('body'));

     	return back();
     }
}
