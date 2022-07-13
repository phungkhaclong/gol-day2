<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('page.list_user');
    }
    public function adduser()
    {
        return view('page.add_user');
    }
}
