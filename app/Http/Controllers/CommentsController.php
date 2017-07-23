<?php

namespace App\Http\Controllers;

use App\Order;

class CommentsController extends Controller
{

    public function store(Order $order) {

        $this->validate(request(), [
            'body' => 'required|min:2'
        ]);

        $order->addComment(request('body'));

        return back();
    }
}
