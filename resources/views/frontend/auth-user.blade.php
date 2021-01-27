@extends('frontend.layout.app')
@section('title', 'Login | Layanan Pengaduan SMKN 2 Karanganyar')
@section('content')
<section class="w-full h-screen px-8 py-20 bg-gray-100 xl:px-8">
    <div class="max-w-5xl mt-20  mx-auto">
        <div class="flex flex-col items-center md:flex-row">
            <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                <h3
                    class="text-2xl text-center md:text-left  font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                    Tanggapan Anda adalah langkah awal kita untuk Maju
                </h3>
                <p class="text-md text-gray-600 text-center md:text-left md:pr-16">Laporkan kepada kami jika ada
                    Pengaduan atau pun Aspirasi yang dapat menjadi langkah awal untuk kita menjadi lebih baik lagi</p>
            </div>

            <div class="w-full mt-16 md:mt-0 md:w-2/5">
                <div
                    class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                    <h3 class="mb-6 text-2xl font-medium text-center">Login Pengaduan <br> <strong>SMKN 2
                            Karanganyar</strong>
                    </h3>
                    <div class="block mb-4 border border-gray-200 rounded-lg">
                        <input type="text" name="email" id="email"
                            class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                            placeholder="Masukkan Username Anda">
                    </div>
                    <div class="block mb-4 border border-gray-200 rounded-lg">
                        <input type="password" name="password" id="password"
                            class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                            placeholder="Masukkan Password Anda">
                    </div>
                    <div class="block">
                        <button
                            class="w-full px-3 py-4 font-medium font-semibold font-medium text-white bg-blue-600 rounded-lg">Login</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
