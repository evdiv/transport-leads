<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function store()
    {
        return view('pages.contact');
    }

    public function selectService()
    {
        return view('pages.select-service');
    }

    public function orders() {

        return view('pages.orders');
    }

    public function getUserActiveOrders() {
        return view('pages.my-active-orders');
    }

    public function getUserCompleteOrders() {
        return view('pages.my-complete-orders');
    }

    public function getUserDetails() {
        return view('pages.my-details');
    }

}
