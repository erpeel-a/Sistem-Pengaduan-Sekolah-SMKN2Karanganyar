{{-- Input Pengaduan --}}
@extends('frontend.layout.app')
@section('title','Ubah Pengaduan | SMKN 2 Karanganyar')
@section('content')
<section class="w-full px-8 py-20 bg-gray-100 xl:px-8">
    <div class="max-w-5xl mt-20  mx-auto">
        <div class="flex flex-col justify-between items-center md:flex-row">
            <div class="w-full mt-16 md:mt-0 ">
                <form action="{{route('pengaduan.update', $pengaduan->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div
                        class="w-full h-auto p-10 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                        <h3 class="mb-6 text-2xl font-medium text-center">Ubah <strong>Pengaduan / Aspirasi</strong>
                        </h3>
                        <label for="" class="text-gray-600">Judul Pengaduan</label>
                        <div class="block mb-4 border border-gray-200 rounded-lg">
                            <input type="text" name="judul_laporan" id="judul_pengaduan"
                                class="block   @error('judul_laporan') border border-red-500 @enderror  w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none" value="{{$pengaduan->judul_laporan}}"
                                placeholder="Judul pengaduan">
                        </div>
                        @error('judul_laporan')
                         <div class="text-red-600 mb-4">{{ $message }}</div>
                        @enderror
                        <label for="" class="text-gray-600">Nomor Induk</label>
                        <div class="block mb-4 border border-gray-200 rounded-lg">
                            <input type="number" name="nomor_induk" id="nis"
                                class="block w-full @error('nomor_induk') border border-red-500 @enderror px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"  value="{{auth()->user()->nomor_induk}}" readonly
                                placeholder="Nomor Induk" readonly>
                        </div>
                        @error('nomor_induk')
                        <div class="text-red-600 mb-4">{{ $message }}</div>
                       @enderror
                        <label for="" class="text-gray-600">Nama</label>
                        <div class="block mb-4 border @error('nama') border border-red-500 @enderror border-gray-200 rounded-lg">
                            <input type="Nama" name="nama" id="Nama"
                                class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                readonly value="{{auth()->user()->name}}">
                        </div>
                        @error('nama')
                        <div class="text-red-600 mb-4">{{ $message }}</div>
                       @enderror
                        <label for="" class="text-gray-600">Email</label>
                        <div class="block mb-4 border @error('email') border border-red-500 @enderror border-gray-200 rounded-lg">
                            <input type="email" name="email" id="email"
                                class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                readonly value="{{auth()->user()->email}}">
                        </div>
                        @error('email')
                        <div class="text-red-600 mb-4">{{ $message }}</div>
                       @enderror
                        <label for="" class="text-gray-600">No Telp</label>
                        <div class="block mb-4 border @error('no_telp') border border-red-500 @enderror border-gray-200 rounded-lg">
                            <input type="number" name="no_telp" id="no_telp"
                                class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none" value="{{$pengaduan->no_telp}}">
                        </div>
                        @error('no_telp')
                        <div class="text-red-600 mb-4">{{ $message }}</div>
                       @enderror
                        <label for="" class="text-gray-600">Alamat</label>
                        <div class="block mb-4 border @error('alamat') border border-red-500 @enderror border-gray-200 rounded-lg">
                            <input type="alamat" name="alamat" id="alamat"
                                class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"  value="{{$pengaduan->alamat}}">
                        </div>
                        @error('alamat')
                        <div class="text-red-600 mb-4">{{ $message }}</div>
                       @enderror
                        <label for="" class="text-gray-600">Jenis Pengaduan</label>
                        <div class="block mb-4 border @error('jenis_pengaduan') border border-red-500 @enderror border-gray-200 rounded-lg">
                            <select name="jenis_pengaduan" id="Nama"
                                class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                @foreach ($jenis as $item)
                                    @if ($item === $pengaduan->jenis_pengaduan)
                                        <option value="{{$item}}"
                                        class="block w-full px-4 py-3 border-2 border-transparent text-gray-400 rounded-lg focus:border-blue-500 focus:outline-none" selected>{{$item}}</option>
                                    @else
                                        <option value="{{$item}}"
                                        class="block w-full px-4 py-3 border-2 border-transparent text-gray-400 rounded-lg focus:border-blue-500 focus:outline-none">{{$item}}</option> 
                                     @endif
                                @endforeach
                            </select>
                        </div>
                        @error('jenis_pengaduan')
                        <div class="text-red-600 mb-4">{{ $message }}</div>
                       @enderror
                        <label for="" class="text-gray-600">Tanggal melapor</label>
                        <div class="block mb-4 @error('tanggal_pengaduan') border border-red-500 @enderror border border-gray-200 rounded-lg">
                            <input type="date" name="tanggal_laporan" id="Nama"
                                class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none" value="{{$pengaduan->tanggal_laporan}}">
                        </div>
                        @error('tanggal_pengaduan')
                        <div class="text-red-600 mb-4">{{ $message }}</div>
                       @enderror
                        <label for="" class="text-gray-600">Tulis Laporan</label>
                        <div class="block mb-4 @error('laporan') border border-red-500 @enderror border border-gray-200 rounded-lg">
                            <textarea name="laporan" id="" cols="30" rows="10"
                                class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">{{$pengaduan->laporan}}</textarea>
                        </div>
                        @error('laporan')
                        <div class="text-red-600 mb-4">{{ $message }}</div>
                       @enderror
                       <label for="" class="text-gray-600">Berkas / File Pendukung</label>
                       <div class="block  border border-gray-200 rounded-lg">
                           <input type="file" name="berkas_pendukung" id="Nama"
                           class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                        </div>
                        <div class="mb-4">  
                            <a href="{{ asset($pengaduan->berkas_pendukung) }}" class="text-blue-400" download="{{$pengaduan->berkas_pendukung}}">Download Berkas</i></a>
                        </div>
                        <div class="block">
                            <button type="submit"
                                class="w-full px-3 py-4 font-medium font-semibold font-medium text-white bg-blue-600 rounded-lg">Ubah</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
