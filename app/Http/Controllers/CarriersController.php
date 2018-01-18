<?php

namespace App\Http\Controllers;

use App\Service;
use App\Carrier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CarriersController extends Controller
{

    public function show($id) {
        $carrier = Carrier::find($id);

        return view('carriers.show', compact('carrier'));
    }
    

    public function create() {
        return view( 'carriers.register');
    }


    public function store(Request $request) {

        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:carriers',
            'phone' => 'required|string|min:6',
            'password' => 'required|string|min:6',
        ]); 

        $Carrier = Carrier::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'city' => $request['city'],
            'address' => $request['address'],
            'description' => $request['description'],
            'password' => bcrypt($request['password']),
        ]);


        Service::create([
            'carrier_id' => $Carrier->id,
            'max_cargo_weight' => $request['maxCargoWeight'],
            'max_people' => $request['maxPeople'],
            'max_autokran' => $request['maxAutokran'],
            'max_manipulator' => $request['maxManipulator'],
            'max_nizkoramnik' => $request['maxNizkoramnik'],
            'max_lifter' => $request['maxLifter'],
            'max_open' => $request['max_open']
        ]);

        Auth::guard('web-carrier')->loginUsingId($Carrier->id, true);
        
        return response()->json(['response' => 'Your account has been created']);
    }
}