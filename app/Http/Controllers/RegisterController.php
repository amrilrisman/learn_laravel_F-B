<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $dataCreate = $request->validate([
            "name" => "required|max:255",
            "username" => "required|unique:users|max:255|min:5",
            "email" => "required|unique:users|email:dns",
            "password" => "required|min:3"
        ]);

        $dataCreate["password"] = bcrypt($dataCreate["password"]);

        User::create($dataCreate);

        $request->session()->flash('success create account', "Berhasil membuat akun silahkan login!");
        
        return redirect('/login');

        // dd('BErhasil Daftar');
        // echo request('name');
        // return request()->all();
    }
}
