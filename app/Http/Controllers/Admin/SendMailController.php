<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        $adduser = session()->get('adduser');
        return view('admin.mail.sendmail',compact('adduser'));
    }
}
