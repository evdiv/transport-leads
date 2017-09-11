<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
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
     * Show the application dashboard with the last active Orders
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = User::find(Auth::user()->id)->orders;

        return view('users.admin.home', compact('orders'));
    }
}
