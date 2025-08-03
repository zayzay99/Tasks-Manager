<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginProses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'

        ],[
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Password Harus 8 Karakter',

        ]);

        $data = array(
            'email' => $request->email,
            'password' => $request->password,
        );

        if(Auth::attempt($data)){
            return redirect()->route('dashboard')->with('success', 'Login Berhasil');

        }else{
            return redirect()->back()->with('error','Username atau Password Salah :(');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login')->with('success', 'Anda Berhasil Logout');
    }
}
