<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('admin.login');
    }


    public function login(Request $request) {
        $credentials = $request->validate([
           "email" => 'required',
           'password' => 'required'
        ]);

        $credentials['is_active'] = 1;
        $credentials['is_admin'] = 1;
        if(Auth::attempt($credentials)) {
            return redirect()->route('admin.homepage');
        }
        return redirect()->route('auth.index')->with('type','warning')->with("message", "Email or password in not correct!!!");
    }

    public function logout() {
        Auth::logout();
        session()->regenerate();
        return redirect()->route('auth.index');
    }
}
