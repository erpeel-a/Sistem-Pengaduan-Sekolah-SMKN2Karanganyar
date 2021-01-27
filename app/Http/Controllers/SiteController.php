<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    // input pengaduan
    public function create()
    {
        return view('frontend.input-pengaduan');
    }
    // store
    public function store()
    {
        // action to store data pengaduan into database
    }

    // sukses page
    public function success()
    {
        return view('frontend.sukses');
    }
    // user login
    public function user_login()
    {
        return view('frontend.auth-user');
    }
    //  action user login
    public function handleUserLogin()
    {
        // action to handle login for form user sumbit in login user page
    }
    // seacrh pengaduan
    public function handleSearch()
    {
        // query like with post method
    } 
    // detail 
    public function handleDetail($id = false)
    {
        return view('frontend.detail-pengaduan');
    }

    public function check_pengaduan()
    {
        return view('frontend.cek-pengaduan');
    }

}
