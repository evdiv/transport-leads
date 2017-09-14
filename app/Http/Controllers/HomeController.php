<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;


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


    public function index()
    {
        $Order = new Order();
        $orders = $Order->getActiveCreatedByUser();

        return view('users.admin.home', compact('orders'));
    }


    public function completed()
    {
        $Order = new Order();
        $orders = $Order->getCompletedCreatedByUser();

        return view('users.admin.home', compact('orders'));
    }
}
