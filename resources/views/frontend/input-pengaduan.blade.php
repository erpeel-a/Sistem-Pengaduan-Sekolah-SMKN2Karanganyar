{{-- Input Pengaduan --}}
@extends('frontend.layout.app')
@section('title','Buat Pengaduan | SMKN 2 Karanganyar')
@section('content')
<section class="w-full px-8 py-20 bg-gray-100 xl:px-8">
  <div class="max-w-5xl mt-20  mx-auto">
    <div class="flex flex-col justify-between items-center md:flex-row">
      <div class="w-full mt-16 md:mt-0 ">
        <div
          class="w-full h-auto p-10 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
          <h3 class="mb-6 text-2xl font-medium text-center">Buat <strong>Pengaduan / Aspirasi</strong>
          </h3>
          <label for="" class="text-gray-600">Judul Pengaduan</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <input type="text" name="judul_pengaduan" id="judul_pengaduan"
              class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
              placeholder="Judul pengaduan">
          </div>
          <label for="" class="text-gray-600">NIS / NIP</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <input type="number" name="nis" id="nis"
              class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
              placeholder="NIS" readonly>
          </div>

          <label for="" class="text-gray-600">Nama</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <input type="Nama" name="Nama" id="Nama"
            class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
          </div>
          <label for="" class="text-gray-600">Email</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <input type="email" name="email" id="email" class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
          </div>
          <label for="" class="text-gray-600">No Telp</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <input type="number" name="notlep" id="notlep"
              class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
          </div>
          <label for="" class="text-gray-600">Alamat</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <input type="alamat" name="Nama" id="Nama"
              class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
          </div>
          <label for="" class="text-gray-600">Jenis Pengaduan</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <select  name="jenis_pengaduan" id="Nama"
              class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
             <option value="" class="block w-full px-4 py-3 border-2 border-transparent text-gray-400 rounded-lg focus:border-blue-500 focus:outline-none">---- Silahkan Pilih jenis Pengaduan ------</option>
            <option value="" class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">Aduan</option>
            <option value="" class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">Aspirasi</option>
          </select> 
          </div>
          <label for="" class="text-gray-600">Tanggal melapor</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <input type="date" name="tanggal" id="Nama"
              class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
          </div>
          <label for="" class="text-gray-600">Tulis Laporan</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
           <textarea name="" id="" cols="30" rows="10" class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"></textarea>
          </div>
          <label for="" class="text-gray-600">Berkas / File Pendukung</label>
          <div class="block mb-4 border border-gray-200 rounded-lg">
            <input type="file" name="Nama" id="Nama"
              class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
          </div>
          <div class="block">
            <button
              class="w-full px-3 py-4 font-medium font-semibold font-medium text-white bg-blue-600 rounded-lg">Kirim</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection