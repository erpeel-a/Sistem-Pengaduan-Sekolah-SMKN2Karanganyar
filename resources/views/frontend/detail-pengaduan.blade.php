@extends('frontend.layout.app')
@section('title', 'Detail Pengaduan | SMKN 2 Karanganyar')
@section('content')
    <!---form -->
    <section class="w-full px-8 py-20 bg-gray-100 xl:px-8">
      <div class="max-w-5xl mt-20  mx-auto">
        <div class="flex flex-col justify-between items-center md:flex-row">
          <div class="w-full mt-16 md:mt-0 ">
            <div
              class="w-full h-auto p-10 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
              <h3 class="mb-6 text-2xl font-medium text-center">Detail <strong>Pengaduan / Aspirasi</strong> Anda
              </h3>
              
               <!-- card report -->
            <div class="w-full px-6  py-6 mx-auto mt-10 shadow-2xl bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow-2xl lg:w-5/6 xl:w-2/3">
              <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">{{$groupItem->pengaduan->judul_laporan}}
              </h3>
              <hr class="bg-gray-400 my-4 rounded-md">
              <p class="text-sm sm:text-md md:text-md">Nama Pelapor : <span class="font-semibold  text-cyan-500">{{$groupItem->pengaduan->nama}}</span>
              </p>
              <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">{{$groupItem->pengaduan->laporan}}</p>
                <a href="{{ asset($groupItem->pengaduan->berkas_pendukung) }}" class="text-blue-400" download="{{$groupItem->pengaduan->berkas_pendukung}}">Download Berkas</i></a>
                @if ($groupItem->pengaduan->status === 'pending')    
                <div
                    class="bg-yellow-500 font-semibold text-center mt-4 text-white p-2 rounded  leading-none flex items-center">
                    Pending</span>
                </div>
                @elseif($groupItem->pengaduan->status === 'ditolak')
                    <div
                        class="bg-red-600  font-semibold  text-center mt-4 text-white p-2 rounded  leading-none flex items-center">
                        Di tolak</span>
                    </div>
                @else        
                    <div
                        class="bg-green-600 font-semibold text-center mt-4 text-white p-2 rounded  leading-none flex items-center">
                    Di konfirmasi </span>
                    </div>
                @endif
                <hr class="bg-gray-400 my-4 rounded-md py-1 px-1">
                <h3 class="text-xl font-semibold  text-cyan-500 sm:text-md md:text-md">Tanggapan
                </h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">{{$groupItem->tanggapan}}</p>
                <div class="block">
                  <a href="{{url('site/cek-pengaduan')}}"
                  class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out bg-transparent bg-indigo-600 border border-transparent md:px-3 md:w-auto md:rounded-md mt-5 lg:px-5 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">kembali</a>
                </div>
            </div>
              <!-- card report -->
        </div>
      </div>
    </section>
@endsection