{{-- sukses page --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses</title>
    <link rel="stylesheet" href="{{asset('assets/app.css')}}">
  </head>
  <body>
    <div id="app">
      <div class="container mx-auto h-screen flex justify-center items-center">
        <div class="w-full lg:w-1/3 px-10 lg:px-0">
          <div class="flex justify-center items-center mx-auto mt-6 mb-8">
            <img src="{{asset('assets/success-illustration.svg')}}" alt="" class="w-full" />
          </div>
          <h2 class="font-semibold mb-3 text-3xl text-center">Tanggapan Anda Berhasil dikirim</h2>
          <p class="text-center font-light">
           Silahkan tunggu konfirmasi dari kami   
            <br />
            melalui email yang anda daftarkan
          </p>
          <div class="mb-4 mt-6">
            <div class="mb-3">
              <a href="{{url('/')}}" class="block text-center w-full bg-blue-600 hover:bg-blue-500 text-white font-medium px-4 py-3 text-lg rounded-full" >
                Kembali Ke Beranda
              </a>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>