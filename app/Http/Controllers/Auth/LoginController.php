<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(LoginRequest $request)
    {
        $username = $request->getCredentials();
        
        if (!Auth::attempt($username)) {
            return redirect()->route('login')->with('message', 'Đăng nhập chưa thành công');
        }
        return redirect($this->redirectPath());
    }

    protected function redirectTo()
    {
        if (Auth::user()->isAdmin()) {
            return '/admin/user';
        }
        return '/home';
    }
}
