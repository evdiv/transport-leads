<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Takelaj;
use App\Cargo;
use Auth;

class OrdersController extends Controller
{
    public function index() {

        $orders = Order::latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function show($id) {
        $order = Order::find($id);
        return view('orders.show', compact('order'));
    }

    public function create() {
        return view('orders.create');
    }



    public function store(Request $request) {


        if (!Auth::check() && !empty($request['login'])) {

            if (!Auth::attempt(['email' => $email, 'password' => $password])) {
                
                // Authentication passed...
                return back()->withInput();
            }

            $User = Auth::user();

        } elseif(!Auth::check()) {

            $this->validate(request(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:carriers',
                'password' => 'required|string|min:6|confirmed',
            ]); 

            $User = User::create(request(['name', 'email', 'phone', 'password']));
            Auth::loginUsingId($User->id, true);
        
        } else {
            $User = Auth::user();
        }


        $Order = Order::create(['user_id' => $User->id]);

        $cargos = json_decode($request['order-takelaj-data'], true);

        foreach ($cargos as $cargo) {
            $Cargo = Cargo::create($cargo);

            Takelaj::create(['order_id' => $Order->id, 'cargo_id' => $Cargo->id]);
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
