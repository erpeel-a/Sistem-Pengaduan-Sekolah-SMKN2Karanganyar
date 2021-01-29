<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [   
        'nomor_induk',
        'judul_laporan',
        'kode_pengaduan',
        'nama',
        'email',
        'no_telp',
        'alamat',
        'jenis_pengaduan',
        'tanggal_laporan',
        'laporan',
        'berkas_pendukung',
        'status'
    ];

    public function tanggapan(){
        return $this->hasOne(Tanggapan::class, 'pengaduan_id', 'id');
    }
}
