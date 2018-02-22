<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.admin.home');
    }


    public function update() {

        if(Auth::guard('web-carrier')->check()) {

            $carrier = Auth::guard('web-carrier')->user();
            return view('carriers.account', compact('carrier'));
        }

        $user = Auth::user();
        return view('users.account', compact('user'));
    }


    public function store(Request $request) {
        if(Auth::guard('web')->check()) {

            $user = Auth::user();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;

            $user->save();

            flash('Welcome Aboard!')->success();

            return Redirect::to('/account');
        }
    }
}
