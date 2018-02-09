<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }


    public function about(){
        return view('pages.about');
    }


    public function contact() {
        return view('pages.contact');
    }


    public function store() {
        return view('pages.contact');
    }


    public function selectService()
    {
        return view('pages.select-service');
    }


    public function getUserActiveOrders() {
        return view('pages.my-active-orders');
    }


    public function getUserCompleteOrders() {
        return view('pages.my-complete-orders');
    }


    public function getUserAccount() {

        if(Auth::guard('web-carrier')->check()) {

            $carrier = Auth::guard('web-carrier')->user();
            return view('carriers.account', compact('carrier'));
        }

        $user = Auth::user();
        return view('users.account', compact('user'));
    }


    public function updateUserAccount(Request $request) {
        if(Auth::guard('web-carrier')->check()) {

            $user = Auth::user();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;

            $user->save();

            Flash::message('Your account has been updated!');
            return Redirect::to('/account');
        }

    }

}
