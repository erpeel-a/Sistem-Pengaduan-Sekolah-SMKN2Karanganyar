<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BackEnd\DashboardController;
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
    });
});
