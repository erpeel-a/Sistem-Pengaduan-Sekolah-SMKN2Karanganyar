<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BackEnd\DashboardController;
use App\Http\Controllers\BackEnd\DataPetugasController;
use App\Http\Controllers\BackEnd\DataUserController;
use App\Http\Controllers\BackEnd\PengaduanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
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

