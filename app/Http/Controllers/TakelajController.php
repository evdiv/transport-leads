<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $User = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        return true; 
    }



    public function store222(Request $request) {

        if (!Auth::check() && $request->registered == 'true') {

            if (!Auth::attempt(['email' => $request->email, 
                                'password' => $request->password])) {
                
                // Authentication passed...
                return false;
            }

            $User = Auth::user();

        } elseif(!Auth::check() && $request->registered == 'false') {

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

        self::create([
            'order_id' => $Order->id,
            'demontaj' => $request->demontaj,
            'montaj' => $request->montaj,
            'peremeshenie' => $request->peremeshenie,
            'razbor' => $request->razbor,
        ]);


        foreach ($request->cargos as $cargo) {
            $cargo['order_id'] = $Order->id;
            $Cargo = Cargo::create($cargo);
        }

        for ($i = 0; $i < count($request->locations); $i++) {
                $pogruzka = ($i == 0) ? 1 : 0;
                $name = $request->locations[$i];
             $Order->addLocation($name, $pogruzka);
        }

        return true;
    } 


    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
