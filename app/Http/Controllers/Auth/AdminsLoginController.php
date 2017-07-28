<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminsLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:web-admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }


    public function login(Request $request) 
    {
        //Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Attempt to log the user in
        if(Auth::guard('web-admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            
            //If successful, then redirect to the intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        
        //If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function logout()
    {
        $this->guard('web-admin')->logout();
        return redirect('/');
    }

}
