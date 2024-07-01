<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view('login');
    }

    /*public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }*/
}
