<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Proposal;
use App\Comment;
use App\Takelaj;
use App\Cargo;
use Auth;


class OrdersController extends Controller
{
    public function index() {

        $Order = new Order;
        $orders = $Order->getRecent();
        return view('orders.index', compact('orders'));
    }


    public function show($id) {
        $order = Order::find($id);

        if(!$order->hasAcceptedProposal()) {
            $order->showProposalForm = Proposal::showForm($id);
            $order->showProposalButton = Proposal::showButton();
        }
        
        return view('orders.show', compact('order'));
    }



    public function create() {
        return view('orders.create');
    }


    public function store(Request $request) {

        if (!Auth::check() && $request->customer == 'login') {

            if (!Auth::attempt(['email' => $request->email, 
                                'password' => $request->password])) {
                
                // Authentication passed...
                return back()->withInput();
            }

            $User = Auth::user();

        } elseif(!Auth::check() && $request->customer == 'register') {

            $this->validate(request(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:carriers',
                'password' => 'required|string|min:6|confirmed',
            ]); 

            $User = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
            ]);

            Auth::loginUsingId($User->id, true);
        
        } else {
            $User = Auth::user();
        }

        $Order = Order::create([
            'user_id' => $User->id,
            'note' => $request->note]);

        Takelaj::create([
            'order_id' => $Order->id,
            'demontaj' => $request->demontaj,
            'montaj' => $request->montaj,
            'peremeshenie' => $request->peremeshenie,
            'razbor' => $request->razbor,
        ]);

        $cargos = json_decode($request['order-takelaj-data'], true);

        foreach ($cargos as $cargo) {
            $cargo['order_id'] = $Order->id;
            $Cargo = Cargo::create($cargo);
        }

        for ($i = 0; $i < count($request->locations); $i++) {
                $pogruzka = ($i == 0) ? 1 : 0;
                $name = $request->locations[$i];
             $Order->addLocation($name, $pogruzka);
        }

        return redirect('/home');
    } 


    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
