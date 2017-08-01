<?php

namespace App\Http\Controllers\Auth;

use App\Carrier;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;


class CarriersRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = '/carrier/add-info';


    public function __construct()
    {
        $this->middleware('guest:web-carrier');
    }


    public function showRegistrationForm()
    {
        return view('auth.carrier-register');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:carriers',
            'phone' => 'string|max:12',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }



    protected function create(array $data)
    {
        $Carrier = Carrier::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);

        return $Carrier;
    }

    protected function guard() 
    {
        return Auth::guard('web-carrier');
    }

}
