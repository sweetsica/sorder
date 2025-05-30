<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index()
    {
        return view('static.index');
    }

    public function register()
    {
        return view('static.register');
    }

    public function login()
    {
        return view('static.login');
    }
}
