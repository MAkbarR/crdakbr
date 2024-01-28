<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login_proses(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email wajib diisi!',
            'password.required'=>'Password wajib diisi!',
        ]
    );

    $infologin=[
        'email'=>$request->email,
        'password'=>$request->password,
    ];

    if(Auth::attempt($infologin)){
        if(Auth::User()->role=='admin'){
            return redirect('admins');
        }elseif(Auth::User()->role=='user'){
          return redirect('users');
        }

    }else {
        return redirect('login')->withErrors('Email atau Password yang anda masukan tidak sesuai!')->withInput();
    }
    }
}
