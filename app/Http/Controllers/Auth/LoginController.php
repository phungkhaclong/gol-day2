<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
* @param  \Illuminate\Http\Request $request
    *
    * @return Response
    */


    public function authenticate(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($user)) {
            $request->session();
            if (Auth::User()->type == 2) {
                return redirect()->route('home')->with('status', 'Đăng nhập thành công');
            }else{
                return redirect('/admin/user')->route('admin.user')->with('status', 'Đăng nhập thành công');
            }
        }else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }

    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


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
