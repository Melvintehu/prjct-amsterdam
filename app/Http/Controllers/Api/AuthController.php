<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request) {
         $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $token = str_random(60);
            $usera = Auth::user();
            $usera->api_token = $token;
            $usera->save();

            $id = Auth::user()->getAuthIdentifier();
            $user = User::where('id', $id)->first();

            return ['token' => $token, 'user' => $user];
        }
    }
}
