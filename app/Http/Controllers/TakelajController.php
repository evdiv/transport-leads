<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Takelaj;
use App\Cargo;
use Auth;


class TakelajController extends Controller
{
    public function index() {

        return view('orders.index', compact('orders'));
    }


    public function show($id) {

        return view('orders.takelaj-show', compact('order'));
    }


    public function create() {

        return view('orders.takelaj-create');
    }


    public function store(Request $request) {


        if(Auth::check()) {
            $User = Auth::user();
        
        } elseif ($request->registered == '1') {

            if (!Auth::attempt(['email' => $request->email, 
                                'password' => $request->password])) {
                
                return back()->withInput();
            }

            $User = Auth::user();

        } else {

            $this->validate(request(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:carriers',
                'password' => 'required|string|min:6',
            ]); 

            $User = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
            ]);

            Auth::loginUsingId($User->id, true);
        } 

        $Order = Order::create([
            'user_id' => $User->id,
            'date' => $request->date,
            'time' => $request->time,
            'note' => $request->note
        ]);

        Takelaj::create([
            'order_id' => $Order->id,
            'demontaj' => $request->demontaj,
            'montaj' => $request->montaj,
            'peremeshenie' => $request->peremeshenie,
            'razbor' => $request->razbor
        ]);


        foreach ($request->cargos as $cargo) {
            $cargo['order_id'] = $Order->id;
            $Cargo = Cargo::create($cargo);
        }


        $Order->addLocation($request->city, $request->address);
        $Order->addDestination($request->destinationCity, $request->destinationAddress);

        return response()->json(['response' => 'data has been submitted']);
    }


    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
