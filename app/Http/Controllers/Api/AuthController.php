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
			$id = Auth::user()->getAuthIdentifier();
			$user = User::where('id', $id)->first();
			return response()->json($user,200);
		}
        else {
            return response()->json(['message'=>'Invalid credentials'],401);
        }
	}
	// 	Log user out from API
	     public function logout() {
		$id = Auth::guard('api')->user()->id;
		$user = User::where('id', $id)->first();
		$user->api_token = null;
		Auth::logout();
		$user->save();
		return response()->json($user, 200);
	}
	protected function updateAuthUser() {
		$authUser = Auth::user();
		$authUser->api_token = str_random(60);;
		$authUser->save();
        return $authUser;
	}
}
