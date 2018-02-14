<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\Message;


class MessageController extends Controller
{

    public function index() {

        return;
    }


    public function show($id) {
        $carrier = Message::find($id);

        return view('messages.show', compact('message'));
    }


    public function store(Proposal $proposal) {
     	
     	$proposal->addMessage(request('body'));

     	return back();
     }



}
