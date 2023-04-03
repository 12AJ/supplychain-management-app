<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   
   
    public function login(Request $request){
        // $input = $request->all();
        // $this->validate($request, [
        //     'email' => 'string|required|email',
        //     'password' => 'string|required'
        // ]);

        
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $usercredentials = $request->only('email', 'password');

        if(auth()->attempt($usercredentials)){

            return redirect('/home');
        }else{
            return back()->with('error', 'email and password does not match.');
        }

    }
}
