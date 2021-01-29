@extends('backend.layout.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tanggapan Pengaduan</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tanggapan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h6>Kode Pengaduan : {{ $pengaduan->kode_pengaduan }}</h6>
                <form action="{{ route('store.tanggapan', $pengaduan->id) }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="tanggapan" class="form-label">Tangapan</label>
                        <textarea class="form-control @error('tanggapan') is-invalid @enderror" name="tanggapan" id="tanggapan" rows="3"></textarea>
                        @error('tanggapan')
                            <div class="invalid-feedback">
                                <i class="bx bx-radio-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="sukses">
                        <label class="form-check-label text-success" for="inlineRadio1">Terima</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="ditolak">
                        <label class="form-check-label text-danger" for="inlineRadio2">Tolak</label>
                    </div>
                    @error('status')
                        <div class="text-danger">
                            <i class="bx bx-radio-circle"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>

@endsection