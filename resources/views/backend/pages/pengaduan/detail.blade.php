@extends('backend.layout.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Pengaduan</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pengaduan') }}">Pengaduan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pengaduan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div>
                    <h4>Informasi Pelapor</h4>
                    <table>
                        <tr>
                            <td width="180px">Nomor Induk</td>
                            <td>:</td>
                            <td>{{ $laporan->nomor_induk }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $laporan->nama }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $laporan->email }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td>
                            <td>:</td>
                            <td>{{ $laporan->no_telp }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $laporan->alamat }}</td>
                        </tr>
                    </table>
                </div>
                <div class="mt-4">
                    <h4>Laporan</h4>
                    <table>
                        <tr>
                            <td width="180px">Kode</td>
                            <td>:</td>
                            <td>{{ $laporan->kode_pengaduan }}</td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{ $laporan->jenis_pengaduan }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>{{ $laporan->tanggal_laporan }}</td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td>:</td>
                            <td>{{ $laporan->judul_laporan }}</td>
                        </tr>
                        <tr>
                            <td>Isi</td>
                            <td>:</td>
                            <td>{{ $laporan->laporan }}</td>
                        </tr>
                        <tr>
                            <td>Berkas Pendukung</td>
                            <td>:</td>
                            <td>
                                @if ($laporan->berkas_pendukung)
                                    {{ $laporan->berkas_pendukung }}
                                    <a href="{{ asset($laporan->berkas_pendukung) }}" download="{{$laporan->berkas_pendukung}}" class="btn btn-primary"><i class="fas fa-download"></i></a>
                                @else
                                Tidak ada berkas
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="mt-4">
                    <h4>Status</h4>
                    @if ($laporan->status === 'sukses')
                        <button class="btn btn-outline-success">Laporan Diterima</button>
                        <div class="mt-4">
                            Tanggapan : 
                            <p>{{ $laporan->tanggapan->tanggapan }}</p>{{ $laporan->tanggapan->user->name }}
                        </div>
                    @elseif($laporan->status === 'ditolak')
                        <button class="btn btn-outline-danger">Laporan Ditolak</button>
                        <div class="mt-4">
                            Tanggapan : 
                            <p>{{ $laporan->tanggapan->tanggapan }}</p>{{ $laporan->tanggapan->user->name }}
                        </div>
                    @else
                        <a href="{{ route('tanggapan',  Crypt::Encrypt($laporan->id)) }}" class="btn btn-primary">Tanggapi</a>
                    @endif
                </div>
            </div>
        </div>

    </section>
</div>

@endsection