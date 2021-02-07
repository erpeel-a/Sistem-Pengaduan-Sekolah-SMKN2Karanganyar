<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\{
    AuthController,
    PengaduanController,
    TanggapanController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
    API using JWT for Authorization
*/
// Login 
Route::group(['prefix' => '/v1'], function(){
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/refresh',  [AuthController::class, 'refresh']);
        // Route::put('/pengaduan/{id}', [PengaduanController::class, 'update']); // update pengaduan (jika pengaduan belum di konfirmasi)

    Route::group(['middleware' => 'jwt.verify', 'rolecheck:user'], function(){
            // pengaduan
        Route::get('/pengaduan', [PengaduanController::class, 'index']); // search and show all pengaduan
        Route::get('/pengaduan/{id}', [PengaduanController::class, 'index']); // show detail pengaduan
        Route::post('/pengaduan', [PengaduanController::class, 'store']); // store pengaduan
        // tanggapan
        Route::get('/tanggapan', [TanggapanController::class, 'index']); // all tanggapan
        Route::get('/tanggapan/pengaduan/{id}', [TanggapanController::class, 'index']); //spesific tanggapan
        // logout
        Route::post('/logout', [AuthController::class, 'logout']);  

    });
});