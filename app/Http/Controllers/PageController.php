<?php

namespace App\Http\Controllers;
use App\Order;


class PageController extends Controller
{
    public function index(Order $order)
    {
        $orders = $order->all();
        return view('home-page', compact('orders'));
    }


    public function about()
    {
        return view('pages.about');
    }


    public function store()
    {
        return view('pages.contact');
    }


    public function selectService()
    {
        return view('pages.select-service');
    }

}
