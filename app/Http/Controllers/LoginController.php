<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller {
    public function login(Request $request) {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->intended('/material/create');
        }

        return view('login.login');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function index() {
        return view('login.login');
    }


}
