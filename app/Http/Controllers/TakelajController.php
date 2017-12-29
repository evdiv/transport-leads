<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
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

    public function store() {

        // $User = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'password' => bcrypt($request->password),
        // ]);


        // User::create([
        //     'name' => 'fdfdfdfdfd',
        //     'email' => 'fdfdfd@fdfdf.ca',
        //     'phone' => '4343434343',
        //     'password' => bcrypt('343434343'),
        // ]);
        return response()->json(['response' => 'data has been submitted1']);
        exit;
        
        // return true; 
    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
