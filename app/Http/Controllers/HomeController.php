<?php

namespace App\Http\Controllers;

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
