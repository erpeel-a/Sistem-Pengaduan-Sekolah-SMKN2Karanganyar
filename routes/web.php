<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BackEnd\DashboardController;
use App\Http\Controllers\BackEnd\PengaduanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[SiteController::Class,'index']);

Route::group(['prefix' => 'site'], function(){
    Route::get('/sukses',[SiteController::Class,'success']);
    // user login
    Route::get('/login/user',[SiteController::Class,'user_login']);
    Route::post('/login/user',[SiteController::Class,'handleUserLogin']);
    
    //  pengaduan
    Route::get('/buat-pengaduan',[SiteController::Class,'create']);
    Route::post('/buat-pengaduan',[SiteController::Class,'store']);
    Route::get('/cek-pengaduan',[SiteController::Class,'check_pengaduan']);
    Route::get('/pengaduan/{id}',[SiteController::Class,'handleDetail']);

});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'prosesLogin'])->name('proses.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('proses.logout');

Route::group(['middleware' => ['auth', 'rolecheck:admin, petugas']], function () {
    Route::group(['prefix' => '/panel'], function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
    });
});

Route::group(['middleware' => ['auth', 'rolecheck:user']], function () {
    /* user route */
    // login 
    // Input pengaduan    
    // Search pengaduan
    // detail pengaduan
});

