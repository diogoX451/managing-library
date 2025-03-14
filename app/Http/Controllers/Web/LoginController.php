<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }
}
