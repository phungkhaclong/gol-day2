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


    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($user)) {
            $request->session();
            if (Auth::User() -> isAdmin()) {
                return redirect()->route('admin.user.index')->with('message', 'Đăng nhập thành công');
            }else{
                return redirect()->route('home')->with('massage', 'Đăng nhập thành công');
            }
        }else {
            return redirect()->back()->with('massage', 'Email hoặc Password không chính xác');
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
