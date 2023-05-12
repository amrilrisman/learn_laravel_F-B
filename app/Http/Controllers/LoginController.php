<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index', [
            'title' => 'login'
        ]);
    }

    public function authenti(Request $request)
    {

        $dataValidate = $request->validate([
            "email" => 'required|email:dns',
            "password" => 'required',
        ]);


        if (Auth::attempt($dataValidate)) {
            return redirect()->intended('/dashboard');
        }

        $request->session()->flash('error login', "Password atau email anda salah!");

        return back();
    }

    public function logout(Request $request)
    {
        // logout account
        Auth::logout();

        // buat token menjadi invalid
        $request->session()->invalidate();

        // buat ulang token yang baru 

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
