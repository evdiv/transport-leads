<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
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
        $Order = new Order();
        $orders = $Order->getByUserId(Auth::user()->id);

        return view('users.admin.home', compact('orders'));
    }
}
