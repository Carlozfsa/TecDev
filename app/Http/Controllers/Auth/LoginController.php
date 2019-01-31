<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function authenticated()
    {
        if (auth::user()->role_id==1 && auth::user()->reg==1) {
            return redirect('/panel_alumno');
        }else{
            if (auth::user()->role_id==1 && auth::user()->reg==0) {
                return redirect('/reg_alumno');
            }else{
                if (auth::user()->role_id==2) {
                    return redirect('/');
                }else{
                    if(auth::user()->role_id==3){
                        return redirect('/admin_panel');

                    }
                }
            }
        }
//
//        if (auth::user()->role_id==1) {// do your margic here
//            return redirect('/panel_alumno');
//        }else{
//
//            if (auth::user()->role_id==2) {// do your margic here
//                return redirect('/');
//            }else{
//                return redirect('/admin_panel');
//            }
//        }

        //return redirect('/panel_alumno');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username(){
        return 'numero_control';
    }
}
