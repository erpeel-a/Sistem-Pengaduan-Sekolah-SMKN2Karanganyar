@extends('backend.layout.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pengaduan</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('print.laporan') }}" class="btn btn-primary"><i class="fas fa-print"></i></a>
                @if (session('status'))
                    <div class="alert alert-success mt-1">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>kode</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaduan as $item)
                        <tr>
                            <td>{{ $item->kode_pengaduan }}</td>
                            <td>{{ $item->judul_laporan }}</td>
                            <td>{{ $item->jenis_pengaduan }}</td>
                            <td>
                                @if ($item->status === 'pending')
                                    <span class="badge bg-warning">{{ $item->status }}</span>
                                @elseif($item->status === 'ditolak')
                                    <span class="badge bg-danger">{{ $item->status }}</span>
                                @else
                                    <span class="badge bg-success">{{ $item->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('detail.laporan', Crypt::Encrypt($item->id)) }}" class="btn btn-sm btn-info">Detail</a>
                                @if ($item->status === 'pending')
                                    <a href="{{ route('tanggapan',  Crypt::Encrypt($item->id)) }}" class="btn btn-sm btn-primary">Tanggapi</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

@endsection