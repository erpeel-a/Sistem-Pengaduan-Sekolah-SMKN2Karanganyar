<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Mail\ConfirmMail;
use Barryvdh\DomPDF\Facade as PDF;

class PengaduanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pengaduan',
            'pengaduan' => Pengaduan::latest()->get(),
        ];
        return view('backend.pages.pengaduan.index', $data);
    }

    public function detail($id)
    {
        $_dec = Crypt::decrypt($id);
        $data = [
            'title' => 'Detail Pengaduan',
            'laporan' => Pengaduan::findOrfail($_dec),
        ];
        return view('backend.pages.pengaduan.detail', $data);
    }

    // public function update(Request $req, $id)
    // {
    //     Pengaduan::where(['id' => $id])->update([
    //         'status' => $req->status,
    //     ]);
    //     return redirect(route('pengaduan'))->with('status', 'Data Pengaduan Berhasil Diubah');
    // }

    public function tanggapan($id)
    {
        $_dec = Crypt::decrypt($id);
        $data = [
            'title' => 'Tanggapan',
            'pengaduan' => Pengaduan::findOrfail($_dec),
        ];
        return view('backend.pages.tanggapan', $data);
    }

    public function storeTanggapan(Request $req, $id)
    {
        $req->validate([
            'tanggapan' => 'required',
            'status' => 'required'
        ]);

        $pengaduan = Pengaduan::findOrfail($id);
        $pengaduan->update([
            'status' => $req->status,
        ]);

        Tanggapan::create([
            'pengaduan_id' => $id,
            'user_id' => Auth::User()->id,
            'tanggapan' => $req->tanggapan
        ]);
        // send mail to user
        Mail::to($pengaduan)->send(new ConfirmMail($pengaduan));
        return redirect(route('pengaduan'))->with('status', 'Data Pengaduan Berhasil Ditanggapi');
    }

    public function createPDF()
    {
        $pengaduan = Pengaduan::all();
        $pdf = PDF::loadView('backend.pages.pengaduan.pengaduan_pdf', ['pengaduan' => $pengaduan]);
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
