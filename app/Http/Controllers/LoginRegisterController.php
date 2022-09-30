<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Request\YourFormRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    public function index(Request $request){
        return view('menu-utama');

        // if(Auth::attempt($request->only('email','password'))){
        //     return redirect('/dashboard');
        // }
        // return redirect('/login');
    }

    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){

        $validatedData = $request->validate([
             'email' => 'required|email',
            'password' => 'required|min:8 ',
        ]);
        messages: ([
            'email.required' => 'Email  Wajib Di Isi',
            'password.required' => 'Password Wajib Di Isi',
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard')->with('success',' Anda Berhasil Masuk');
        }
        return redirect('/menu-utama')->with('error','Email Tidak Terdaftar');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect ('/menu-utama')->with('success',' Anda Berhasil Keluar');
        if(Auth::attempt($request->only('logout'))){
            return redirect('/dashboard')->with('success',' Anda Tidak Bisa Mengaksesnya');
        }
    }
}
