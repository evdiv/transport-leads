<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Proposal;
use App\Order;


class ProposalController extends Controller
{

    public function store(Order $order) {

        $this->validate(request(), [
            'amount' => 'required',
            'body' => 'required|min:2'
        ]);

        $Carrier = Auth::guard('web-carrier')->user();

        $Proposal = Proposal::create([
            'carrier_id' => $Carrier->id,
            'order_id' => $order->id,
            'amount' => request('amount'),
            'body' => request('body')
        ]);

        return back();
    }

    public function accept(Order $order, Proposal $proposal) {

        $User = Auth::guard('web')->user();
        $proposal->update(['accepted' => $User->id]);
        $order->update(['in_process' => 1]);

        return back();
    }

}
