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
            if(Auth::user()->role === 'user' ) {
               return redirect('/');   
            }
            if (Auth::user()->role === 'admin' || Auth::user()->role === 'petugas' ){
                return redirect(route('dashboard'));
            }
        } else {
            return redirect()->back()->with('error', 'Email atau Password Yang Anda Masukan Salah');
        }
    }

    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
            return redirect()->route('login')->with('status', 'Logout Berhasil, Silahkan Login kembali untuk memakai layanan kami');
        } else {
            return redirect()->back();
        }
    }
}
