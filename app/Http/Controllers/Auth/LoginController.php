<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if ($this->attemptLogin($request)) {
            return redirect($this->redirectPath());
        }
        return redirect()->route('login')->with('message', 'Đăng nhập chưa thành công');
    }

    protected function redirectTo()
    {
        if (Auth::user()->isAdmin()) {
            return '/admin/user';
        }
        return '/home';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
