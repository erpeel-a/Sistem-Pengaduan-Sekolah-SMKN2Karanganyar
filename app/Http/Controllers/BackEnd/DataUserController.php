<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

    public function create()
    {
        $data = [
            'title' => 'Tambah User',
        ];
        return view('backend.pages.DataUser.create', $data);
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'nomor_induk' => 'required|numeric',
            'email' => 'required|unique:users',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'role' => $req->role,
            'password' => bcrypt($req->password),
            'nomor_induk' => $req->nomor_induk,
            'tempat_lahir' => $req->tempat_lahir,
            'tanggal_lahir' => $req->tanggal_lahir,
        ]);
        return redirect(route('data.users'))->with('status', 'Data User Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $_dec = Crypt::decrypt($id);
        $data = [
            'title' => 'Edit Petugas',
            'user' => User::findOrfail($_dec),
        ];
        return view('backend.pages.DataUser.edit', $data);
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'name' => 'required',
            'nomor_induk' => 'required|numeric',
            'email' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
        User::where(['id' => $id])->update([
            'name' => $req->name,
            'email' => $req->email,
            'role' => $req->role,
            'password' => bcrypt($req->password),
            'nomor_induk' => $req->nomor_induk,
            'tempat_lahir' => $req->tempat_lahir,
            'tanggal_lahir' => $req->tanggal_lahir,
        ]);
        return redirect(route('data.users'))->with('status', 'Data User Berhasil Diubah');
    }
    
    public function destroy($id)
    {
        $_dec = Crypt::decrypt($id);
        User::destroy($_dec);
        return redirect(route('data.users'))->with('status', 'Data User Berhasil Dihapus');
    }
}
