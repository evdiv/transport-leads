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
            'password' => bcrypt($request['password']),
        ]);

        Auth::loginUsingId($Carrier->id, true);

        return response()->json(['response' => 'Your account has been created']);

    }





}