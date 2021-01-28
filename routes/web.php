<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BackEnd\DashboardController;
use App\Http\Controllers\BackEnd\DataPetugasController;
use App\Http\Controllers\BackEnd\DataUserController;
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
        Route::get('/masterdata/users', [DataUserController::class, 'index'])->name('data.users');
        Route::get('/masterdata/petugas', [DataPetugasController::class, 'index'])->name('data.petugas');
    });
});

//masterdata
Route::group(['middleware' => ['auth', 'rolecheck:admin']], function () {
    Route::group(['prefix' => '/panel'], function(){
        Route::group(['prefix' => '/masterdata'], function() {
            //users
            Route::get('/users/create', [DataUserController::class, 'create'])->name('create.user');
            Route::post('/users/create', [DataUserController::class, 'store'])->name('store.user');
            Route::get('users/edit/{id}', [DataUserController::class, 'edit'])->name('edit.user');
            Route::put('/users/update/{id}', [DataUserController::class, 'update'])->name('update.user');
            Route::delete('/users/delete/{id}', [DataUserController::class, 'destroy'])->name('destroy.user');
            //petugas
            Route::get('/petugas/create', [DataPetugasController::class, 'create'])->name('create.petugas');
            Route::post('/petugas/create', [DataPetugasController::class, 'store'])->name('store.petugas');
            Route::get('petugas/edit/{id}', [DataPetugasController::class, 'edit'])->name('edit.petugas');
            Route::put('/petugas/update/{id}', [DataPetugasController::class, 'update'])->name('update.petugas');
            Route::delete('/petugas/delete/{id}', [DataPetugasController::class, 'destroy'])->name('destroy.petugas');
        });
    });
});

Route::group(['middleware' => ['auth', 'rolecheck:user']], function () {
    /* user route */
    // login 
    // Input pengaduan    
    // Search pengaduan
    // detail pengaduan
});

