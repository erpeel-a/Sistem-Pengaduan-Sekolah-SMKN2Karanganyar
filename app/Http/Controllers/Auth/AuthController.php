<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.BE_login');
    }

    public function prosesLogin(Request $req)
    {
        // dd($req->all());
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect(route('dashboard'));
        } else {
            return redirect()->back()->with('status', 'Email atau Password Yang Anda Masukan Salah');
        }
    }

    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
            return redirect()->route('login');
        } else {
            return redirect()->back();
        }
    }
}
