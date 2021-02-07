<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PengaduanRequest;
use App\Models\Pengaduan;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Str;

class PengaduanController extends Controller
{
    public function index($id = false, Request $req)
    {
        $judul_laporan = request()->judul_laporan;
        $limit = $req->input('limit', 6);
        if ($id) {
            $data = Pengaduan::findOrfail($id);
        } else if ($judul_laporan) {
            $data = Pengaduan::where('judul_laporan', 'like', '%' . $judul_laporan . '%')->paginate($limit);
        } else {
            $data = Pengaduan::paginate($limit);
        }
        return Helper::success($data, 'Data Pengaduan Berhasil di ambil');
    }

    public function update(Request $request, $id)
    {
        $is_valid = Validator::make($request->all(), [
            'kode_pengaduan' => 'unique',
            'judul_laporan' => 'required',
            'nomor_induk' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required|min:11|max:13',
            'alamat' => 'required',
            'jenis_pengaduan' => 'required',
            'tanggal_laporan' => 'required',
            'laporan' => 'required',
        ]);
        if ($is_valid->fails()) {
            return Helper::error($is_valid->errors(), 'Kesalahan input data', 400);
        }
        if ($id) {
            $pengaduan = Pengaduan::findOrfail($id);
            if ($request->hasFile('berkas_pendukung')) {
                if (file_exists($pengaduan->berkas_pendukung)) {
                    unlink($pengaduan->berkas_pendukung);
                }
                $file = $request->file('berkas_pendukung');
                $berkas = $file->move('uploads/berkas_pendukung/', time() . '-' . Str::limit(Str::slug($request->judul_laporan), 50, '') . '-' . strtotime('now') . '.' . $file->getClientOriginalExtension());
            }
            $data = $pengaduan->update([
                'nomor_induk' => $request->nomor_induk,
                'judul_laporan' => $request->judul_laporan,
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'jenis_pengaduan' => $request->jenis_pengaduan,
                'tanggal_laporan' => $request->tanggal_laporan,
                'laporan' => $request->laporan,
                'berkas_pendukung' => !empty($berkas) ? $berkas : $pengaduan->berkas_pendukung,
            ]);
            Activity::create([
                'activity' => Auth::user()->name . ' mengubah Data Pengaduan ' . $pengaduan->kode_pengaduan,
            ]);
            return Helper::success($data, 'Data pengaduan berhasil diubah');
        } else {
            return Helper::error(null, 'Data tidak ditemukan', 404);
        }
    }

    public function store(Request $req)
    {
        $is_valid = Validator::make($req->all(), [
            'kode_pengaduan' => 'unique',
            'judul_laporan' => 'required',
            'nomor_induk' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required|min:11|max:13',
            'alamat' => 'required',
            'jenis_pengaduan' => 'required',
            'tanggal_laporan' => 'required',
            'laporan' => 'required',
        ]);
        if ($is_valid->fails()) {
            return Helper::error($is_valid->errors(), 'Kesalahan input data', 400);
        }
        if ($req->hasFile('berkas_pendukung')) {
            $file = request()->file('berkas_pendukung');
            $berkas = $file->move('uploads/berkas_pendukung/', time() . '-' . Str::limit(Str::slug(request()->judul_laporan), 50, '') . '-' . strtotime('now') . '.' . $file->getClientOriginalExtension());
        }
        $data = Pengaduan::create([
            'kode_pengaduan' => 'PGD' . mt_rand(10000, 99999) . mt_rand(100, 999),
            'nomor_induk' => request()->nomor_induk,
            'judul_laporan' => request()->judul_laporan,
            'nama' => request()->nama,
            'email' => request()->email,
            'no_telp' => request()->no_telp,
            'alamat' => request()->alamat,
            'jenis_pengaduan' => request()->jenis_pengaduan,
            'tanggal_laporan' => request()->tanggal_laporan,
            'laporan' => request()->laporan,
            'berkas_pendukung' => !empty($berkas) ? $berkas : '',
            'status' => 'pending',
        ]);
        Activity::create([
            'activity' => Auth::user()->name . ' mengirim ' . $req->jenis_pengaduan,
        ]);
        return Helper::success($data, 'Data Pengaduan berhasil di buat');
    }
}
