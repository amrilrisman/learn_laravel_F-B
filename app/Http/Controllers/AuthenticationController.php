<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $dataValidate = $request->validate([
            "email" => 'required|email:dns',
            "password" => 'required',
        ]);


        if ($dataValidate) {
            if (Auth::attempt($dataValidate)) {
                // return redirect()->intended('/dashboard');
                return $request->user()->createToken('token', ['server:update'])->plainTextToken;
            } else {
                return response("Email atau Password yang anda masukan salah", 401);
            }
        } else {
            return response("parameter yang dimasukan salah", 400);
        }
    }

    public function logout(Request $request)
    {
        $validate = $request->user()->currentAccessToken()->delete();
        if ($validate) {
            return response("success", 200);
        } else {
            return response("token expired", 402);
        }
    }
}
