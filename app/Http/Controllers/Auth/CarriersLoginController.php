<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CarriersLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/carriers/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web-carrier')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.carrier-login');
    }


    public function login(Request $request) 
    {
        //Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Attempt to log the user in
        if(Auth::guard('web-carrier')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            
            //If successful, then redirect to the intended location
            return redirect()->intended(route('carrier.dashboard'));
        }
        
        //If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function logout()
    {
        $this->guard('web-carrier')->logout();
        return redirect('/');
    }

}
