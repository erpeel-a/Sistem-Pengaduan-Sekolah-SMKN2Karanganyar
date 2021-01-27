<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Users',
            'users' => User::where(['role' => 'user'])->get(),
        ];
        return view('backend.pages.DataUser.index', $data);
    }
}
