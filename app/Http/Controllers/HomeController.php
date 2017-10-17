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
        $active = true;

        return view('users.admin.home', compact('orders', 'active'));
    }


    public function completed()
    {
        $Order = new Order();
        $orders = $Order->getCompletedCreatedByUser();
        $completed = true;

        return view('users.admin.home', compact('orders', 'completed'));
    }
}
