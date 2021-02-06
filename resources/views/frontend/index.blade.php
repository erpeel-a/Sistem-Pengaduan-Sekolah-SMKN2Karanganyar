@extends('frontend.layout.app')

@section('title', 'Pengaduan Sekolah | SMKN 2 Karanganyar')

@section('content')
   <!-- hero section -->
   <section class="py-20 bg-gray-50">
    <div class="container mt-10 items-center max-w-10xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
      <div class="flex flex-wrap items-center -mx-3">
        <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
          <div class="w-full lg:max-w-md">
            <h2
              class="mb-4 text-2xl  font-bold leading-tight tracking-tight   lg:text-left md:text-center font-heading">
              Selamat Datang di Sistem Layanan Pengaduan & Aspirasi SMKN 2 Karanganyar</h2>
              <p class="mb-4 font-medium tracking-tight text-gray-400 lg:text-left md:text-center  xl:mb-6">Laporkan
                kepada kami jika ada
                Pengaduan atau pun Aspirasi yang dapat menjadi langkah awal untuk kita menjadi lebih baik lagi.</p>
              <div class="relative flex flex-col sm:flex-row  sm:space-x-4">
               <a href="#"
                  class="flex items-center px-6 py-3  text-md mt-2 text-gray-500 bg-gray-200 rounded-md hover:bg-gray-200 hover:text-gray-600">
                  Pelajari Selengkapnya
                </a>
                <a href="{{url('site/buat-pengaduan')}}"
                  class="flex items-center w-full  px-6 py-3 mt-2 mb-3 text-md text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                  Buat Pengaduan
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
          </div>
        </div>
        <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
            class="mx-auto sm:max-w-sm lg:max-w-full" src="{{asset('assets/feature-graphic.png')}}" alt="feature image"></div>
      </div>
    </div>
  </section>
  <!-- end hero section -->

  <!-- about -->
  <section class="relative py-20 bg-white min-w-screen animation-fade animation-delay" id="about">
    <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
      <p
        class="text-xs font-bold md:mt-10 text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
        Selayang Pandang</p>
      <h4
        class="mt-1 text-md font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-md lg:text-mdl sm:text-center sm:mx-0">
        Sekilas Mengenai Aplikasi Pengaduan SMKN 2 Karanganyar</h4>

      <div
        class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
        <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">Untuk Apa sistem ini di buat?</h3>
        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Sapiente, tempora iure culpa eum sed, minus consequuntur nobis ex voluptate quis maxime.
        </p>
      </div>
    </div>
  </section>
  <!-- end about -->
  <!-- Flow content -->
  <section class="relative py-16 bg-white min-w-screen animation-fade animation-delay" id="flow">
    <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
      <p
        class="text-xs font-bold  md:mt-20 text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
        Alur Pengaduan</p>
      <h4
        class="mt-1 text-md font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-md lg:text-mdl sm:text-center sm:mx-0">
        Bagaimana Alur Pengaduan </h4>

      <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

        <div
          class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl">
          <div class="p-3 text-white bg-blue-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M14 3v4a1 1 0 0 0 1 1h4" />
              <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
              <circle cx="6" cy="14" r="3" />
              <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
            </svg>
          </div>
          <h4 class="text-xl font-medium text-gray-700">Masuk/Login</h4>
          <p class="text-base text-center text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Numquam asperiores iure obcaecati officiis harum corporis </p>
        </div>

        <div
          class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
          <div class="p-3 text-white bg-blue-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M18 8a3 3 0 0 1 0 6" />
              <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
              <path
                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
            </svg>
          </div>
          <h4 class="text-xl font-medium text-gray-700">Buat Pengaduan</h4>
          <p class="text-base text-center text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Numquam asperiores iure obcaecati officiis harum corporis .</p>
        </div>

        <div
          class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
          <div class="p-3 text-white bg-blue-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M18 8a3 3 0 0 1 0 6" />
              <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
              <path
                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
            </svg>
          </div>
          <h4 class="text-xl font-medium text-gray-700">Lengkapi Form</h4>
          <p class="text-base text-center text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Numquam asperiores iure obcaecati officiis harum corporis .</p>
        </div>

        <div
          class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
          <div class="p-3 text-white bg-blue-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M18 8a3 3 0 0 1 0 6" />
              <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
              <path
                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
            </svg>
          </div>
          <h4 class="text-xl font-medium text-gray-700">Masukkan Berkas Pendukung (Jika ada)</h4>
          <p class="text-base text-center text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Numquam asperiores iure obcaecati officiis harum corporis .</p>
        </div>

        <div
          class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
          <div class="p-3 text-white bg-blue-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M18 8a3 3 0 0 1 0 6" />
              <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
              <path
                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
            </svg>
          </div>
          <h4 class="text-xl font-medium text-gray-700">Kirim Pengaduan</h4>
          <p class="text-base text-center text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Numquam asperiores iure obcaecati officiis harum corporis .</p>
        </div>

        <div
          class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
          <div class="p-3 text-white bg-blue-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M18 8a3 3 0 0 1 0 6" />
              <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
              <path
                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
            </svg>
          </div>
          <h4 class="text-xl font-medium text-gray-700">Tunggu Konfirmasi</h4>
          <p class="text-base text-center text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Numquam asperiores iure obcaecati officiis harum corporis .</p>
        </div>

      </div>
    </div>
  </section>
  <!-- flow content -->
  <!-- FAQ -->
  <section class="relative py-16 bg-white min-w-screen animation-fade animation-delay" id="faq">
    <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
      <p
        class="text-xs md:mt-10 font-bold text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
        FAQ</p>
      <h4
        class="mt-1 text-md font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-md lg:text-mdl sm:text-center sm:mx-0">
        Pertanyaan yang sering muncul</h4>

      <div
        class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
        <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">Apakah Aplikasi Pengaduan SMKN 2
          Karanganyar ini ?</h3>
        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">Lorem ipsum dolor, sit amet consectetur
          adipisicing elit. Dolores nesciunt optio fuga illo, deleniti inventore consectetur necessitatibus dicta. Id,
          ipsam?.</p>
      </div>
      <div
        class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
        <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">Apakah bentuk respon yang diberikan
          kepada
          pelapor atas pengaduan yang disampaikan?</h3>
        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Id aspernatur distinctio placeat exercitationem autem illum aliquid quas quam enim sit!
        </p>
      </div>
      <div
        class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
        <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">Berapa lama respon atas pengaduan yang
          disampaikan diberikan kepada pelapor?
        </h3>
        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Quasi, ea. Autem reiciendis fugit neque dolore error commodi obcaecati optio! Porro. </p>
      </div>
      <div
        class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
        <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">Apakah pengaduan yang saya berikan akan
          selalu mendapatkan respon?</h3>
        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">Lorem ipsum dolor sit, amet consectetur
          adipisicing elit. Cumque praesentium, facere consequatur sequi recusandae culpa voluptatum ad ea hic atque
          nemo illum fuga porro? Possimus suscipit officiis explicabo id inventore.</p>
      </div>
    </div>
  </section>
  <!-- end FAQ --> 
@endsection