<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

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
    protected $redirectTo = '/trangchu';

    protected function redirectTo()
    {
        if (Auth::user()->usertype =='admin') {
            return 'lichtrinh';
        }
        elseif (Auth::user()->usertype =='actor') {
          $xe = Auth::user()->xe_id;
          
          return route('dashemployee',[$xe]);
          }
        else {
            return 'trangchu';
        }
        
    }

    protected function logout(Request $request) {
       
        Auth::logout();
       return redirect()->route('trangchu');
        
      
      // return redirect('/trangchu');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
