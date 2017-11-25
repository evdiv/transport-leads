<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function store(Request $request) {

        return redirect('/home');
    } 


    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
