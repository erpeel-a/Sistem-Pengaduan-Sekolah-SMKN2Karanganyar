@extends('frontend.layout.app')
@section('title', 'Cek Pengaduan | SMKN 2 Karanganyar')
@section('content')
<section class="w-full px-8 py-20 bg-gray-100 xl:px-8">
    <div class="max-w-5xl mt-20  mx-auto">
        <div class="flex flex-col justify-between items-center md:flex-row">
            <div class="w-full mt-16 md:mt-0 ">
                <div
                    class="w-full h-auto p-10 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                    <h3 class="mb-6 text-2xl font-medium text-center">Cari <strong>Pengaduan / Aspirasi</strong> Anda
                    </h3>
                 <form action="{{route('pengaduan.search')}}" method="POST">
                    @csrf
                    <label for="" class="text-gray-600">Cari</label>
                    <div class="block mb-4 border border-gray-200 rounded-lg">
                        <input type="text" name="keyword" id="nis"
                            class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                            placeholder="Pencarian berdasarkan  judul pengaduan atau Masalah yang di laporkan">
                    </div>
                    <div class="block">
                        <button class="w-full px-3 py-4  font-medium text-white bg-blue-600 rounded-lg">Cari</button>
                    </div>
                 </form>
                    <!-- card report -->
                    @forelse ($pengaduan as $item)
                    <div
                        class="w-full px-6  py-6 mx-auto mt-10 shadow-xl bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow-xl lg:w-5/6 xl:w-2/3">
                        <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">{{$item->judul_laporan}}
                        </h3>
                        <p class="text-sm font-semibold  text-cyan-500 sm:text-md md:text-md">Nama Pelapor : {{$item->nama}} 
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">{{\Str::limit($item->laporan, 20)}}</p>
                        @if ($item->status === 'pending')    
                            <div
                                class="bg-yellow-500 font-semibold text-center mt-4 text-white p-2 rounded  leading-none flex items-center">
                                Pending</span>
                            </div>
                        @elseif($item->status === 'ditolak')
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
                        <div class="block">
                            <a href="{{route('detail.pengaduan', $item->id)}}"
                                class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out bg-transparent bg-indigo-600 border border-transparent md:px-3 md:w-auto md:rounded-md mt-5 lg:px-5 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">Detail</a>
                        </div>
                    </div>
                  
                    @empty
                    <div class="container mx-auto">
                        <div class="w-full bg-red-500 rounded-md mt-8 text-white">
                            <div class="flex justify-between items-center container mx-auto py-4 px-6">
                                <div class="flex">
                                    <svg viewBox="0 0 40 40" class="h-6 w-6 fill-current">
                                        <path
                                            d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z">
                                        </path>
                                    </svg>

                                    <p class="mx-3">Data Tidak Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforelse
                    <div class="my-3">
                        {{ $pengaduan->links() }}
                    </div>

                    <!-- card report -->
                </div>
            </div>
</section>
@endsection
