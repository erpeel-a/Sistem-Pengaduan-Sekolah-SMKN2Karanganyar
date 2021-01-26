<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Pengaduan'
        ];
        return view('backend.pages.pengaduan.index', $data);
    }
}
