<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function login()
    {
        try {
            if(!$token = JWTAuth::attempt(['email' => request()->email, 'password' => request()->password])){
                return response()->json([
                    'error' => 'username & password salah'
                ], 400);
            }
        } catch (JWTException $error) {
            return response()->json([
                'error' => 'kesalahan, tidak bisa membuat token'
            ], 400);
        }
        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
            'user' => JWTAuth::user()
        ]);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function logout()
    {
        if(auth()){
            auth()->logout();
            return response()->json(
                [
                   'success' => 'Logout Berhasil', 
                   'code' => 200,
                ],201);
        }
    }   
}
