<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        if ($this->attemptLogin($request)) {
            return $this->redirectTo();
        }
        return redirect()->route('login')->with('message', 'Đăng nhập chưa thành công');
    }

    protected function redirectTo()
    {
        if (Auth::user()->isAdmin()) {
            return redirect()->route('admin.user.index')->with('message', 'Đăng nhập thành công! Chào mừng bạn đến với Admin') ;
        }

        return redirect()->route('home')->with('message', 'Đăng nhập thành công! Chào mừng bạn');
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
