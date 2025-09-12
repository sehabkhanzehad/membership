<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function sign_in(){
        return view ('auth.sign-in');
    }

     public function sign_up(){
        return view ('auth.sign-up');
    }


    public function authenticate(Request $request){
        $request->validate([
            "email" => ['required','email',  ],
            "password" => ['required'],
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));

        }

        return back()->withErrors([
            "login" => 'Invalid Credentials!'
        ])->withInput();

    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
