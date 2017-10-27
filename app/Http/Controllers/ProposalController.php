<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use Auth;

class ProposalController extends Controller
{

    public function store(Request $request) {

        $this->validate(request(), [
        	'amount' => 'required',
            'body' => 'required|min:2'
        ]);

 		$Carrier = Auth::guard('web-carrier')->user();

        $Proposal = Proposal::create([
            'carrier_id' => $Carrier->id,
            'order_id' => $request->order_id,
            'amount' => $request->amount,
        	'body' => $request->body]);

        return back();
    }
}
