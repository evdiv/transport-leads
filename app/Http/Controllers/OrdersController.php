<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function index() {

        $orders = Order::latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function show($id) {
        $order = Order::find($id);
        return view('orders.show', compact('order'));
    }

    public function create() {
        return view('orders.create');
    }

    public function store() {

        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required'
        ]);

        Order::create(request(['title', 'description']));

        return redirect('/');
    }


    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
