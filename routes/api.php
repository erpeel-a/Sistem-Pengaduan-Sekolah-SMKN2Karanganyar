<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\{AuthController, PengaduanController};

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
    API using JWT/Scantum for Authorization
*/

// Login 
Route::group(['prefix' => '/v1'], function(){
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/refresh',  [AuthController::class, 'refresh']);
        Route::get('/pengaduan', [PengaduanController::class, 'index']);
     Route::group(['middleware' => 'jwt.verify'], function(){
        // logout
        Route::post('/logout', [AuthController::class, 'logout']);  
        // input pengaduan
        Route::post('/pengaduan', [PengaduanController::class, 'store']);
            
        // search pengaduan
        
        // detail pengaduan
        Route::get('/pengaduan/{id}', [PengaduanController::class, 'index']);
    });
});